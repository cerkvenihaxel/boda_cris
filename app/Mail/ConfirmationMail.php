<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invitation;

    public function __construct($invitation)
    {
        $this->invitation = $invitation;
    }

    public function build()
    {
        return $this->subject('Nueva Confirmación de Asistencia')
            ->view('emails.confirmation');
    }
}
