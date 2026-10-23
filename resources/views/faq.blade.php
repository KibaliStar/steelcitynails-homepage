@extends('layouts.app')

@section('title', 'FAQ')

@section('description',
    'Tattoo und Piercing in Eisenhüttenstadt, hier findest du Antworten auf die meisten Fragen.')

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
        <p>In unserem Studio in Eisenhüttenstadt bieten wir hochwertige Body-Art-Tätowierungen für Kunden ab 18 Jahren
            an.<br>
            Körperpiercings gehören ebenfalls zu unserem Sortiment.<br>
            Body-Modifikationen wie Zungenspalten oder Inlays bieten wir nicht an.
        </p>
    </div>

    <div class="question" id="faq02">
        <span class="text-2xl text-text-studio-slogan">Wie buche ich einen Termin?</span>
        <p>Um einen Beratungs-, Tattoo- oder Piercingtermin zu buchen, füllen Sie unsere Online-Anfrageformular aus.<br>
            Die Beratungen sind kostenlos und tragen dazu bei, dass Ihre Idee richtig passt.<br>
            Zur Sicherung eines Tattoo-Termins ist eine Anzahlung erforderlich, zahlbar im Studio in Bar, per Wero
            Zahldienst oder per Überweisung.</p>
        <p>Buchungen am selben Tag, oder für den nächsten Tag, sind möglich sofern freie Termine vorhanden sind.<br>
            Kontaktieren Sie dazu das Studio per WhatsApp oder SMS unter <br>
            Tel: <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt"/>. <br>
            Referenzbilder können per WhatsApp oder per Email an <br>
            <x-encrypt-email email="studio@bumblebeetattoo.de" class="linkgeschuetzt" /> gesendet werden.
        </p>
    </div>

    <div class="question" id="faq03">
        <span class="text-2xl text-text-studio-slogan">Was kostet ein Tattoo?</span>
        <ul>
            <li><b>Mindesgebühr:</b> 60€</li>
            <li><b>Stundensatz:</b> 60-80€ (variiert ja nach Aufwand)</li>
            <li><b>Pauschalpreis:</b> Verfügbar für Großprojekte wie Ärmel und Rückenteile</li>
            <li><b>Zahlungsart:</b> Bar oder bereits vor dem Termin komplett per Wero oder Überweisung</li>
            <li><b>Anzahlung:</b> 20-25% der Gesamtsumme, benötigt zur Terminvereinbarung</li>
        </ul>
        <p>Alle Preise werden während Ihrer Beratung basierend auf Größe, Stil, Plazierung und benötigter Zeit besprochen.
        </p>
    </div>

    <div class="question" id="faq04">
        <span class="text-2xl text-text-studio-slogan">Wie lauten Ihre Stornierungs- und Anzahlungsbedingungen?</span>
        <p>Wir benötigen eine Frist von mindestens 48 Stunden, um Ihre Buchung zu verschieben oder zu stornieren.
            Einzahlungen sind nicht erstattungsfähig, da Künstler im Vorraus mit der Vorbereitung von Kunstwerken beginnen.
        </p>
        <p>
            Wenn ausreichend benachrichtigt wurde und nicht mit der Erstellung von Kunstwerken begonnen wurde,
            können die Einzahlungen bis zu 12 Monate lang aufbewahrt oder von Fall zu Fall übertragen werden.
            Nichterscheinen führen zum Verfall der Anzahlung.
        </p>
    </div>

    <div class="question" id="faq05">
        <span class="text-2xl text-text-studio-slogan">Wie soll ich mich auf meinen Tattoo-Termin vobereiten?</span>
        <p>Essen Sie 1-4 Stunden vorher eine gute Mahlzeit. Bleiben Sie hydriert und bringen Sie zuckerhaltige
            Snacks wie Obst oder Lutscher mit. Vermeiden Sie Alkohol oder Drogen. Halten Sie die Haut in den Tagen
            zuvor sauber und sonnenfrei. Am wichtigsten ist, entspannen und genießen Sie Ihre Zeit.
        </p>
    </div>

    <div class="question" id="faq06">
        <span class="text-2xl text-text-studio-slogan">Ist es sicher, sich bei Bumblebee Tattoo tätowieren zu lassen?</span>
        <p>Ja - Wir beschäftigen ausschließlich ausgebildete und zertifizierte Tätowierer und Piercer.<br>
            Unser Studio befolgt strenge Hygienepraktiken, einschließlich Einwegnadeln, REACH-konformen Tinten
            und sterilen Materialien.
        </p>
    </div>

    <div class="question" id="faq07">
        <span class="text-2xl text-text-studio-slogan">Wie pflege ich mein neues Tattoo?</span>
        <p>Zu jedem Tattoo und Piercing bekommst du von uns eine schriftliche Pflegeanleitung
            die dich darüber informiert wie du in den ersten 24 Stunden,
            7 Tagen und 4 Wochen dein Tattoo oder Piercing pflegen solltest.</p>
        <p>Entfernen Sie die Plastikfolie 1-4 Stunden nach Ihrem Tattoo. Mit warmem Wasser und nicht-parfümierter Seife
            vorschtig waschen. Trocknen und eine dünne Schicht Nachsorgecreme auftragen.
        </p>
        <p>
            Morgens und Nachts wiederholen. Halten Sie Ihr Tattoo sauber, mit Feuchtigkeit versorgt und
            vermeiden Sie Kratzer oder enge Kleidung. Lassen Sie es auf natürliche Weise abblättern und schorfig.
            Die Heilungdauert etwa 2-4 Wochen.
        </p>
    </div>

    <div class="question" id="faq08">
        <span class="text-2xl text-text-studio-slogan">Was sollte ich vermeiden, während mein Tattoo heilt?</span>
        <p>Vermeiden Sie Schwimmen, Bäder, Spa's, direkte Sonneneinstrahlung, übermäßiges Schwitzen, Rasieren,
            Wachsen und Körperkontakt. Tragen Sie saubere, locker sitzende Kleidung und pflücken oder kratzen
            Sie Ihr Tattoo nicht. Vermeiden Sie wenn möglich Sport für ein paar Tage.
        </p>
    </div>

    <div class="question" id="faq09">
        <span class="text-2xl text-text-studio-slogan">Wie läuft das mit dem Nachstechen?</span>
        <p>Nach mindestens 8 Wochen läßt sich beurteilen wie gut die Haut die Tinte angenommen hat.
            Erst dann kann man überlegen ob ein Nachstechen nötig ist.
            Prinzipiell stechen wir lieber etwas flacher als zu tief. Eine blassere Stelle im Tattoo
            ist daher kein Fehler sondern Sorgfalt und Vorsicht.
            Es läßt sich viel leichter etwas nachstechen als eine unschöne zu tief gestochene Stelle auszubessern.
        </p>
        <p>
            Das Nachstechen ist bei uns immer kostenlos wenn es mit einem weiteren Tattoo mit gemacht wird.
            Soll dafür ein gesonderter Termin angesetzt werden, ist der Mindesttattoopreis für den Aufwand fällig.
        </p>
    </div>

    <div class="question" id="faq10">
        <span class="text-2xl text-text-studio-slogan">Warum gelten deine Angebote nur 14 Tage?</span>
        Leider zeigt die politische Situation das nichts wirklich beständig ist.
        Preise ändern sich, Benzinpreise täglich, Mietpreise jährlich, Tattoomaterialien sind fast jedes mal teurer wenn ich
        nach bestelle.
        Wenn ich dir jetzt sage was ich für Dein Tattoo haben möchte, dann spiegelt das meine aktuellen Kosten wieder.
        Solltest du zum Beispiel in einem halben Jahr dein Tattoo haben wollen, kann (muss nicht) es schon etwas teurer
        sein.
    </div>

    <div class="question" id="faq11">
        <span class="text-2xl text-text-studio-slogan">Warum sind deine Tattoo so günstig?</span>
        <p>
            Auch ich habe Kosten wie jeder andere Tätowierer, dazu gehören Miete, Steuern, Steuerberater,
            Strom, Heizung, Betriebskosten, Reinigungsmaterial und natürlich die ganzen Materialien zum Tätowieren.
            Was meine Preise günstig macht, ich habe kein teures Studio in perfekter Lage,
            man muss mich ein bisschen suchen.
            Dann gebe ich so gut wie kein Geld für Werbung aus, alles ist selber gemacht.
            Sowohl die Beklebung am Schaufenster als auch die Flyer und die Webseite.
            Die meisten Kunden kommen nur durch Empfehlung, auch das packt meinen Terminkalender schon gut voll.
            Was ich sparen kann zahlen meine Kunden weniger und das kommt gut an.
        </p>
    </div>

    <div class="question" id="faq12">
        <span class="text-2xl text-text-studio-slogan">Warum Anfragen nur schriftlich?</span>
        <p>
            Ich habe kein Callcenter, ich habe keine Person die die ganze Zeit am Telefon sitzt.
            Wenn ich Berate, Pierce, Tätowiere brauche ich Ruhe.
            Meine Arbeit soll perfekt werden.
            Daher habe ich mein Telefon immer lautlos.
            So bald ich Zeit habe schaue ich aufs Telefon und beantworte Fragen.
            Mal im Ernst, möchtest du das ich wärend ich dich tätowiere alle 10 Minuten ans Telefon gehe?
            Sicherlich nicht, ich möchte mich auf meine Arbeit konzentrieren können.
            Und noch ein Vorteil, oft erstreckt sich die Entscheidung meiner Kunden über Wochen und Monate.
            Täglich melden sich neue Kunden mit Anfragen.
            Ich kann mir nicht alles merken.
            Da ist es von großem Vorteil wenn ich einen Gesprächsverlauf habe wo ich noch mal nachvollziehen kann worüber
            wir gesprochen haben.
        </p>
    </div>
@endsection
