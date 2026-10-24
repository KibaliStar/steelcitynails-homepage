@extends('layouts.app')

@section('title', 'Piercing')

@section('description',
    'Piercing in Eisenhüttenstadt: Immer inklusive sterilem Schmuck, Pflegemittel und Pflegeanleitung.')

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

        .aktPiercer {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            row-gap: 1rem;

            .zeileAktPiercer {
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

                    .piercerName {
                        font-size: 24px;
                        font-weight: 600;
                        color: var(--color-text-primaerhell);
                    }
                }
            }

        }

        .aktPreisliste {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 1rem;

            .beinhaltet {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                flex-wrap: wrap;

                .itemPiercing {
                    border: 1px solid var(--color-border);
                    margin: 0.25rem;
                    padding: 0.5rem 1.5rem;
                    color: var(--color-text-primaerhell);
                }
            }

            .aktPreise {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                flex-wrap: wrap;
                width: 100%;

                .tableContainer {
                    width: 45%;
                    margin: 0.5rem 1rem;

                    table {
                        width: 100%;
                        border-collapse: collapse;
                        /* wichtig, damit keine Standard-Abstände/Linien */

                        tr {
                            background-color: var(--color-tab-dunkel);
                            height: 44px;

                            &:nth-child(even) {
                                background-color: var(--color-tab-hell);
                                /* jede 2. Zeile grau */
                            }

                            th {
                                font-size: 24px;
                                font-weight: 600;
                                color: var(--color-text-primaerhell);
                                background-color: var(--color-body-bg);
                                text-align: left;
                                padding: 0.25rem 0 0.25rem 1rem;
                            }

                            td {
                                border: none;
                                padding: 0.25rem 0.5rem;

                                &:first-child {
                                    text-align: left;
                                    /* 1. td linksbündig */
                                }

                                &:last-child {
                                    text-align: right;
                                    /* 2. td rechtsbündig */
                                }
                            }
                        }
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
                gap: 16px;

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

        @media (max-width: 767px) {
            .aktPreisliste {

                .aktPreise {

                    .tableContainer {
                        width: 100%;

                    }
                }
            }
        }
    </style>
@endsection

@section('content')

    <h1>Piercing</h1>

    <fieldset class="bucheJetzt">
        <legend>Du willst ein Piercing, buche jetzt!</legend>
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
                    <b>Schreib bitte: </b>
                    <br>
                    Deinen Namen, Alter, Körperstelle, Art/Form des Piercings, bis wann?
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
                <a href="{{ route('anfrage', ['thema' => 'piercing']) }}">Jetzt Piercing anfragen</a>
            </p>
        </div>
    </fieldset>

    <fieldset class="aktPiercer">
        <legend>Unsere Piercer</legend>
        <div class="zeileAktPiercer">
            <div class="image">
                <img src="{{ asset('images/MarcoBunt.avif') }}"
                    alt="Marco - Zertifizierter Piercer seit 11/2024 und seit 2017 bei Bumblebee Tattoo Eisenhüttenstadt">
            </div>
            <p>
                <span class="piercerName">Marco</span>
                <br>
                Zertifizierter Piercer seit 11/2024 und seit 2017 bei Bumblebee Tattoo Eisenhüttenstadt
            </p>
        </div>
        <div class="zeileAktPiercer">
            <div class="image">
                <img src="{{ asset('images/Franziska.avif') }}"
                    alt="Franziska -  Zertifizierte Piercerin seit 11/2024 bei Bumblebee Tattoo Eisenhüttenstadt">
            </div>
            <p>
                <span class="piercerName">Franziska</span>
                <br>
                Zertifizierte Piercerin seit 11/2024 bei Bumblebee Tattoo Eisenhüttenstadt
                <br>
                ( Zur Zeit nicht im Studio )
            </p>
        </div>
    </fieldset>

    <fieldset class="aktPreisliste">
        <legend>Piercing Preisliste</legend>
        <div class="beinhaltet">
            <p style="width: 100%">Im Piercing-Preis sind immer enthalten: </p>
            <div class="itemPiercing">steriler Piercingschmuck</div>
            <div class="itemPiercing">Pflegemittel</div>
            <div class="itemPiercing">Pflegeanleitung</div>
        </div>
        <div class="aktPreise">
            <p style="width: 100%">Preise nach Körperstelle des Piercings: </p>
            <div class="tableContainer">
                <table>
                    <tr>
                        <th colspan="2">Am Ohr</th>
                    </tr>
                    <tr>
                        <td>Helix</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Forw. Helix</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Flat</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Rook</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Daith</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Conch</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Tragus</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Lobe</td>
                        <td>1x 35 €, 2x 50€</td>
                    </tr>
                    <tr>
                        <td>Snug</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Anti Tragus</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Industrial</td>
                        <td>50 €</td>
                    </tr>
                </table>
            </div>

            <div class="tableContainer">
                <table>
                    <tr>
                        <th colspan="2">Im Gesicht</th>
                    </tr>
                    <tr>
                        <td>Augenbraue</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Nasenbridge</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Nostril</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Septum</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Medusa</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Madonna</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Lippenband</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Zunge</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Lippe</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Snakebites</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Eskimo</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Jestrum</td>
                        <td>35 €</td>
                    </tr>
                </table>
            </div>

            <div class="tableContainer">
                <table>
                    <tr>
                        <th colspan="2">Am Körper</th>
                    </tr>
                    <tr>
                        <td>Brustwarze</td>
                        <td>35 €</td>
                    </tr>
                    <tr>
                        <td>Bauchnabel</td>
                        <td>35 €</td>
                    </tr>
                </table>
            </div>

            <div class="tableContainer">
                <table>
                    <tr>
                        <th colspan="2">Intim</th>
                    </tr>
                    <tr>
                        <td>Intim Sie</td>
                        <td>ab 70€</td>
                    </tr>
                    <tr>
                        <td>Intim Er</td>
                        <td>ab 90 €</td>
                    </tr>
                </table>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldPartnerLogo">
        <legend>Nur erstklassige Hersteller für beste Qualität</legend>
        <div class="zeilePartnerLogo">
            <span class="text-2xl text-text-studio-slogan">Unsere Piercing Partnerfirmen:</span>
        </div>
        <div class="partnerLogos">
            <img src="{{ asset('partnerimages/trust_logo.png') }}" alt="Trust Tools & Products">
            <img src="{{ asset('partnerimages/cleany_skin_logo.png') }}" alt="Cleany Skin Piercingpflege">
            <img src="{{ asset('partnerimages/mosquito_logo.png') }}" alt="Mosquito Piercing Nadeln">
            <img src="{{ asset('partnerimages/snaptile_logo.png') }}" alt="Snaptile Sterile Disposable Piercing Forceps">
            <img src="{{ asset('partnerimages/squidster_logo.png') }}" alt="Squidster Skinmarker">
            <img src="{{ asset('partnerimages/studex_logo.jpg') }}" alt="Studex Professionelles Ohrlochstechen">
        </div>
    </fieldset>

    @include('partials.fragenzu')
@endsection
