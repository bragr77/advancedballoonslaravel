<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RespuestaAutomatica extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje enviado por AdvancedBallons';
    public $datosemail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datosemail)
    {
        $this->datosemail = $datosemail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.respuesta-automatica');
    }
}
