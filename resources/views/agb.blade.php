@extends('layouts.app')

@section('title', 'AGB')

@section('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, hier findest du unsere AGB.')

@section('styles')
    <style>
        a {
            color: var(--color-text-link);
            text-decoration: none;

            &:hover {
                color: var(--color-text-hover);
                text-decoration: underline;
                text-underline-offset: 3px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="standard-section-left">
        <h1 style="display: none;">AGB</h1>
        <h2>AGB</h2>

        <div style="line-height:1.6;">

            <h3>Allgemeine Geschäftsbedingungen (AGB)</h3>
            <h5>für Website und Dienstleistungen</h5>
            <br>

            <p>
                Diese Allgemeinen Geschäftsbedingungen gelten für die Nutzung dieser Website sowie für sämtliche darüber
                angebotenen oder vermittelten Dienstleistungen in den Bereichen Nageldesign, Maniküre, Pediküre und
                kosmetische
                Behandlungen.
            </p>

            <h4>§1 Anbieter und Geltungsbereich</h4>

            <p>
                (1) Anbieter ist die im <a href="{{ route('impressum') }}">Impressum</a> genannte natürliche oder juristische
                Person.
            </p>

            <p>
                (2) Diese AGB gelten für alle Verträge, Terminvereinbarungen, Reservierungen, Anfragen und sonstigen
                Geschäftsbeziehungen zwischen Anbieter und Kunde.
            </p>

            <p>
                (3) Maßgeblich ist die zum Zeitpunkt der Terminvereinbarung gültige Fassung.
            </p>

            <p>
                (4) Verbraucher ist jede natürliche Person gemäß § 13 BGB.
            </p>

            <h4>§2 Leistungen und Leistungsbeschreibung</h4>

            <p>
                (1) Die auf dieser Website dargestellten Leistungen dienen der Information und stellen kein verbindliches
                Angebot dar.
            </p>

            <p>
                (2) Leistungsinhalte ergeben sich aus individueller Absprache oder Terminvereinbarung.
            </p>

            <p>
                (3) Künstlerische, technische oder körperliche Abweichungen sind möglich und stellen keinen Mangel dar,
                soweit
                die Leistung fachgerecht erbracht wurde.
            </p>

            <h4>§3 Vertragsschluss und Terminvereinbarung</h4>

            <p>
                (1) Ein Vertrag kommt durch Terminbestätigung oder tatsächliche Durchführung der Leistung zustande.
            </p>

            <p>
                (2) Terminvereinbarungen erfolgen online, telefonisch, schriftlich oder persönlich.
            </p>

            <p>
                (3) Der Anbieter kann Anfragen ohne Angabe von Gründen ablehnen.
            </p>

            <p>
                (4) Elektronische Anfragen begründen keinen Anspruch auf Vertragsschluss.
            </p>

            <h4>§4 Preise, Zahlungen, Anzahlungen und Gutscheine</h4>

            <p>
                (1) Es gelten die zum Zeitpunkt der Buchung vereinbarten Preise.
            </p>

            <p>
                (2) Preise verstehen sich inklusive gesetzlicher Umsatzsteuer, sofern diese anfällt.
            </p>

            <p>
                (3) Zahlungen erfolgen nach Leistungserbringung, sofern nichts anderes vereinbart wurde.
            </p>

            <p>
                (4) Der Anbieter ist berechtigt, Anzahlungen (Terminkautionen) zu verlangen. Diese werden auf den
                Gesamtpreis
                angerechnet.
            </p>

            <p>
                (5) Bei nicht rechtzeitiger Absage gemäß §5 oder Nichterscheinen kann die Anzahlung als Ausfallhonorar
                einbehalten werden, sofern der Termin nicht anderweitig vergeben werden kann.
            </p>

            <p>
                (6) Gutscheine sind ab Ausstellungsdatum drei Jahre zum Jahresende gültig, sofern keine abweichende
                gesetzliche
                Regelung greift.
            </p>

            <p>
                (7) Eine Barauszahlung von Gutscheinen ist ausgeschlossen, soweit gesetzlich zulässig.
            </p>

            <h4>§5 Termine, Absagen und Ausfallhonorar</h4>

            <p>
                (1) Vereinbarte Termine sind verbindlich.
            </p>

            <p>
                (2) Absagen müssen rechtzeitig erfolgen.
            </p>

            <p>
                (3) Bei Absagen unter 24 Stunden oder Nichterscheinen kann ein angemessenes Ausfallhonorar verlangt werden,
                sofern der Termin nicht neu vergeben werden kann.
            </p>

            <p>
                (4) Der Kunde kann nachweisen, dass kein oder ein geringerer Schaden entstanden ist.
            </p>

            <h4>§6 Gesundheitsangaben des Kunden</h4>

            <p>
                Der Kunde verpflichtet sich, vor Behandlungsbeginn alle relevanten gesundheitlichen Informationen
                vollständig
                und wahrheitsgemäß mitzuteilen.
            </p>

            <h4>§7 Ablehnungsrecht</h4>

            <p>
                Der Anbieter ist berechtigt, Leistungen abzulehnen oder abzubrechen, wenn gesundheitliche, hygienische oder
                sicherheitsrelevante Gründe bestehen oder der Kunde unter Alkohol- oder Drogeneinfluss steht.
            </p>

            <h4>§8 (gestrichen)</h4>

            <h4>§9 Minderjährige</h4>

            <p>
                Leistungen an Minderjährige erfolgen nur im Rahmen der gesetzlichen Vorgaben und mit Zustimmung der
                Erziehungsberechtigten sowie ggf. Altersnachweis.
            </p>

            <h4>§10 Hygiene und Mitwirkungspflichten</h4>

            <p>
                Alle Leistungen erfolgen unter Einhaltung geltender Hygienevorschriften. Kunden haben Anweisungen zu
                beachten.
            </p>

            <h4>§11 Pflege- und Nachbehandlung</h4>

            <p>
                Der Kunde ist verpflichtet, Pflegehinweise einzuhalten. Für Schäden durch Nichtbeachtung wird keine Haftung
                übernommen, soweit gesetzlich zulässig.
            </p>

            <h4>§12 Kreative und künstlerische Leistungen</h4>

            <p>
                Geringfügige Abweichungen von der Vorlage sind möglich, sofern die Leistung fachgerecht erbracht wurde
            </p>

            <h4>§13 Bild- und Nutzungsrechte</h4>

            <p>
                Inhalte dieser Website dürfen nicht ohne Zustimmung verwendet werden.
            </p>

            <p>
                Kundenfotos werden nur mit Einwilligung veröffentlicht.
            </p>

            <h4>§14 Urheberrechte an Entwürfen</h4>

            <p>
                Entwürfe bleiben geistiges Eigentum des Anbieters.
            </p>

            <h4>§15 Elektronische Kommunikation</h4>

            <p>
                Kontaktanfragen begründen keinen Anspruch auf Vertragsschluss.
            </p>

            <h4>§16 Externe Links</h4>

            <p>
                Für externe Inhalte wird keine Haftung übernommen.
            </p>

            <h4>§17 Datenschutz</h4>

            <p>
                Es gilt die <a href="{{ route('datenschutz') }}">Datenschutzerklärung</a>.
            </p>

            <h4>§18 Widerrufsrecht</h4>

            <p>
                Bei Termindienstleistungen im Freizeitbereich besteht gemäß § 312g Abs. 2 Nr. 9 BGB kein Widerrufsrecht.
            </p>

            <h4>§19 Haftung</h4>

            <p>
                Haftung nur bei Vorsatz, grober Fahrlässigkeit sowie bei Verletzung von Leben, Körper oder Gesundheit.
            </p>

            <h4>§20 Gewährleistung</h4>

            <p>
                Es gelten die gesetzlichen Gewährleistungsregelungen.
            </p>

            <h4>§21 Vertragssprache</h4>

            <p>
                Vertragssprache ist Deutsch.
            </p>

            <h4>§22 Kundendienst</h4>

            <p>
                Kontakt über die im <a href="{{ route('impressum') }}">Impressum</a> angegebenen Wege.
            </p>

            <h4>§23 Verbraucherstreitbeilegung</h4>

            <p>
                Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die unter
                https://ec.europa.eu/consumers/odr erreichbar ist.
            </p>

            <p>
                Wir sind nicht verpflichtet und nicht bereit, an einem Streitbeilegungsverfahren vor einer
                Verbraucherschlichtungsstelle teilzunehmen.
            </p>

            <h4>§24 Schlussbestimmungen</h4>

            <p>
                Es gilt deutsches Recht. Sollten einzelne Bestimmungen unwirksam sein, bleibt der Rest gültig.
            </p>

        </div>
    </div>
@endsection
