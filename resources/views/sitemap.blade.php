@extends('layouts.app')

@section('title', 'Sitemap')

@section('styles')
    <style>
        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem 0;

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
        }
    </style>
@endsection

@section('content')
    <h1>Sitemap</h1>
    <h2>Hauptseiten</h2>
    <ul>
        <li><a href="{{ route('home') }}">Startseite</a></li>
        <li><a href="{{ route('tattoo') }}">Tattoo</a></li>
        <li><a href="{{ route('piercing') }}">Piercing</a></li>
        <li><a href="{{ route('galerie') }}">Galerie</a></li>
        <li><a href="{{ route('studio') }}">Studio</a></li>
        <li><a href="{{ route('anfrage') }}">Anfrage</a></li>
        <li><a href="{{ route('termin') }}">Termin</a></li>
        <li><a href="{{ route('kontakt') }}">Kontakt</a></li>
        <li><a href="{{ route('anfahrt') }}">Anfahrt</a></li>
    </ul>

    <h2>Rechtliches & Service</h2>
    <ul>
        <li><a href="{{ route('faq') }}">Fragen &amp; Antworten</a></li>
        <li><a href="{{ route('impressum') }}">Impressum</a></li>
        <li><a href="{{ route('datenschutz') }}">Datenschutz</a></li>
        <li><a href="{{ route('agb') }}">AGB</a></li>
    </ul>
@endsection
