@extends('layouts.app')

@section('title', 'Termin buchen')

@section('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, hier kannst du deinen Termin buchen.')

@section('styles')
    <style>
        .buchungsdiv {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 90%;
            margin: 1rem auto;
            padding: 1rem;
            border-radius: 0.66rem;
            background-color: #FFFFFF50;
        }

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

                .schreibe_uns_tel {
                    font-family: 'Playfair Display', serif;
                    font-size: calc(var(--text-base) * 1.2);
                    font-weight: 600;
                }
            }
        }
    </style>
@endsection

@section('content')
    <div class="standard-section">
        <h1 style="display: none;">Hier kannst du Deinen Termin buchen</h1>
        <h2>Termin buchen</h2>
        <h3>Termine für Nageldesign</h3>
        <div class="buchungsdiv">






            <p>Hier kannst Du direkt auf unserer Website buchen.</p>
            <script src="https://cdn.supersaas.net/widget.js"></script>
            <script class="supersaas-widget">
                var supersaas = new SuperSaaS("561412:BodyArt", "747555:Studioplan", {
                    "widget_type": "frame",
                    "menu": "show",
                    "schedule_title": "hide",
                    "cal_pos": "left",
                    "domain": "www.supersaas.de"
                })
            </script>
            {{-- <button onclick="supersaas_747558.show()" class="btn">Jetzt
                buchen</button> --}}
        </div>
        <div class="buchungsdiv">
            <p>Sollte das nicht gehen nutze direkt unseren Anbieter Supersaas.<br>
                Dort kannst Du auch bestehende Termine einsehen und verwalten.</p>
            <a href="https://www.supersaas.de/schedule/login/BodyArt/Studioplan" class="btn">
                Buche über SuperSaaS
            </a>
            <div style="font-size: 0.8rem; margin: 1rem;">
                <ol style="list-style-type: decimal;">
                    <li>Logge dich in dein Benutzerkonto ein oder erstelle ein Neues.</li>
                    <li>Wähle, was du buchen möchtest: Nageldesign, Nagelkauer-Behandlung oder Crazy Nails.</li>
                    <li>Du siehst nun alle freien Termine. Wähle den aus, der dir am besten passt,<br> 
                        du bekommst eine Bestätigungsemail.</li>
                    <li>Viel Spaß!</li>
                </ol>
            </div>
        </div>
        <h3>Visagistik, Pediküre usw:</h3>
        <div class="buchungsdiv">
            <p>Nutze bitte unser Kontaktformular</p>
            <a href="{{ route('anfrage') }}" class="btn">
                Anfrage stellen
            </a>
            <div class="home_ueber_mich_tel" style="margin-top: 1rem;">
                <div class="icon_div">
                    <x-whatsapp />
                </div>
                <div class="schreibe_uns_div">
                    <div>oder schreibe mir</div>
                    <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt schreibe_uns_tel" />
                </div>
            </div>
        </div>
    </div>

@endsection
