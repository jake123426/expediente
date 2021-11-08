<?php

namespace App\Notifications;

use App\Models\Expediente;
use App\Models\Presentation;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ActuacionNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Presentation $actuacion)
    {
        $this->actuacion = $actuacion;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $Nro = Expediente::where('id', $this->actuacion->expediente_id)->first();
        return [
            'NroActuacion' => $this->actuacion->id,
            'Descripcion' => $this->actuacion->descripcion,
            'NroExpediente' => $Nro->NroExpediente,
            'time'        => Carbon::now()->diffForHumans()
        ];
    }
}
