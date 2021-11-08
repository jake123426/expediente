<?php

namespace App\Listeners;

use App\Models\Expediente;
use App\Models\User;
use App\Notifications\ActuacionNotification;
use App\Notifications\InvoicePaid;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class ActuacionListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $us = [];

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $rol = User::role(['Admin'])->pluck('id');
        $array = [auth()->user()->id];
        foreach($rol as $roles){
            $array[] = $roles;
        }


        $exp = Expediente::where('id', $event->actuacion->expediente_id)->first();
        $user = $exp->usuarios()->pluck('user_id');
        foreach($user as $usuario){
            $this->us[] = $usuario;
        }
        $this->us = array_diff($this->us , $array);


        User::all()
                ->except($array)
                ->each(function(User $user) use ($event){

                    if(in_array($user->id, $this->us)){
                        Notification::send($user, new ActuacionNotification($event->actuacion));
                    }

                });
    }
}
