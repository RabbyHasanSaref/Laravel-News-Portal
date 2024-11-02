<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterSubscribe extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    public function __construct($email)
    {
       $this->email = $email;
    }

    public function build(){
        return $this->subject('Welcome to Bogra blog')->view('Backend.newsLetter');
    }
}
