<?php

namespace App\Listeners;


use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;

class IngresoExitoso
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $event->subject = 'login';
        $event->description = 'Usuario accedio al sistema';
        /* Session::flash('Acceso', 'Hola '.$event->user->name.', bienvenido de nuevo'); */
        activity($event->subject)
            ->log($event->description);
    }
}
