<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientUploadEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $clientupload;
    public function __construct($clientupload)
    {
        $this -> clientupload = $clientupload;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->to('achialands@icloud.com')
        ->subject('Message with Upload from Website Client')

        ->view('clientupload.clientfileupload');
        // ->attach('client_uploads/$fileName');
    }
}
