<?php

namespace App\Providers;

use App\Events\ActuacionEvent;
use App\Listeners\ActuacionListener;
use App\Listeners\IngresoExitoso;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ActuacionEvent::class => [
            ActuacionListener::class,
        ],
        'Illuminate\Auth\Events\Login' =>[IngresoExitoso::class]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
