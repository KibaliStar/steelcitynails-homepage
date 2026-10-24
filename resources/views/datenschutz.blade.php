@extends('layouts.app')

@section('title', 'Datenschutz')

@section('description', 'Tattoo und Piercing in Eisenhüttenstadt, hier findest du Angaben zum Datenschutz.')

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
    <h1>Datenschutz</h1>

    <div style="line-height:1.6;">

        <h2>Datenschutzerklärung</h2>

        <h3>§1 Verantwortlicher</h3>

        <p>
            Verantwortlicher für die Datenverarbeitung auf dieser Website ist die im <a href="impressum">Impressum</a>
            genannte Person oder Stelle.
        </p>

        <h3>§2 Allgemeine Hinweise</h3>

        <p>
            Wir verarbeiten personenbezogene Daten ausschließlich im Rahmen der gesetzlichen Datenschutzvorschriften (DSGVO,
            BDSG, TDDDG).
        </p>

        <p>
            Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können.
        </p>

        <h3>§3 Hosting</h3>

        <p>
            Diese Website wird bei einem externen Anbieter gehostet. Dabei werden Server-Logfiles (z. B. IP-Adresse,
            Browsertyp, Uhrzeit) verarbeitet.
        </p>

        <p>
            Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an sicherem Betrieb).
        </p>

        <h3>§4 Server-Logfiles</h3>

        <p>
            Eine Zusammenführung dieser Daten mit anderen Datenquellen erfolgt nicht.
        </p>

        <h3>§5 Kontaktaufnahme</h3>

        <p>
            Bei Kontaktaufnahme werden die angegebenen Daten zur Bearbeitung der Anfrage verarbeitet.
        </p>

        <p>
            Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO.
        </p>

        <h3>§6 Terminbuchung und Dienstleistungen</h3>

        <p>
            Im Rahmen von Terminvereinbarungen (Tattoo, Piercing, Beauty etc.) werden personenbezogene Daten verarbeitet.
        </p>

        <p>
            Dies umfasst insbesondere Name, Kontaktdaten, Termindaten sowie ggf. gesundheitsrelevante Angaben.
        </p>

        <p>
            Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO sowie Art. 9 Abs. 2 lit. a DSGVO bei Gesundheitsdaten.
        </p>

        <h3>§7 Gesundheitsdaten</h3>

        <p>
            Gesundheitsdaten werden ausschließlich auf Grundlage einer ausdrücklichen Einwilligung verarbeitet.
        </p>

        <h3>§8 Cookies</h3>

        <p>
            Diese Website verwendet Cookies. Diese dienen technischen Funktionen sowie Analyse- und Marketingzwecken.
        </p>

        <p>
            Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO bzw. Art. 6 Abs. 1 lit. a DSGVO bei Einwilligung.
        </p>

        <h3>§9 Einwilligungsmanagement (Cookie-Banner)</h3>

        <p>
            Analyse- und Marketing-Cookies werden nur nach aktiver Zustimmung gesetzt.
        </p>

        <p>
            Die Einwilligung kann jederzeit widerrufen werden.
        </p>

        <h3>§10 Google Analytics</h3>

        <p>
            Diese Website nutzt Google Analytics (Google Ireland Limited).
        </p>

        <p>
            Google Analytics verwendet Cookies zur Analyse der Nutzung dieser Website.
        </p>

        <p>
            Die Verarbeitung erfolgt ausschließlich auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO).
        </p>

        <p>
            IP-Anonymisierung ist aktiviert. Daten können in die USA übertragen werden (EU-US Data Privacy Framework).
        </p>

        <p>
            Weitere Informationen: https://policies.google.com/privacy
        </p>

        <h3>§11 Marketing- und Tracking-Technologien</h3>

        <p>
            Diese Website kann Marketing- und Tracking-Technologien einsetzen, z. B.:
        </p>

        <ul>
            <li>Google Ads</li>
            <li>Google Tag Manager</li>
            <li>Meta Pixel (Facebook/Instagram)</li>
        </ul>

        <p>
            Diese Verarbeitung erfolgt nur mit Einwilligung (Art. 6 Abs. 1 lit. a DSGVO).
        </p>

        <h3>§12 Social Media</h3>

        <p>
            Links zu sozialen Netzwerken können enthalten sein. Beim Aufruf gelten die Datenschutzbestimmungen der
            jeweiligen Anbieter.
        </p>

        <h3>§13 Foto- und Bilddaten</h3>

        <p>
            Im Rahmen von Dienstleistungen können Fotos erstellt werden.
        </p>

        <p>
            Eine Veröffentlichung erfolgt nur mit Einwilligung.
        </p>

        <h3>§14 Weitergabe von Daten</h3>

        <p>
            Eine Weitergabe erfolgt nur bei gesetzlicher Pflicht, Einwilligung oder Vertragsnotwendigkeit.
        </p>

        <h3>§15 Speicherdauer</h3>

        <p>
            Daten werden nur so lange gespeichert, wie es erforderlich ist.
        </p>

        <h3>§16 Rechte der betroffenen Personen</h3>

        <ul>
            <li>Auskunft (Art. 15 DSGVO)</li>
            <li>Berichtigung (Art. 16 DSGVO)</li>
            <li>Löschung (Art. 17 DSGVO)</li>
            <li>Einschränkung (Art. 18 DSGVO)</li>
            <li>Datenübertragbarkeit (Art. 20 DSGVO)</li>
            <li>Widerspruch (Art. 21 DSGVO)</li>
        </ul>

        <h3>§17 Widerruf</h3>

        <p>
            Einwilligungen können jederzeit widerrufen werden.
        </p>

        <h3>§18 Datensicherheit</h3>

        <p>
            Es werden technische und organisatorische Maßnahmen zum Schutz personenbezogener Daten eingesetzt.
        </p>

        <h3>§19 Externe Links</h3>

        <p>
            Für externe Inhalte wird keine Verantwortung übernommen.
        </p>

        <h3>§20 Änderungen</h3>

        <p>
            Diese Datenschutzerklärung kann angepasst werden.
        </p>

        <h3>§21 Kontakt Datenschutz</h3>

        <p>
            Kontakt erfolgt über die im Impressum genannten Daten.
        </p>

        <h3>§22 Verbraucherstreitbeilegung</h3>

        <p>
            EU-Plattform zur Online-Streitbeilegung: https://ec.europa.eu/consumers/odr
        </p>

        <p>
            Wir sind nicht verpflichtet und nicht bereit, an Streitbeilegungsverfahren teilzunehmen.
        </p>

    </div>

    <!-- COOKIE-Entscheidung-Ändern Button -->
    @cookieconsentbutton(action: 'reset', label: 'Cookie Einstellung ändern')
@endsection
