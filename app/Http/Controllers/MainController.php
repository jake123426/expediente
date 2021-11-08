<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class MainController extends Controller
{

    public function home(){
        $usuario = User::find(auth()->user()->id);
        if ($usuario->hasRole('Admin')) {
            return redirect()->route('admin.usuarios.index');
        } else {
            return redirect()->route('main.expedientes');
        }
    }

    public function expedientes(){
        $usuario = User::find(auth()->user()->id);
        $result = $usuario->expedientes;
        /* return $expedientes; */
        return view('main.expediente', compact('result'));
    }
    public function notificaciones(){
        $notificaciones1 = auth()->user()->unreadNotifications;
        $notificaciones2 = auth()->user()->readNotifications;

        auth()->user()->unreadNotifications->markAsRead();
        return view('main.notificaciones', compact('notificaciones1', 'notificaciones2'));
    }
}
