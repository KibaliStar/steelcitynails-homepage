@extends('layouts.app')

@section('title', 'Impressum')

@section('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, hier findest du unser Impressum.')

@section('content')
    <div class="standard-section-left">
        <h1 style="display: none;">Impressum</h1>
        <h2>Impressum</h2>

        <h3>Angaben gemäß § 5 Digitale-Dienste-Gesetz (DDG)</h3>

        <p style="margin: 2rem;">
            Steelcitynails<br>
            Inhaber: Marco Schwuchow (Einzelunternehmen)<br>
            Fröbelringpassage 24/25<br>
            15890 Eisenhüttenstadt<br>
            Deutschland
        </p>

        <p style="margin: 2rem;">
            <b>Kontakt:</b><br>
            Telefon: <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt" />
            <br>
            Email: <x-encrypt-email email="studio@steelcitynails.de" class="linkgeschuetzt" />
        </p>

        <h4>Redaktionell verantwortlich gemäß § 18 Abs. 2 MStV</h4>

        <p>
            Entfällt, da keine journalistisch-redaktionellen Inhalte im Sinne des § 18 Abs. 2 MStV angeboten werden.
        </p>

        <h4>Verbraucherstreitbeilegung / EU-Online-Streitbeilegung</h4>

        <p>
            Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:
            https://ec.europa.eu/consumers/odr
        </p>

        <p>
            Wir sind nicht verpflichtet und nicht bereit, an Streitbeilegungsverfahren vor einer
            Verbraucherschlichtungsstelle
            teilzunehmen.
        </p>
    </div>

@endsection
