@extends('layouts.app')

@section('title', 'Tattoo')

@section('description',
    'Transparente Preise für Tattoos in Eisenhüttenstadt: Mindestpreis 60 € für Black & Gray,
    80 € für farbige Tattoos. Jetzt informieren.')

@section('styles')
    <style>
        .bucheJetzt {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 1.5rem;


            .zeileTelForm {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;
                gap: 1.5rem;

                .icon {
                    width: 48px;
                    height: 48px;
                    flex-shrink: 0;

                    svg {
                        color: var(--color-text-studio-slogan);
                        width: 100%;
                        height: 100%;
                    }
                }

                p {
                    text-align: left;
                    font-size: var(--text-heading-4);
                    margin: 0.5rem 0;

                    a {
                        color: var(--color-text-link);

                        &:hover {
                            color: var(--color-text-hover);
                            text-decoration: underline;
                            text-underline-offset: 3px;
                        }
                    }
                }
            }

        }

        .aktTaetowierer {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            row-gap: 1rem;

            .zeileAktTaetowierer {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;
                gap: 16px;

                .icon {
                    /* display: none; */
                    width: 48px;
                    height: 48px;
                    margin: 24px;

                    svg {
                        color: var(--color-text-studio-slogan);
                        width: 100%;
                        height: 100%;
                    }
                }

                .image {
                    width: 96px;
                    filter: grayscale(100%);
                }

                p {
                    text-align: left;
                    font-size: var(--text-heading-4);
                    margin: 0.5rem 0;

                    a {
                        color: var(--color-text-link);

                        &:hover {
                            color: var(--color-text-hover);
                            text-decoration: underline;
                            text-underline-offset: 3px;
                        }
                    }

                    .taetowiererName {
                        font-size: 24px;
                        font-weight: 600;
                        color: var(--color-text-primaerhell);
                    }
                }
            }

        }

        .preisbildungContainer {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;

            p {
                font-size: 1rem;

                a {
                    color: var(--color-text-link);

                    &:hover {
                        color: var(--color-text-hover);
                        text-decoration: underline;
                        text-underline-offset: 3px;
                    }
                }
            }
        }

        .fieldPartnerLogo {

            .zeilePartnerLogo {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;
                gap: 1rem;

                p {
                    text-align: left;
                    font-size: var(--text-heading-4);
                    margin: 0.5rem 0;

                    a {
                        color: var(--color-text-link);

                        &:hover {
                            color: var(--color-text-hover);
                        }
                    }
                }
            }

            .partnerLogos {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;
                gap: 1rem;
                flex-wrap: wrap;

                img {
                    width: 10rem;
                    height: auto;
                    border: 3px solid transparent;

                    &:hover {
                        border: 3px solid var(--color-text-hover);
                    }
                }
            }

        }
    </style>
@endsection

@section('content')

    <h1>Tattoo und CoverUp</h1>

    <fieldset class="bucheJetzt">
        <legend>Du willst ein Tattoo, buche jetzt!</legend>
        <div class="zeileTelForm">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path fill="currentColor"
                        d="M16 2H8a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2m-3 19h-2v-1h2zm3-2H8V5h8z" />
                </svg>
            </div>
            <p>
                <span style="color: var(--color-text-primaerhell);">AM SCHNELLSTEN:</span>
                Schreib mich per Whatsapp oder SMS an unter <br>
                <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt" />
                <br>
                <span class="text-base leading-none">
                    <b>Schreib mir bitte: </b>
                    <br>
                    Deinen Namen, Alter, Wunschmotiv (Bilder), Körperstelle, Größe, Farbe, bis wann?,
                    Preisvorstellung
                </span>
            </p>
        </div>
        <div class="zeileTelForm">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <path
                            d="M16 2v4M8 2v4m5-2h-2C7.229 4 5.343 4 4.172 5.172S3 8.229 3 12v2c0 3.771 0 5.657 1.172 6.828S7.229 22 11 22h2c3.771 0 5.657 0 6.828-1.172S21 17.771 21 14v-2c0-3.771 0-5.657-1.172-6.828S16.771 4 13 4M3 10h18" />
                        <path d="M9 16.5s1.5.5 2 2c0 0 2.177-4 5-5" />
                    </g>
                </svg>
            </div>
            <p>
                oder nutze das Online-Kontaktformular <br>
                <a href="{{ route('anfrage', ['thema' => 'tattoo']) }}">Jetzt Tattoo anfragen</a>
            </p>
        </div>
    </fieldset>

    <fieldset class="aktTaetowierer">
        <legend>Unsere Tätowierer</legend>
        <div class="zeileAktTaetowierer">
            <div class="image">
                <img src="{{ asset('images/MarcoBunt.avif') }}"
                    alt="Marco Tätowierer seit 2017 bei Bumblebee Tattoo Eisenhüttenstadt">
            </div>
            <p>
                <span class="taetowiererName">Marco</span>
                <br>
                Ausgebildeter Tätowierer seit 10/2017.
                <br>
                <b>Stilrichtungen:</b> Black & Gray, Fineline, Traditional, Old School, Aquarell, Dotwork, Trash Polka,
                Comic, Tribal u.a.
                <br>
                <b>Was ich ablehne:</b> fotorealistische Gesichter
            </p>
        </div>
        <div class="zeileAktTaetowierer">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15">
                    <path d="M0 0h15v15H0z" fill="none" />
                    <path fill="currentColor"
                        d="M8.55 2.03a3.006 3.006 0 0 1 4.19-.67c.23.17.28.48.11.7c-.16.23-.47.28-.69.11c-.9-.65-2.15-.45-2.8.45l5.26 3.82c.22.16.27.47.11.69c-.16.23-.47.28-.7.12l-.4-.3l-1.77 2.43l-.4-.3l-.59.81l.81.59c.22.16.27.48.11.7s-.47.27-.7.11L5.84 7.47l-.59.81l.4.29a.5.5 0 0 1 .11.7l-2.35 3.24c-.16.22-.47.27-.7.11l-.4-.3l-.59.81l-1.58 1.33l.77-1.91l.59-.81l-.41-.3a.506.506 0 0 1-.11-.7l2.36-3.23c.16-.23.47-.27.69-.11l.41.29l.59-.81l-1.62-1.17l-.3.4c-.16.22-.47.27-.69.11l-.81-.59a.48.48 0 0 1-.11-.69l1.17-1.62a.49.49 0 0 1 .7-.11l.81.58c.22.17.27.48.11.7L4 4.9l1.61 1.17l2.36-3.23l-.41-.3a.506.506 0 0 1-.11-.7c.16-.22.47-.27.7-.11zm.22 1.39L6.42 6.66l1.22.88l.58-.81l-.4-.29l1.76-2.43zm3.24 2.36l-.81-.59l-1.76 2.43l-.41-.3l-.58.81l1.61 1.18l.59-.81l-.4-.3z" />
                </svg>
            </div>
            <p>
                Zur Zeit keine Gast-Tätowierer
            </p>
        </div>
    </fieldset>

    <fieldset>
        <legend>Preisbildung</legend>
        <div class="preisbildungContainer">
            <span class="text-2xl text-text-studio-slogan">Wie setzen sich unsere Preise zusammen?</span>
            <p>
                Auch bei einem noch so kleinen Tattoo steckt ein erheblicher Aufwand - das eigentliche Stechen macht nur
                einen
                Teil davon aus. Aus diesem Grund berechnen wir grundsätzlich mindestens eine Stunde, auch wenn das Stechen
                selbst
                weniger Zeit in Anspruch nimmt.
            </p>
            <p>
                Der Mindestpreis - also der Preis für eine Stunde - liegt bei 60 € für Black &amp; Gray und bei 80 € für
                farbige
                Tattoos.
            </p>
            <p>
                Wie viel Zeit ich einplanen und entsprechend berechnen muss, hängt stark von der Größe, dem Stil und der
                Körperstelle ab. Nicht immer lässt sich bequem sitzen; häufig ist es nötig, sich über den Körper zu beugen,
                was
                zusätzliche Pausen erforderlich macht. Bei Halstattoos kann ich die Maschine oft nicht senkrecht halten -
                die Tinte
                fließt dann schlechter, und ich muss langsamer arbeiten.
            </p>
            <p>
                Selbstverständlich sind Preise immer Verhandlungssache: Stammkunden, schöne Motive oder freie Termine können
                den
                Preis durchaus senken. Bedenken Sie jedoch, dass gute Qualität nicht nebenbei entsteht - ein Tattoo soll
                schließlich
                für die Ewigkeit sein. Ich nenne einen Preis nicht ohne Grund; allzu oft schätze ich den Aufwand selbst zu
                gering
                ein. Ein Preisangebot, das ich Ihnen nenne, ist für mich 14 Tage verbindlich. Eine Preisanfrage für ein
                Tattoo, das
                erst in einigen Monaten gestochen werden soll, ist für uns beide wenig sinnvoll.
            </p>
            <p>
                Wenn Sie mehr wissen möchten, nutzen Sie gerne das <a href="{{ route('anfrage') }}">Kontaktformular</a> oder werfen Sie
                einen Blick in den
                Bereich <a href="{{ route('faq') }}">Fragen
                    &amp; Antworten</a>.
            </p>
        </div>
    </fieldset>

    <fieldset class="fieldPartnerLogo">
        <legend>Nur erstklassige Hersteller für beste Qualität</legend>
        <div class="zeilePartnerLogo">
            <span class="text-2xl text-text-studio-slogan">Unsere Tattoo Partnerfirmen:</span>
        </div>
        <div class="partnerLogos">
            <img src="{{ asset('partnerimages/killerink_logo.png') }}" alt="Killerink Tattoo Bedarf">
            <img src="{{ asset('partnerimages/iamink_logo.png') }}" alt="I AM INK">
            <img src="{{ asset('partnerimages/kuro_sumi_logo.png') }}" alt="Kuro Sumi">
            <img src="{{ asset('partnerimages/world_famous_tattoo_ink_logo.avif') }}" alt="World Famous Tattoo Ink">
            <img src="{{ asset('partnerimages/tattoomed.avif') }}" alt="Tattoomed Tattoo Protection">
        </div>
    </fieldset>

    @include('partials.fragenzu')
@endsection
