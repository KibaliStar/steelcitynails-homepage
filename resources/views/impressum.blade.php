@extends('layouts.app')

@section('title', 'Impressum')

@section('description',
    'Tattoo und Piercing in Eisenhüttenstadt, hier findest du unser Impressum.')

@section('content')
    <h1>Impressum</h1>

    <h2>Angaben gemäß § 5 Digitale-Dienste-Gesetz (DDG)</h2>

    <p style="margin: 2rem 0;">
        Bumblebee Tattoo<br>
        Inhaber: Marco Schwuchow (Einzelunternehmen)<br>
        Fröbelringpassage 24/25<br>
        15890 Eisenhüttenstadt<br>
        Deutschland
    </p>

    <p style="margin: 2rem 0;">
        <b>Kontakt:</b><br>
        Telefon: <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt" />
        <br>
        Email: <x-encrypt-email email="studio@bumblebeetattoo.de" class="linkgeschuetzt" />
    </p>

    <h2>Redaktionell verantwortlich gemäß § 18 Abs. 2 MStV</h2>

    <p>
        Entfällt, da keine journalistisch-redaktionellen Inhalte im Sinne des § 18 Abs. 2 MStV angeboten werden.
    </p>

    <h2>Verbraucherstreitbeilegung / EU-Online-Streitbeilegung</h2>

    <p>
        Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:
        https://ec.europa.eu/consumers/odr
    </p>

    <p>
        Wir sind nicht verpflichtet und nicht bereit, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle
        teilzunehmen.
    </p>

@endsection
