@extends('layouts.app')

@section('title', 'Startseite')

@section('styles')
    <style>
        .absatz {
            margin: 2rem auto;

            p {
                padding: 0.3rem;
                display: block;
                width: 100%;
                text-align: left;
            }
        }

        .bucheJetzt {
            margin: 2rem auto;

            .zeileTelForm {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;
                gap: 16px;

                /* a {
                                                font-size: 1.5rem;
                                            } */

                .icon {
                    /* display: none; */
                    width: 48px;
                    height: 48px;

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

        .hometabelle {
            container-type: inline-size;
            display: flex;
            flex-direction: row;
            width: var(--contentWidth);
            justify-content: space-between;
            align-items: flex-start;
            gap: 1.5rem;
            margin: 2rem auto;

            span {
                color: var(--color-heading-3);
            }
        }

        .nextTattooContainer {
            width: var(--contentWidth);
            margin: 2rem auto;

            legend {}

            .terminAnfrage {
                margin: 20px auto;
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                align-items: flex-start;
                min-height: 60px;
                gap: 16px;

                img {
                    width: auto;
                    height: 300px;
                    border: 3px solid black;
                    border-radius: 8px;
                    filter: grayscale(100%);
                    transition: filter 0.5s ease;
                }


                .buchText {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    row-gap: 2rem;
                    font-size: var(--text-heading-4);


                    a {
                        font-size: 18px;
                    }
                }

                &:hover {
                    img {
                        filter: grayscale(0%);
                    }
                }
            }
        }

        /* ===== SLIDER CONTAINER ===== */
        .slider-container {
            width: var(--contentWidth);
            height: 240px;
            overflow: hidden;
            margin: 60px auto;
            background: #1a1a1a;
            position: relative;
            display: flex;
            align-items: center;

            /* ===== TRACK ===== */
            .slider-track {
                display: flex;
                gap: 30px;
                height: 100%;
                align-items: center;
                white-space: nowrap;
                will-change: transform;
                /* ⭐ WICHTIG: Track ist NUR so breit wie der Container! */
                width: 100%;
                /* ⭐ Track = 100% vom Container */
                overflow: hidden;
                /* ⭐ Versteckt, was nicht reinpasst */
                position: relative;

                /* ===== BILDER IN EINEM WEITEREN CONTAINER ===== */
                .slider-wrapper {
                    display: flex;
                    gap: 30px;
                    align-items: center;
                    animation: scroll 20s linear infinite;
                    /* ⭐ Endloser Loop */
                    flex-shrink: 0;
                    /* ⭐ Verhindert Schrumpfen */

                    img {
                        height: 240px;
                        width: auto;
                        object-fit: contain;
                        display: block;
                        border-radius: 8px;
                        flex-shrink: 0;
                    }
                }
            }

            /* ===== PAUSE BEI HOVER ===== */
            &:hover {
                .slider-track .slider-wrapper {
                    animation-play-state: paused;
                }
            }
        }

        /* ===== ANIMATION ===== */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
                /* ⭐ -50% weil der Wrapper doppelt so breit ist */
            }
        }

        @media (max-width: 479px) {
            .hometabelle {
                flex-direction: column;
            }

            .nextTattooContainer {
                .terminAnfrage {
                    flex-direction: column;
                    align-items: center;

                    img {
                        width: 200px;
                        height: auto;
                    }
                }
            }
        }
    </style>
@endsection

@section('scripts')
    <script src="{{ asset('js/homeslider.js') }}" defer></script>
@endsection

@section('content')
    <h1>Willkommen bei Bumblebee Tattoo Eisenhüttenstadt</h1>

    <div class="absatz">
        <h2>Dein Studio in Eisenhüttenstadt für Tattoos, Cover-Up und Piercings</h2>
        <p>Seit 2017 hat sich Bumblebee Tattoozu einem zuverlässigen Partner für individuelle Tätowierungen entwickelt.</p>
        <p>Unser Team von Künstlern sind Experten für verschiedene Tattoostyle und erstellen maßgeschneiderte Kunstwerke,
            die auf jeden Kunden zugeschnitten sind.</p>
        <p>Bei Bumblebee Tattoo glauben wir, dass ein Tattoo mehr als nur Tinte ist - es ist eine lebenslange Investition.
            Deshalb widmen wir uns der Bereitstellung nicht nur außergewöhnlicher Kunstwerke sondern auch einer Erfahrung,
            die auf Professionalität, Kreativität und echter Sorgfalt von der Beratung bis zur Fertigstellung basiert.</p>
    </div>

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
            <p>Schreib mich per Whatsapp oder SMS an unter <br>
                <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt" />
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
                oder nutze das Online <br>
                <a href="{{ route('anfrage', ['thema' => 'tattoo']) }}">Kontaktformular</a>
            </p>
        </div>
    </fieldset>

    <!-- ===== BILDSLIDER MARQUEE ===== -->
    <a class="slider-container" href="galerie">
        <div class="slider-track" id="sliderTrack">
            <!-- Bilder werden per JavaScript eingefügt -->
        </div>
    </a>


    <div class="absatz">
        <h2>Wir machen aus deiner Idee ein handfestes Kunstwerk.</h2>
        <p>Professionelle Beratung von ausgebildeten Tattoo-Künstler und Piercern sorgen dafür, dass du dein Tattoo und
            Piercing für immer lieben wirst.</p>
        <p style="font-style: italic; color: var(--color-text-primaerhell)">„Mein Anspruch: Nichts bleibt dem Zufall
            überlassen.“</p>
    </div>

    <fieldset class="nextTattooContainer">
        <legend>
            Bereit für dein nächstes Tattoo?
        </legend>
        <div class="terminAnfrage">
            <img src="{{ asset('images/tiger.webp') }}" alt="Tiger von Bumblebee Tattoo">
            <div class="buchText">
                <p>Tippe um eine Anfrage zu stellen, deine Beratung oder dein Tattoo zu buchen.</p>
                <a class="btn" href="{{ route('anfrage', ['thema' => 'tattoo']) }}">Jetzt Termin anfragen</a>
            </div>
        </div>
    </fieldset>

    <div class="hometabelle">
        <p><span>Individuell</span><br>
            Kein Motiv von der Stange.
            Wir entwickeln dein persönliches Kunstwerk - bis ins letzte Detail.
        </p>
        <p><span>Kundenorientiert</span><br>
            Deine Idee verdient unsere volle Aufmerksamkeit.
        </p>
        <p><span>Hygiene & Sicherheit</span><br>
            Deine Gesundheit ist uns genauso wichtig wie dein Tattoo.
            Deshalb setzen wir auf geprüfte Sterilisation und höchste Sauberkeit.
        </p>
    </div>

    @include('partials.fragenzu')
@endsection
