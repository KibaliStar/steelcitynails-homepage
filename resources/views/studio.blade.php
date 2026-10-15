@extends('layouts.app')

@section('title', 'Studio')

@section('styles')
    <style>
        a {
            color: var(--color-text-link);
            text-decoration: none;

            &:hover {
                color: var(--color-text-hover);
            }
        }

        .aside-card {
            background-color: #d49e1708;
            border-left: 3px solid transparent;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.2s ease;

            &:hover {
                background-color: #1d1d1d;
                border-left: 3px solid var(--color-text-link);
            }

            h3 {
                font-size: 1.2rem;
                font-weight: 600;
                letter-spacing: 1px;
                margin-bottom: 1rem;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            a {
                color: var(--color-text-link);

                &:hover {
                    color: var(--color-text-hover);
                }
            }

            .contact-line {
                display: flex;
                flex-direction: row;
                justify-content: start;
                align-items: center;
                gap: 12px;
                margin-bottom: 12px;
                font-size: 0.95rem;

                .nur_text {
                    font-size: 12px;
                }

                .icon {
                    color: #d4a017;
                    width: 24px;
                    text-align: center;
                }
            }

            .social-grid {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                gap: 1rem;
                margin: 1rem;

                .social-icon {
                    width: 2.5rem;
                    height: 2.5rem;
                    margin: 0.3rem;
                    /* display: flex;
                        align-items: flex-end;
                        justify-content: flex-end; */

                    svg {
                        width: 100%;
                        height: 100%;
                        display: block;
                    }
                }
            }

            .day-list {
                list-style-type: none;
                padding-left: 1.5rem;
                margin-top: 0.5rem;

                li {
                    margin-bottom: 0.5rem;
                }
            }

            .rules-list {
                list-style-type: disc;
                padding-left: 1.5rem;
                margin-top: 0.5rem;

                li {
                    margin-bottom: 0.5rem;
                }
            }

        }
    </style>
@endsection

@section('content')
    <h1>Studio</h1>
    <div class="aside-card" aria-label="Kontakt">
        <h2>KONTAKT</h2>
        @include('partials.card_kontakt')
    </div>
    {{-- Öffnungszeiten --}}
    <div class="aside-card" aria-label="Öffnungszeiten">
        <h2>ÖFFNUNGSZEITEN</h2>
        <ul class="day-list">
            <li>Mo - Fr* 11:00 – 18:00</li>
            <li>Sa* 12:00 – 16:00</li>
            <li><span class="text-xs">* Nur nach Terminvereinbarung</span></li>
        </ul>
    </div>
    {{-- Sozialmedia Accounts --}}
    <div class="aside-card" aria-label="Sozialmedia Accounts">
        <h2>SOCIAL</h2>
        <div class="social-grid">
            <a href="#" class="social-icon" title="Instagram" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path stroke-dasharray="66"
                            d="M16 3c2.76 0 5 2.24 5 5v8c0 2.76 -2.24 5 -5 5h-8c-2.76 0 -5 -2.24 -5 -5v-8c0 -2.76 2.24 -5 5 -5h4Z">
                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="66;0" />
                        </path>
                        <path stroke-dasharray="28" stroke-dashoffset="28"
                            d="M12 8c2.21 0 4 1.79 4 4c0 2.21 -1.79 4 -4 4c-2.21 0 -4 -1.79 -4 -4c0 -2.21 1.79 -4 4 -4">
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.6s"
                                to="0" />
                        </path>
                    </g>
                    <circle cx="17" cy="7" r="1.5" fill="currentColor" opacity="0">
                        <animate fill="freeze" attributeName="opacity" begin="1.3s" dur="0.2s" to="1" />
                    </circle>
                </svg>
            </a>
            <a href="#" class="social-icon" title="Facebook" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                        <path stroke-dasharray="24" d="M17 4l-2 0c-2.5 0 -4 1.5 -4 4v12">
                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.5s" values="24;0" />
                        </path>
                        <path stroke-dasharray="10" stroke-dashoffset="10" d="M8 12h7">
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s"
                                to="0" />
                        </path>
                    </g>
                </svg>

            </a>
            <a href="#" class="social-icon" title="Xing" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <g fill="none">
                        <g fill="currentColor" clip-path="url(#SVGXv8lpc2Y)">
                            <path
                                d="M3.86 4.74c-.209 0-.384.074-.472.217c-.092.147-.078.338.02.53l2.34 4.052q.006.01 0 .02l-3.678 6.49c-.096.19-.091.383 0 .53a.51.51 0 0 0 .453.237h3.461c.517 0 .767-.35.944-.669l3.737-6.608l-2.38-4.15c-.172-.306-.433-.649-.963-.649zM18.401 0c-.517 0-.74.326-.927.66c0 0-7.456 13.224-7.702 13.658l4.918 9.023c.172.307.437.659.967.659h3.457c.209 0 .372-.078.46-.221c.092-.148.09-.343-.007-.535l-4.88-8.915a.02.02 0 0 1 0-.023L22.351.756c.096-.192.098-.387.007-.535C22.27.08 22.106 0 21.898 0H18.4Z" />
                        </g>
                        <defs>
                            <clipPath id="SVGXv8lpc2Y">
                                <path fill="#fff" d="M0 0h24v24H0z" />
                            </clipPath>
                        </defs>
                    </g>
                </svg>

            </a>
            <a href="https://www.linkedin.com/in/marco-schwuchow-329920375?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                class="social-icon" title="LinkedIn" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <circle cx="4" cy="4" r="2" fill="currentColor" opacity="0">
                        <animate fill="freeze" attributeName="opacity" dur="0.2s" to="1" />
                    </circle>
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="4">
                        <g stroke-dasharray="12" stroke-dashoffset="12">
                            <path d="M4 10v10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.2s"
                                    to="0" />
                            </path>
                            <path d="M10 10v10">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s"
                                    to="0" />
                            </path>
                        </g>
                        <path stroke-dasharray="24" stroke-dashoffset="24"
                            d="M10 15c0 -2.76 2.24 -5 5 -5c2.76 0 5 2.24 5 5v5">
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.3s"
                                to="0" />
                        </path>
                    </g>
                </svg>

            </a>
            <a href="#" class="social-icon" title="Diskord" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2">
                        <path stroke-dasharray="32"
                            d="M12 6h2l1 -2c0 0 2.5 0.5 4 1.5c3.53 2.35 3 9.5 3 10.5c-1.33 2.17 -5.5 3.5 -5.5 3.5l-1 -2M12 6h-2l-0.97 -2c0 0 -2.5 0.5 -4 1.5c-3.53 2.35 -3 9.5 -3 10.5c1.33 2.17 5.5 3.5 5.5 3.5l1 -2">
                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="32;0" />
                        </path>
                        <path stroke-dasharray="16" stroke-dashoffset="16" d="M5.5 16c5 2.5 8 2.5 13 0">
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.5s"
                                to="0" />
                        </path>
                    </g>
                    <g fill="currentColor">
                        <circle cx="9" cy="12">
                            <animate fill="freeze" attributeName="r" begin="1.3s" dur="0.2s" to="1.5" />
                        </circle>
                        <circle cx="15" cy="12">
                            <animate fill="freeze" attributeName="r" begin="1.5s" dur="0.2s" to="1.5" />
                        </circle>
                    </g>
                </svg>

            </a>
        </div>
    </div>
    {{-- Studio Regeln --}}
    <div class="aside-card" aria-label="Studio Regeln">
        <h2>STUDIO REGELN</h2>
        <ul class="rules-list">
            <li>Keine Tattoos / Piercings ohne Termin</li>
            <li>Ausweis mitbringen (ab 18)</li>
            <li>Keine Getränke am Arbeitsplatz</li>
        </ul>
    </div>
@endsection
