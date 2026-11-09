@extends('layouts.app')

@section('title', 'Startseite')

@section('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, willkommen.')

@section('styles')
    <style>
    </style>
@endsection

@section('scripts')

@endsection

@section('content')
    <hero>
        <h1 style="display: none;">Willkommen bei Steelcitynails</h1>
        <section id="home-angebot" class="home-section">
            <div class="home-section-block">
                <div class="textseite">
                    <h2>Nail Care</h2>
                    <div class="h1_text">
                        ENJOY THE BEST NAIL CARE IN EISENHÜTTENSTADT
                    </div>
                    <h4>Make your nails perfect right now!</h4>
                    <div style="margin-top: 1rem;">
                        <a href="{{ route('buchen') }}" class="btn">Buche einen Termin</a>
                    </div>
                </div>
                <div class="bildseite">
                    <picture class="hero_img">
                        <source srcset="{{ asset('images/Bild04.avif') }}" type="image/avif">
                        <img src="{{ asset('images/Bild04.png') }}" alt="Steelcitynails Welcome Picture">
                    </picture>
                </div>
            </div>
            <div class="top-link">
                <a href="#top">
                    <x-toparrow />
                </a>
            </div>
        </section>
    </hero>


    {{-- Nav enthält: LOGO - Angebot, Über Mich, Nageldesign, Visagistik, Kontakt - Buchen-Button --}}
    {{-- Die Links führen nur zu Ankern auf der Home-Seite --}}
    {{-- Der Buchen-Button Routet zu einer Seite mit Iframe SuperSass-Buchung  --}}

    <section id="home-angebot" class="home-section">
        <div class="home-section-wide">
            <h2>Angebot</h2>
            <h3>AUSGEWÄHLTE SERVICES</h3>
            <h4>Verschiedene Behandlungen für Gesicht und Hände</h4>
            Was bieten wir an<br>
            Nageldesign ab 20€, MakeUp ab 30€
            <div class="">ServiceSlider</div>
        </div>
        <div class="top-link">
            <a href="#top">
                <x-toparrow />
            </a>
        </div>
    </section>

    <section id="home-ueber-mich" class="home-section">
        <div class="home-section-block">
            <div class="textseite">
                <h2>Über Mich</h2>
                <h3>Willkommen</h3>
                <h4>SteelCityNail ist der ideale Ort für hochwertige Nagelpflege und Visagistik in einer gemüthlichen Atmosphere</h4>
                Geschichte, Erfahre mehr, Tel, FAQ-Seite<br>
                Tabelle:
                Sterile Tools, Zertifikate, Produkte 100+ Colors, Brands
            </div>
            <div class="bildseite">Bild</div>
        </div>
        <div class="top-link">
            <a href="#top">
                <x-toparrow />
            </a>
        </div>
    </section>
    <section id="home-nageldesign" class="home-section">
        <div class="home-section-block" style="flex-direction: row-reverse;">
            <div class="textseite">
                <h2>Nageldesign</h2>
                Ein Auszug der Preisliste, Galerielink<br>
                Kundenrezensionen
            </div>
            <div class="bildseite">Bild</div>
        </div>
        <div class="top-link">
            <a href="#top">
                <x-toparrow />
            </a>
        </div>
    </section>
    <section id="home-produkte" class="home-section">
        <div class="home-section-block">
            <h2>Produkte</h2>
        </div>
    </section>
    <section id="home-visagistik" class="home-section">
        <div class="home-section-block">
            <div class="textseite">
                <h2>Visagistik</h2>
                Ein Auszug der Preisliste, Galerielink
            </div>
            <div class="bildseite">Bild</div>
        </div>
        <div class="top-link">
            <a href="#top">
                <x-toparrow />
            </a>
        </div>
    </section>
    <section id="home-rezensionen" class="home-section">
        <div class="home-section-block">
            <h2>Kundenmeinungen</h2>
        </div>
    </section>
    <section id="home-kontakt" class="home-section">
        <div class="home-section-block" style="flex-direction: row-reverse;">
            <div class="textseite">
                <h2>Kontakt</h2>
                Anfahrt<br>
                Tabelle:
                Adresse, Telefon, Email<br>
                SozialMedia<br>
                Galerieauszug
            </div>
            <div class="bildseite">Bild</div>
        </div>
        <div class="top-link">
            <a href="#top">
                <x-toparrow />
            </a>
        </div>
    </section>


    {{-- Footer hat: AGB, Impressum, Datenschutz, FAQ,Sitemap, Cokie Einstellungen ändern --}}
@endsection
