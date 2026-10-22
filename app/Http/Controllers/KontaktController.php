<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\KontaktAnfrage;
use Illuminate\Support\Facades\Mail;

class KontaktController extends Controller
{
    public function senden(Request $request)
    {
        // ===== SPAM-SCHUTZ (Honeypot & Zeitprüfung) =====
        // 1. Wenn das unsichtbare Feld ausgefüllt ist, ist es ein Bot.
        if ($request->filled('website')) {
            // Wir tun so, als wäre alles gut, damit der Bot nicht merkt, dass er geblockt wurde.
            return back()->with('success', 'Vielen Dank! Deine Anfrage wurde erfolgreich gesendet.');
        }

        // 2. Wenn das Formular in weniger als 3 Sekunden ausgefüllt wurde, ist es ein Bot.
        $startTime = $request->input('form_start_time', 0);
        if (time() - $startTime < 3) {
            return back()->with('success', 'Vielen Dank! Deine Anfrage wurde erfolgreich gesendet.');
        }

        // 1. Validierung: Nur das Nötigste ist Pflicht!
        $validated = $request->validate([
            'thema' => 'required|string',

            // Name: Wir prüfen später im Code, ob mindestens eins ausgefüllt ist
            'vorname' => 'nullable|string|max:255',
            'nachname' => 'nullable|string|max:255',

            // Telefon ist das einzige echte Pflichtfeld für den Kontakt
            'telefon' => 'required|string|max:255',

            // Der Rest ist komplett optional (nullable)
            'email' => 'nullable|email|max:255',
            'volljaehrig' => 'nullable',
            'koerperstelle' => 'nullable|string',
            'wunschtermin' => 'nullable|date',
            'nachricht' => 'nullable|string',
            'stil' => 'nullable|string',
            'groesse' => 'nullable|string',
            'piercing_art' => 'nullable|string',

            // Bilder bleiben optional
            'bilder' => 'nullable|array|max:5',
            'bilder.*' => 'image|mimes:jpeg,png,webp|max:5120',
        ]);

        // 2. Zusätzliche Prüfung: Mindestens Vor- ODER Nachname muss da sein
        if (empty($validated['vorname']) && empty($validated['nachname'])) {
            return back()->withErrors(['vorname' => 'Bitte gib mindestens deinen Vor- oder Nachnamen an.'])->withInput();
        }

        // 3. Bilder holen
        $bilder = $request->file('bilder') ?? [];

        // 4. E-Mail senden
        Mail::to('mailsystem@bumblebeetattoo.de')->send(new KontaktAnfrage($validated, $bilder));

        // 5. Erfolg
        return back()->with('success', 'Vielen Dank! Deine Anfrage wurde erfolgreich gesendet.');
    }
}
