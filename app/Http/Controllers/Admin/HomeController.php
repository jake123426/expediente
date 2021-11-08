<?php

namespace App\Http\Controllers\Admin;

use App\Events\ActuacionEvent;
use App\Http\Controllers\Controller;
use App\Models\Archivo;
use App\Models\Expediente;
use App\Models\Presentation;
use App\Models\User;
use App\Notifications\ActuacionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index($id)
    {
        $ExpId = $id;


        return view('admin.index', compact('ExpId'));
    }

    public function create($id)
    {

        return view('admin.create', compact('id'));
    }


    public function store(Request $request)
    {
        /* $res = User::all()->except([1,2]); */
        /* $res = User::with('roles')->get(); */
       /*  $res = Role::all()->pluck('id'); */
       /* $roles = Role::all()->except(1); */
        /* $res = Auth::user()->roles->pluck('name'); */
        /* $res = User::role(['Admin'])->pluck('id'); */

        /* $exp = Expediente::where('id', 1)->first();
        $res = $exp->usuarios()->pluck('user_id');
        return $res; */


        $request->validate([
            'descripcion'   => 'required|max:100',
            'tipo'          => 'required|max:100',
            'NroFojas'      => 'required|integer',
            'file'          => 'required',
        ]);


        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('assets', $filename);

        $presentacion = Presentation::create([
            'descripcion' => $request->descripcion,
            'tipo'         => $request->tipo,
            'NroFojas' => $request->NroFojas,
            'file' => $filename,
            'expediente_id' => $request->expediente_id
        ]);
        $id = $request->expediente_id;
        /* User::all()
                ->except($id)
                ->each(function(User $user) use ($presentacion){
                    $user->notify(new ActuacionNotification($presentacion));
                }); */
        event(new ActuacionEvent($presentacion));

        return redirect()->route('admin.home', compact('id'))->with('info', 'Se completo el registro con exito');
    }

    public function mostrar($id)
    {
        $presentacion = Presentation::find($id);
        return view('admin.mostrar', compact('presentacion'));
    }

    public function download($file)
    {

        return response()->download(public_path('assets/' . $file));
    }
}
