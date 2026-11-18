@extends('layouts.app')

@section('title', 'Sitemap')

@section('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, eine Sitemap zur schnellen Orientierung.')

@section('styles')
    <style>
        ul {
            list-style: none;
            padding: 1.5rem 0;
            margin: 0 auto;

            li {
                margin: 0 0 0.5rem 2rem;

                a {
                    text-decoration: none;
                    color: var(--color-text-link);
                    transition: color 0.3s ease;

                    &:hover {
                        color: var(--color-text-hover);
                    }
                }

                /* <-- Diese schließende Klammer hat gefehlt */
            }
        }
    </style>
@endsection

@section('content')
    <div class="standard-section">
        <h1 style="display: none;"> Sitemap, hier sind alle Seiten aufgelistet </h1>
        <h2>Sitemap</h2>

        <h4>Hauptseiten</h4>
        <ul>
            <li><a href="{{ route('home') }}">Startseite</a></li>
            <li><a href="{{ route('about') }}">Über uns</a></li>
            <li><a href="{{ route('nageldesign') }}">Nageldesign</a></li>
            <li><a href="{{ route('visagistik') }}">Visagistik</a></li>
            <li><a href="{{ route('galerie') }}">Galerie</a></li>
            <li><a href="{{ route('studio') }}">Studio</a></li>
            <li><a href="{{ route('produkte') }}">Produkte</a></li>
            <li><a href="{{ route('anfrage') }}">Anfrage</a></li>
            <li><a href="{{ route('buchen') }}">Buchen</a></li>
            <li><a href="{{ route('kontakt') }}">Kontakt</a></li>
            <li><a href="{{ route('anfahrt') }}">Anfahrt</a></li>
            <li><a href="{{ route('wero') }}">WERO</a></li>
        </ul>

        <h4>Rechtliches & Service</h4>
        <ul>
            <li><a href="{{ route('faq') }}">Fragen &amp; Antworten</a></li>
            <li><a href="{{ route('impressum') }}">Impressum</a></li>
            <li><a href="{{ route('datenschutz') }}">Datenschutz</a></li>
            <li><a href="{{ route('agb') }}">AGB</a></li>
            <li><a href="{{ route('qrcode') }}">QR Code</a></li>
            <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
        </ul>
    </div>
@endsection
