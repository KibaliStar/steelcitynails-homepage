@extends('layouts.app')

@section('title', 'Tattoo')

@section('styles')
    <style>
        .bucheJetzt {

            .zeileTelForm {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;
                gap: 16px;

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
                <span class="text-sm leading-none">
                    Schreib bitte: Deinen Namen, Alter, Wunschmotiv (Bilder), Körperstelle, Größe, Farbe, bis wann?,
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

    <fieldset class="fieldPartnerLogo">
        <legend>Nur erstklassige Hersteller für beste Qualität</legend>
        <div class="zeilePartnerLogo">
            <p>Unsere Tattoo Partnerfirmen:</p>
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
