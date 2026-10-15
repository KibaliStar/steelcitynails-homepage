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

        .hometabelle {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            gap: 1.5rem;

            span {
                color: var(--color-heading-3);
            }
        }

        .nextTattooContainer {
            width: var(--contentWidth);

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
                    /* display: none; */
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
    </style>
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

    du willst ein tattoo

    bilderslider

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
            {{-- <img src="/images/tiger.webp"> --}}
            <img src="{{ asset('images/tiger.webp') }}" alt="Tiger von Bumblebee Tattoo">
            <div class="buchText">
                <p>Tippe um eine Anfrage zu stellen, deine Beratung oder dein Tattoo zu buchen.</p>
                <a class="btn" href="termin">Jetzt Termin anfragen</a>
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
