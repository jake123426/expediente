<?php

namespace App\Http\Controllers;

use App\Events\ActuacionEvent;
use App\Models\Expediente;
use App\Models\Presentation;
use App\Models\User;
use Illuminate\Http\Request;

class ExpedienteApiController extends Controller
{
    public function expedientes($id){
        $usuario = User::find($id);
        $result = $usuario->expedientes;
        /* $expedientes = Expediente::all(); */
        return $result;
    }

    public function actuaciones($id){
        $expediente = Expediente::find($id);
        $result = $expediente->presentaciones;
        return $result;
    }

    public function storeActuacion(Request $request){
        /* $request->validate([
            'descripcion'   => 'required|max:100',
            'tipo'          => 'required|max:100',
            'nroFojas'      => 'required|integer',

        ]); */


        /* $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('assets', $filename); */

        $presentacion = Presentation::create([
            'descripcion' => $request->descripcion,
            'tipo'         => $request->tipo,
            'NroFojas'  =>   $request->NroFojas,
            /* 'file' => $filename,
            'expediente_id' => $request->expediente_id */
        ]);


        /* User::all()
                ->except($id)
                ->each(function(User $user) use ($presentacion){
                    $user->notify(new ActuacionNotification($presentacion));
                }); */
        event(new ActuacionEvent($presentacion));

        return response()->json([
            'succes' => true
        ]);
    }
}
