<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NuevoUsuario extends Mailable
{
    use Queueable, SerializesModels;


    public $subject = "Información de Usuario";
    public $nombre;
    public $contra;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info , $contraseña)
    {

        $this->nombre = $info;
        $this->contra = $contraseña;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.NuevoUsuario');
    }
}
