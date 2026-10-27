@extends('layouts.app')

@section('title', 'Startseite')

@section('description',
    'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, willkommen.')

@section('styles')
    <style>
    </style>
@endsection

@section('scripts')
    
@endsection

@section('content')
    <h1>Willkommen bei Steelcitynails Eisenhüttenstadt</h1>

    {{-- Nav enthält: LOGO - Angebot, Über Mich, Nageldesign, Visagistik, Kontakt - Buchen-Button --}}
    {{-- Die Links führen nur zu Ankern auf der Home-Seite --}}
    {{-- Der Buchen-Button Routet zu einer Seite mit Iframe SuperSass-Buchung  --}}

    <h2>Hero</h2>
    ENJOY THE BEST NAIL CARE IN EISENHÜTTENSTADT, Make your nails perfect right now!, Buchungs-Button, Bild
    <h2>Angebot</h2>
    Was bieten wir an<br>
    Nageldesign ab 20€, MakeUp ab 30€
    <h2>Über Mich</h2>
    Geschichte, Erfahre mehr, Tel, FAQ-Seite<br>
    Tabelle:
    Sterile Tools, Zertifikate, Produkte 100+ Colors, Brands
    <h2>Nageldesign</h2>
    Ein Auszug der Preisliste, Galerielink<br>
    Kundenrezensionen
    <h2>Visagistik</h2>
    Ein Auszug der Preisliste, Galerielink
    <h2>Kontakt</h2>
    Anfahrt<br>
    Tabelle:
    Adresse, Telefon, Email<br>
    SozialMedia<br>
    Galerieauszug

    {{-- Footer hat: AGB, Impressum, Datenschutz, FAQ,Sitemap, Cokie Einstellungen ändern --}}
@endsection
