@extends('layouts.app')

@section('title', 'FAQ')

@section('description',
    'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, hier findest du Antworten auf die meisten Fragen.')

@section('styles')
    <style>
        .question {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            row-gap: 2px;
            padding: 1rem;

            ul {
                li {
                    margin-left: 1rem;
                }
            }
        }
    </style>
@endsection

@section('content')
    <h1> Fragen und Antworten </h1>

    <div class="question" id="faq01">
        <span class="text-2xl text-text-studio-slogan">Welche Leistungen bieten Sie in Ihrem Studio an?</span><br>
        <p>In unserem Studio in Eisenhüttenstadt bieten wir professionelles Nageldesign mit UV-Gel und Polygel an.<br>
            Wir verzichten bewusst auf Acrylpulver und Liquid.<br>
            Dazu kommen alle gängigen Designtechniken wie Airbrush, OneStroke, Babyboomer, Ombre und Cateye.<br>
            Außerdem bieten wir professionelles Make-up (Tages-, Abend-, Foto- und Hochzeitsmake-up) sowie Schulungen in Nageldesign und Visagistik an.
        </p>
    </div>

    <div class="question" id="faq02">
        <span class="text-2xl text-text-studio-slogan">Wie buche ich einen Termin?</span>
        <p>Am einfachsten buchen Sie Ihren Termin bequem über unser Online-Buchungssystem auf der Webseite.<br>
            Alternativ erreichen Sie uns per WhatsApp oder SMS unter <br>
            Tel: <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt"/>. <br>
            Für Rückfragen oder die Zusendung von Inspirationsbildern können Sie uns auch eine E-Mail an <br>
            <x-encrypt-email email="studio@steelcitynails.de" class="linkgeschuetzt" /> senden.
        </p>
    </div>

    <div class="question" id="faq03">
        <span class="text-2xl text-text-studio-slogan">Was kostet eine Nagelmodellage?</span>
        <ul>
            <li><b>Neumodellage:</b> Je nach Aufwand und Länge (Preise auf Anfrage oder im Studio)</li>
            <li><b>Auffüllen:</b> Regelmäßiges Auffüllen alle 3-4 Wochen wird empfohlen</li>
            <li><b>Zahlungsart:</b> Bar oder per Überweisung</li>
        </ul>
        <p>Da der Preis stark von Länge, Form und dem gewünschten Design (z.B. aufwendiges OneStroke) abhängt, besprechen wir alle Kosten transparent im Voraus bei Ihrer Terminanfrage.
        </p>
    </div>

    <div class="question" id="faq04">
        <span class="text-2xl text-text-studio-slogan">Wie lauten Ihre Stornierungsbedingungen?</span>
        <p>Wir bitten um eine Absage mindestens 24 Stunden vor dem Termin. 
            Da die Termine oft knapp bemessen sind, können wir bei kurzfristigen Absagen oder Nichterscheinen leider keine Rücksicht auf andere Kunden nehmen.
        </p>
        <p>
            Bei wiederholten kurzfristigen Absagen behalten wir uns vor, zukünftige Termine nur noch gegen eine Anzahlung zu vergeben.
        </p>
    </div>

    <div class="question" id="faq05">
        <span class="text-2xl text-text-studio-slogan">Wie soll ich mich auf meinen Nageltermin vorbereiten?</span>
        <p>Kommen Sie am besten mit sauberen, uneingecremten Nägeln und Händen zum Termin.<br> 
            Wenn Sie alte Modellagen haben, versuchen Sie bitte nicht, diese selbst zu entfernen oder abzuknibbeln, da dies den Naturnagel schädigen kann.<br>
            Planen Sie nach dem Termin etwas Zeit ein, damit der Nagelkleber oder das Gel gut aushärten kann. 
        </p>
    </div>

    <div class="question" id="faq06">
        <span class="text-2xl text-text-studio-slogan">Ist es sicher, sich bei Steelcitynails behandeln zu lassen?</span>
        <p>Ja - Wir arbeiten ausschließlich mit hochwertigen Profiprodukten (z.B. Nail:Code) und legen größten Wert auf Hygiene.<br>
            Alle Werkzeuge werden nach jeder Behandlung professionell desinfiziert und sterilisiert.<br>
            Für Make-up verwenden wir ausschließlich Produkte von Beni Durrer und legen Wert auf höchste Hautverträglichkeit.
        </p>
    </div>

    <div class="question" id="faq07">
        <span class="text-2xl text-text-studio-slogan">Wie pflege ich meine neuen Nägel?</span>
        <p>Nach der Modellage erhalten Sie von uns eine kurze Einweisung zur Pflege.<br>
            Vermeiden Sie in den ersten Stunden direkten Kontakt mit heißem Wasser oder aggressiven Reinigungsmitteln.<br>
            Tragen Sie bei Hausarbeiten idealerweise Handschuhe und verwenden Sie regelmäßig ein Nagelöl für die Nagelhaut.
        </p>
    </div>

    <div class="question" id="faq08">
        <span class="text-2xl text-text-studio-slogan">Was sollte ich vermeiden, damit meine Nägel lange halten?</span>
        <p>Vermeiden Sie es, Ihre Nägel als Werkzeug zu benutzen (z.B. zum Öffnen von Dosen oder Kratzen von Etiketten).<br>
            Bei starker Beanspruchung oder Kontakt mit Chemikalien können sich die Nägel lösen. 
            Melden Sie sich bei Problemen bitte zeitnah bei uns, damit wir gemeinsam eine Lösung finden können.
        </p>
    </div>

    <div class="question" id="faq09">
        <span class="text-2xl text-text-studio-slogan">Wie läuft das mit dem Auffüllen?</span>
        <p>Je nach Wachstum Ihrer Naturnägel empfehlen wir ein Auffüllen alle 3 bis 4 Wochen.<br>
            Dabei wird das alte Gel vorsichtig entfernt und die Modellage neu aufgebaut. 
            So bleibt Ihre Modellage stabil und Sie sparen im Vergleich zur kompletten Neumodellage Zeit und Kosten.
        </p>
    </div>

@endsection