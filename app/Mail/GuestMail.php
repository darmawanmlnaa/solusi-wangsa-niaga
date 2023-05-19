<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GuestMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $names;
    protected $emails;
    protected $phones;
    protected $messages;

    /**
     * Create a new message instance.
     */
    public function __construct($names, $emails, $phones, $messages)
    {
        $this->names = $names;
        $this->emails = $emails;
        $this->phones = $phones;
        $this->messages = $messages;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Guest Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.guest_mail',
        );
    }

    public function build()
    {
        return $this->view('mails.guest_mail')
                    ->with('names', $this->names)
                    ->with('emails', $this->emails)
                    ->with('phones', $this->phones)
                    ->with('messages', $this->messages);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
