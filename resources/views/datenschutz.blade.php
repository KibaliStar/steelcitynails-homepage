@extends('layouts.app')

@section('title', 'Datenschutz')

@section('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt, hier findest du Angaben zum Datenschutz.')

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
        <h1 style="display: none;">Datenschutz</h1>
        <h2>Datenschutz</h2>

        <div style="line-height: 1.6;">

            <h3>Datenschutzerklärung</h3>

            <h4>§1 Verantwortlicher</h4>

            <p>
                Verantwortlicher für die Datenverarbeitung auf dieser Website ist die im <a href="impressum">Impressum</a>
                genannte Person oder Stelle.
            </p>

            <h4>§2 Allgemeine Hinweise</h4>

            <p>
                Wir verarbeiten personenbezogene Daten ausschließlich im Rahmen der gesetzlichen Datenschutzvorschriften
                (DSGVO,
                BDSG, TDDDG).
            </p>

            <p>
                Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können.
            </p>

            <h4>§3 Hosting</h4>

            <p>
                Diese Website wird bei einem externen Anbieter gehostet. Dabei werden Server-Logfiles (z. B. IP-Adresse,
                Browsertyp, Uhrzeit) verarbeitet.
            </p>

            <p>
                Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an sicherem Betrieb).
            </p>

            <h4>§4 Server-Logfiles</h4>

            <p>
                Eine Zusammenführung dieser Daten mit anderen Datenquellen erfolgt nicht.
            </p>

            <h4>§5 Kontaktaufnahme</h4>

            <p>
                Bei Kontaktaufnahme werden die angegebenen Daten zur Bearbeitung der Anfrage verarbeitet.
            </p>

            <p>
                Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO.
            </p>

            <h4>§6 Terminbuchung und Dienstleistungen</h4>

            <p>
                Im Rahmen von Terminvereinbarungen (Nageldesign, Visagistik, Beauty etc.) werden personenbezogene Daten
                verarbeitet.
            </p>

            <p>
                Dies umfasst insbesondere Name, Kontaktdaten, Termindaten sowie ggf. gesundheitsrelevante Angaben.
            </p>

            <p>
                Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO sowie Art. 9 Abs. 2 lit. a DSGVO bei Gesundheitsdaten.
            </p>

            <h4>§7 Gesundheitsdaten</h4>

            <p>
                Gesundheitsdaten werden ausschließlich auf Grundlage einer ausdrücklichen Einwilligung verarbeitet.
            </p>

            <h4>§8 Cookies</h4>

            <p>
                Diese Website verwendet Cookies. Diese dienen technischen Funktionen sowie Analyse- und Marketingzwecken.
            </p>

            <p>
                Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO bzw. Art. 6 Abs. 1 lit. a DSGVO bei Einwilligung.
            </p>

            <h4>§9 Einwilligungsmanagement (Cookie-Banner)</h4>

            <p>
                Analyse- und Marketing-Cookies werden nur nach aktiver Zustimmung gesetzt.
            </p>

            <p>
                Die Einwilligung kann jederzeit widerrufen werden.
            </p>

            <h4>§10 Google Analytics</h4>

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

            <h4>§11 Marketing- und Tracking-Technologien</h4>

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

            <h4>§12 Social Media</h4>

            <p>
                Links zu sozialen Netzwerken können enthalten sein. Beim Aufruf gelten die Datenschutzbestimmungen der
                jeweiligen Anbieter.
            </p>

            <h4>§13 Foto- und Bilddaten</h4>

            <p>
                Im Rahmen von Dienstleistungen können Fotos erstellt werden.
            </p>

            <p>
                Eine Veröffentlichung erfolgt nur mit Einwilligung.
            </p>

            <h4>§14 Weitergabe von Daten</h4>

            <p>
                Eine Weitergabe erfolgt nur bei gesetzlicher Pflicht, Einwilligung oder Vertragsnotwendigkeit.
            </p>

            <h4>§15 Speicherdauer</h4>

            <p>
                Daten werden nur so lange gespeichert, wie es erforderlich ist.
            </p>

            <h4>§16 Rechte der betroffenen Personen</h4>

            <ul>
                <li>Auskunft (Art. 15 DSGVO)</li>
                <li>Berichtigung (Art. 16 DSGVO)</li>
                <li>Löschung (Art. 17 DSGVO)</li>
                <li>Einschränkung (Art. 18 DSGVO)</li>
                <li>Datenübertragbarkeit (Art. 20 DSGVO)</li>
                <li>Widerspruch (Art. 21 DSGVO)</li>
            </ul>

            <h4>§17 Widerruf</h4>

            <p>
                Einwilligungen können jederzeit widerrufen werden.
            </p>

            <h4>§18 Datensicherheit</h4>

            <p>
                Es werden technische und organisatorische Maßnahmen zum Schutz personenbezogener Daten eingesetzt.
            </p>

            <h4>§19 Externe Links</h4>

            <p>
                Für externe Inhalte wird keine Verantwortung übernommen.
            </p>

            <h4>§20 Änderungen</h4>

            <p>
                Diese Datenschutzerklärung kann angepasst werden.
            </p>

            <h4>§21 Kontakt Datenschutz</h4>

            <p>
                Kontakt erfolgt über die im Impressum genannten Daten.
            </p>

            <h4>§22 Verbraucherstreitbeilegung</h4>

            <p>
                EU-Plattform zur Online-Streitbeilegung: https://ec.europa.eu/consumers/odr
            </p>

            <p>
                Wir sind nicht verpflichtet und nicht bereit, an Streitbeilegungsverfahren teilzunehmen.
            </p>

        </div>
    </div>

    <!-- COOKIE-Entscheidung-Ändern Button -->
    @cookieconsentbutton(action: 'reset', label: 'Cookie Einstellung ändern')

@endsection
