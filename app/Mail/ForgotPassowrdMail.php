<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotPassowrdMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;


    public function __construct($user)
    {
        $this->user = $user;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Rest your via Passowrd Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.forgot',
            with:[
                'user' => $this->user,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     * to resert the passwords.
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
