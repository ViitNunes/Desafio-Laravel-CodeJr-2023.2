<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailParaProprietario extends Mailable
{
    use Queueable, SerializesModels;

    public $assunto;
    public $mensagem;

    /**
     * Create a new message instance.
     */
    public function __construct($assunto, $mensagem)
    {
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email Para Proprietario',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.via_Email',
        );
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

    public function build()
    {
        return $this
            ->subject($this->assunto)
            ->view('mail.via_Email'); // Substitua 'emails.para_proprietario' pelo nome da sua view de e-mail
    }

}
