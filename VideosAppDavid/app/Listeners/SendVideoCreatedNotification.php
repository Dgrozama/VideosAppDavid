<?php

namespace App\Listeners;

use App\Events\VideoCreated;
use App\Mail\VideoCreatedMail;
use Illuminate\Support\Facades\Mail;

class SendVideoCreatedNotification
{
    /**
     * Handle the event.
     *
     * @param  VideoCreated  $event
     * @return void
     */
    public function handle(VideoCreated $event)
    {
        // Obtener el correo del creador del video o un destinatario predeterminado
        $recipientEmail = $event->video->user->email ?? 'test@example.com';

        // Enviar el correo
        Mail::to($recipientEmail)->send(new VideoCreatedMail($event->video));
    }
}
