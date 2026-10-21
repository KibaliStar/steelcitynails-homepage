<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class KontaktAnfrage extends Mailable
{
    use Queueable, SerializesModels;

    public $daten;
    public $bilder;

    /**
     * @param array $daten Die Textdaten aus dem Formular
     * @param array $bilder Die hochgeladenen Dateien (UploadedFile-Objekte)
     */
    public function __construct(array $daten, array $bilder)
    {
        $this->daten = $daten;
        $this->bilder = $bilder;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Neue Kontaktanfrage über die Webseite',
        );
    }

    public function content(): Content
    {
        // Wir nutzen eine einfache Text-View (siehe unten)
        return new Content(
            view: 'emails.kontakt',
        );
    }

    public function attachments(): array
    {
        $attachments = [];
        
        foreach ($this->bilder as $bild) {
            if ($bild) {
                $attachments[] = Attachment::fromPath($bild->getRealPath())
                    ->as($bild->getClientOriginalName())
                    ->withMime($bild->getMimeType());
            }
        }

        return $attachments;
    }
}