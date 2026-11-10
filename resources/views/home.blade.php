@extends('layouts.app')

@section('title', 'Startseite')

@section('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, willkommen.')

@section('styles')
    <style>
        .home_ueber_mich_tel {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;

            .icon_div {
                margin: 1rem;
                width: 3rem;
                height: 3rem;
            }

            .schreibe_uns_div {
                display: flex;
                flex-direction: column;

                .schreibe_uns_text {
                    color: var(--color-h2);
                }

                .schreibe_uns_tel {
                    font-family: 'Playfair Display', serif;
                    font-size: calc(var(--text-base) * 1.2);
                    font-weight: 600;
                }
            }
        }

        .staff_grid {
            display: grid;
            grid-template-columns: 1fr;
            /* Mobil: 1 Spalte → 1x4 */
            justify-content: space-between;
            align-items: flex-start;
            margin: 3rem 0 1rem 0;

            .staff_card {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
                margin: 0.5rem;
                padding: 1rem;
                border-radius: 0.5rem;
                background-color: #ffffff50;

                .staff_card_oben {
                    display: flex;
                    flex-direction: row;
                    justify-content: flex-start;
                    align-items: flex-start;
                    min-height: 160px;

                    .staff_card_logo {
                        display: block;
                        flex: 0 0 64px;
                        width: 64px;
                        height: 64px;
                        color: var(--color-h2);
                    }

                    .staff_card_text {
                        flex: 1 1 auto;
                        min-width: 0;
                        padding-left: 1rem;

                        .staff_title {
                            display: block;
                            width: 100%;
                            text-align: left;
                            color: var(--color-h4);
                            font-size: 1.5rem;
                            line-height: 1.2;
                            font-weight: 700;
                            font-family: 'Playfair Display', serif;
                            margin: 0.25rem auto;
                        }
                    }
                }

                .staff_card_link {
                    width: 100%;
                    text-align: center;
                    text-transform: uppercase;
                    text-decoration: none;
                    font-weight: 800;
                    font-size: calc(var(--text-base) * 0.8);
                    color: var(--color-button3);
                    margin-top: 0.75rem;
                    transition: color 0.3s ease;

                    &:hover {
                        text-decoration: underline;
                        color: var(--color-button2);
                    }
                }
            }
        }

        .price_list {
            display: flex;
            flex-direction: column;
            width: 100%;
            justify-content: start-flex;
            align-items: start-flex;

            .price_list_artikel {
                display: flex;
                flex-direction: column;
                width: 100%;
                justify-content: start-flex;
                align-items: start-flex;
                margin: 1rem 0;

                .price-row {
                    display: flex;
                    flex-direction: row;
                    width: 100%;
                    align-items: flex-end;
                    gap: 0.25rem;

                    .price-row__name,
                    .price-row__price {
                        flex: 0 0 auto;
                        line-height: 1.2;
                        font-family: 'Playfair Display', serif;
                        font-size: var(--text-h4);
                    }

                    .price-row__line {
                        flex: 1 1 auto;
                        border-bottom: 2px dotted currentColor;
                        opacity: 0.4;
                        margin-bottom: 0.2em;
                        /* hebt die Linie auf Höhe der Textunterkante */
                    }
                }

                .artikel_text {
                    font-size: calc(var(--text-base) * 0.8);
                }
            }
        }




        @media (min-width: 768px) {
            .staff_grid {
                grid-template-columns: repeat(2, 1fr);
                /* Tablet: 2 Spalten → 2x2 */
            }
        }

        @media (min-width: 1024px) {
            .staff_grid {
                grid-template-columns: repeat(4, 1fr);
                /* Desktop: 4 Spalten → 4x1 */
            }
        }
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
                    <picture class="hero_img" style="height: 400px;">
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
                <h4>SteelCityNail ist der ideale Ort für hochwertige Nagelpflege und Visagistik in einer gemüthlichen
                    Atmosphere</h4>
                <p>Geschichte, Erfahre mehr, Tel, FAQ-Seite<br>
                    Tabelle:
                    Sterile Tools, Zertifikate, Produkte 100+ Colors, Brands
                </p>
                <div class="home_ueber_mich_tel" style="margin-top: 1rem;">
                    <div class="icon_div">
                        <x-whatsapp />
                    </div>
                    <div class="schreibe_uns_div">
                        <div class="schreibe_uns_text">Schreibe uns</div>
                        <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt schreibe_uns_tel" />
                    </div>
                </div>
                <div style="margin-top: 1rem;">
                    <a href="{{ route('buchen') }}" class="btn">Erfahre mehr</a>
                </div>
            </div>
            <div class="bildseite">
                <picture class="hero_img" style="height: 560px;">
                    <source srcset="{{ asset('images/Bild02.avif') }}" type="image/avif">
                    <img src="{{ asset('images/Bild02.png') }}" alt="Steelcitynails Welcome Picture">
                </picture>
            </div>
        </div>
        <div class="staff_grid">

            <div class="staff_card">
                <div class="staff_card_oben">
                    <div class="staff_card_logo">
                        <x-scissor />
                    </div>
                    <div class="staff_card_text">
                        <span class="staff_title">Sterile Tools</span>
                        Wir benutzen Einwegmaterialien und desifizieren unsere Werkzeuge.
                    </div>
                </div>
                <a href="#more" class="staff_card_link">Mehr Info</a>
            </div>

            <div class="staff_card">
                <div class="staff_card_oben">
                    <div class="staff_card_logo">
                        <x-fingernail1 />
                    </div>
                    <div class="staff_card_text">
                        <span class="staff_title">Zertifikate</span>
                        Deine ausgebildeten Artists arbeiten schnell und sicher.
                    </div>
                </div>
                <a href="#more" class="staff_card_link">Mehr Info</a>
            </div>

            <div class="staff_card">
                <div class="staff_card_oben">
                    <div class="staff_card_logo">
                        <x-nail-polish />
                    </div>
                    <div class="staff_card_text">
                        <span class="staff_title">100+ Colors</span>
                        Du kannst aus einer großen Palette von Farben und Materialien wählen.
                    </div>
                </div>
                <a href="#more" class="staff_card_link">Mehr Info</a>
            </div>

            <div class="staff_card">
                <div class="staff_card_oben">
                    <div class="staff_card_logo">
                        <x-cosmetic />
                    </div>
                    <div class="staff_card_text">
                        <span class="staff_title">Brands</span>
                        Unsere Produktpartner.<br>
                        Nail:Code, Toni, Beni Durrer, etc.
                    </div>
                </div>
                <a href="#more" class="staff_card_link">Mehr Info</a>
            </div>

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
                <h3>Preise Nailart</h3>
                Wir sind der Überzeugung, dass Ihre perfekten Nägel das Ergebnis eines ständigen Strebens nach Exzellenz und
                einer ausgeprägten Liebe zum Detail sind.
                <div class="price_list">

                    <div class="price_list_artikel">
                        <div class="price-row">
                            <span class="price-row__name">Nagelmodelage</span>
                            <span class="price-row__line"></span>
                            <span class="price-row__price">32€</span>
                        </div>
                        <div class="artikel_text">
                            Erklärung
                        </div>
                    </div>

                    <div class="price_list_artikel">
                        <div class="price-row">
                            <span class="price-row__name">Nagelmodelage mit Farbe</span>
                            <span class="price-row__line"></span>
                            <span class="price-row__price">35€</span>
                        </div>
                        <div class="artikel_text">
                            Nagelmodelage mit einer Farbe aus unserer großen Auswahl
                        </div>
                    </div>

                    <div class="price_list_artikel">
                        <div class="price-row">
                            <span class="price-row__name">Nagelmodelage mit French</span>
                            <span class="price-row__line"></span>
                            <span class="price-row__price">38€</span>
                        </div>
                        <div class="artikel_text">
                            rosa Aufbau mit French in Wunschfarbe
                        </div>
                    </div>

                    <div class="price_list_artikel">
                        <div class="price-row">
                            <span class="price-row__name">Babyboomer</span>
                            <span class="price-row__line"></span>
                            <span class="price-row__price">38€</span>
                        </div>
                        <div class="artikel_text">
                            Klassischer Babyboomer mit weisser Spitze und rosa Aufbau
                        </div>
                    </div>

                </div>
            </div>
            <div class="bildseite">
                <picture class="hero_img" style="height: 630px;">
                    <source srcset="{{ asset('images/Bild01.avif') }}" type="image/avif">
                    <img src="{{ asset('images/Bild01.png') }}" alt="Steelcitynails Welcome Picture">
                </picture>
            </div>
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
