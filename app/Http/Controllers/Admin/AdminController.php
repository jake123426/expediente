<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.user.index');
    }


    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }


    public function store(Request $request)
    {

        /* return $request; */
        $request->validate([
            'name'      =>  'required|string|max:20',
            'apellido'  =>  'required|string|max:30',
            'celular'   =>  'required|numeric',
            'CI'        =>  'required|numeric',
            'email'     =>  'required|email|max:30',
            'password'  =>  'required|max:20',
            'roles'     => 'required'
        ]);
        $usuario = User::create([
            'name'      => $request->name,
            'apellido'  => $request->apellido,
            'celular'   => $request->celular,
            'CI'        => $request->CI,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
        ]);
        $usuario->roles()->sync($request->roles);
        return redirect()->route('admin.usuarios.index')->with('info', 'El usuario se creó con éxito');

    }

    public function edit(User $usuario)
    {
        $roles = Role::all();
        return view('admin.user.edit', compact('usuario', 'roles'));
    }


    public function update(Request $request, User $usuario)
    {
        $usuario->roles()->sync($request->roles);
        $request->validate([
            'name'      =>  'required|string|max:20',
            'apellido'  =>  'required|string|max:30',
            'celular'   =>  'required|numeric',
            'CI'        =>  'required|numeric',
            'email'     =>  'required|email|max:30',
            'password'  =>  'required|max:20',
        ]);
        $usuario->update([
            'name'      =>  $request->name,
            'apellido'  =>  $request->apellido,
            'celular'   =>  $request->celular,
            'CI'        =>  $request->CI,
            'email'     =>  $request->email,
            'password'  =>  bcrypt($request->password),
        ]);

        return redirect()->route('admin.usuarios.index')->with('info', 'El usuario se actualizo con exito');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('admin.usuarios.index')->with('info', 'El usuario se eliminó con éxito');
    }

    public function bitacora(){
        $actividades = Activity::all();
        /* return $actividades; */

        return view('admin.bitacora', compact('actividades'));
    }
}
