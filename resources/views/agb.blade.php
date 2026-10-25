@extends('layouts.app')

@section('title', 'AGB')

@section('description', 'Tattoo und Piercing in Eisenhüttenstadt, hier findest du unsere AGB.')

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
    <h1>AGB</h1>

    <div style="max-width:1000px;margin:0 auto;line-height:1.6;">

        <h2>Allgemeine Geschäftsbedingungen (AGB) für Website und Dienstleistungen</h2>

        <p>
            Diese Allgemeinen Geschäftsbedingungen gelten für die Nutzung dieser Website sowie für sämtliche darüber
            angebotenen oder vermittelten Dienstleistungen in den Bereichen Tattoo, Piercing, Nageldesign, Make-up,
            Bodypainting, Facepainting und vergleichbaren körpernahen sowie kreativen Dienstleistungen.
        </p>

        <h3>§1 Anbieter und Geltungsbereich</h3>

        <p>
            (1) Anbieter ist die im <a href="{{ route('impressum') }}">Impressum</a> genannte natürliche oder juristische Person.
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

        <h3>§2 Leistungen und Leistungsbeschreibung</h3>

        <p>
            (1) Die auf dieser Website dargestellten Leistungen dienen der Information und stellen kein verbindliches
            Angebot dar.
        </p>

        <p>
            (2) Leistungsinhalte ergeben sich aus individueller Absprache oder Terminvereinbarung.
        </p>

        <p>
            (3) Künstlerische, technische oder körperliche Abweichungen sind möglich und stellen keinen Mangel dar, soweit
            die Leistung fachgerecht erbracht wurde.
        </p>

        <h3>§3 Vertragsschluss und Terminvereinbarung</h3>

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

        <h3>§4 Preise, Zahlungen, Anzahlungen und Gutscheine</h3>

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
            (4) Der Anbieter ist berechtigt, Anzahlungen (Terminkautionen) zu verlangen. Diese werden auf den Gesamtpreis
            angerechnet.
        </p>

        <p>
            (5) Bei nicht rechtzeitiger Absage gemäß §5 oder Nichterscheinen kann die Anzahlung als Ausfallhonorar
            einbehalten werden, sofern der Termin nicht anderweitig vergeben werden kann.
        </p>

        <p>
            (6) Gutscheine sind ab Ausstellungsdatum drei Jahre zum Jahresende gültig, sofern keine abweichende gesetzliche
            Regelung greift.
        </p>

        <p>
            (7) Eine Barauszahlung von Gutscheinen ist ausgeschlossen, soweit gesetzlich zulässig.
        </p>

        <h3>§5 Termine, Absagen und Ausfallhonorar</h3>

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

        <h3>§6 Gesundheitsangaben des Kunden</h3>

        <p>
            Der Kunde verpflichtet sich, vor Behandlungsbeginn alle relevanten gesundheitlichen Informationen vollständig
            und wahrheitsgemäß mitzuteilen.
        </p>

        <h3>§7 Ablehnungsrecht</h3>

        <p>
            Der Anbieter ist berechtigt, Leistungen abzulehnen oder abzubrechen, wenn gesundheitliche, hygienische oder
            sicherheitsrelevante Gründe bestehen oder der Kunde unter Alkohol- oder Drogeneinfluss steht.
        </p>

        <h3>§8 Tattoo- und Piercingleistungen</h3>

        <p>
            (1) Tattoo- und Piercingleistungen erfolgen ausschließlich nach Aufklärung und Einwilligung.
        </p>

        <p>
            (2) Der Kunde wird über Risiken, Pflege und mögliche Komplikationen informiert.
        </p>

        <p>
            (3) Eine gesonderte schriftliche Einwilligung kann erforderlich sein.
        </p>

        <p>
            (4) Nachstechen ist nur dann im Preis enthalten, wenn dies ausdrücklich vereinbart wurde. In der Regel ist ein
            kostenfreies Nachstechen nur innerhalb von 3 Monaten und nur bei fachgerecht durchgeführter Nachsorge
            vorgesehen.
        </p>

        <p>
            (5) Kein Anspruch auf kostenfreies Nachstechen besteht bei mangelnder Pflege, Eigenverschulden oder äußeren
            Einflüssen.
        </p>

        <h3>§9 Minderjährige</h3>

        <p>
            Leistungen an Minderjährige erfolgen nur im Rahmen der gesetzlichen Vorgaben und mit Zustimmung der
            Erziehungsberechtigten sowie ggf. Altersnachweis.
        </p>

        <h3>§10 Hygiene und Mitwirkungspflichten</h3>

        <p>
            Alle Leistungen erfolgen unter Einhaltung geltender Hygienevorschriften. Kunden haben Anweisungen zu beachten.
        </p>

        <h3>§11 Pflege- und Nachbehandlung</h3>

        <p>
            Der Kunde ist verpflichtet, Pflegehinweise einzuhalten. Für Schäden durch Nichtbeachtung wird keine Haftung
            übernommen, soweit gesetzlich zulässig.
        </p>

        <h3>§12 Kreative und künstlerische Leistungen</h3>

        <p>
            Künstlerische Abweichungen stellen keinen Mangel dar, sofern die Leistung fachgerecht erbracht wurde.
        </p>

        <h3>§13 Bild- und Nutzungsrechte</h3>

        <p>
            Inhalte dieser Website dürfen nicht ohne Zustimmung verwendet werden.
        </p>

        <p>
            Kundenfotos werden nur mit Einwilligung veröffentlicht.
        </p>

        <h3>§14 Urheberrechte an Entwürfen</h3>

        <p>
            Entwürfe bleiben geistiges Eigentum des Anbieters.
        </p>

        <h3>§15 Elektronische Kommunikation</h3>

        <p>
            Kontaktanfragen begründen keinen Anspruch auf Vertragsschluss.
        </p>

        <h3>§16 Externe Links</h3>

        <p>
            Für externe Inhalte wird keine Haftung übernommen.
        </p>

        <h3>§17 Datenschutz</h3>

        <p>
            Es gilt die <a href="{{ route('datenschutz') }}">Datenschutzerklärung</a>.
        </p>

        <h3>§18 Widerrufsrecht</h3>

        <p>
            Bei Termindienstleistungen im Freizeitbereich besteht gemäß § 312g Abs. 2 Nr. 9 BGB kein Widerrufsrecht.
        </p>

        <h3>§19 Haftung</h3>

        <p>
            Haftung nur bei Vorsatz, grober Fahrlässigkeit sowie bei Verletzung von Leben, Körper oder Gesundheit.
        </p>

        <h3>§20 Gewährleistung</h3>

        <p>
            Es gelten die gesetzlichen Gewährleistungsregelungen.
        </p>

        <h3>§21 Vertragssprache</h3>

        <p>
            Vertragssprache ist Deutsch.
        </p>

        <h3>§22 Kundendienst</h3>

        <p>
            Kontakt über die im <a href="{{ route('impressum') }}">Impressum</a> angegebenen Wege.
        </p>

        <h3>§23 Verbraucherstreitbeilegung</h3>

        <p>
            Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die unter
            https://ec.europa.eu/consumers/odr erreichbar ist.
        </p>

        <p>
            Wir sind nicht verpflichtet und nicht bereit, an einem Streitbeilegungsverfahren vor einer
            Verbraucherschlichtungsstelle teilzunehmen.
        </p>

        <h3>§24 Schlussbestimmungen</h3>

        <p>
            Es gilt deutsches Recht. Sollten einzelne Bestimmungen unwirksam sein, bleibt der Rest gültig.
        </p>

    </div>
@endsection
