<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expediente;
use App\Models\User;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    public function expedientes(User $id){


        $expedientes = $id->expedientes;
        $usuario = $id->id;
        return view('admin.expedientes.index', compact('expedientes', 'usuario'));
    }
    public function agregar(Request $request, User $id){
        $request->validate([
            'NroExpediente' => 'required|numeric'
        ]);
        $exp = Expediente::where('NroExpediente',$request->NroExpediente)->first();
        if (isset($exp)) {
            if (! $id->expedientes->contains($exp->id)) {
                $id->expedientes()->attach($exp->id);
                return redirect()->route('admin.expedientes', compact('id'))->with('info', 'Se agrego el expediente');
            }else{
                return redirect()->route('admin.expedientes', compact('id'))->with('info', 'El expediente ya esta registrado');
            }

        }else{
            return redirect()->route('admin.expedientes', compact('id'))->with('info', 'Expediente no registrado');
        }
    }
}
