<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Estatus de Documentacion";
    Public $nameDoc;
    public $status;
    public $coment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($doc, $status,$coment)
    {
        $this->nameDoc= $doc;
        $this->status=$status;
        $this->coment=$coment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notificacion');
    }
}
