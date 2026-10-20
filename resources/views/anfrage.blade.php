@extends('layouts.app')

@section('title', 'Anfrage / Kontaktformular')

@section('styles')
    <style>
        .anfrageformular {
            margin: 2rem 0 2rem 0;
        }
        /* ===== TABS NAVIGATION ===== */
        .tabs-nav {
            display: flex;
            border-bottom: 2px solid var(--color-border);
            margin-bottom: 0px;
            gap: 5px;
        }

        .tab-btn {
            padding: 10px 20px;
            background: transparent;
            border: 1px solid transparent;
            border-bottom: none;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: bold;
            color: var(--color-text-link);
            border-radius: 8px 8px 0 0;
            transition: all 0.2s ease;
            margin-bottom: -2px;
            /* Überlappt die Linie unten */
        }

        .tab-btn:hover {
            color: var(--color-text-hover);
        }

        .tab-btn.active {
            color: var(--color-text-studio-name);
            border-color: var(--color-border);
            border-bottom-color: var(--color-border);
            /* Versteckt die Linie unter dem aktiven Tab */
            background: var(--color-faqfieldset);
        }

        /* ===== TAB CONTENT ===== */
        .tab-content {
            display: none;
            /* Standardmäßig versteckt */
            padding: 20px;
            border: 2px solid var(--color-border);
            border-top: none;
            border-radius: 0 0 8px 8px;
            background: var(--color-faqfieldset);
        }

        .tab-content.active {
            display: block;
            /* Nur das aktive wird angezeigt */
        }

        /* Formular-Platzhalter Style */
        .form-placeholder {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            border: 1px dashed #ccc;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
    <h1>Kontaktformular</h1>
    <p>Bitte wähle den Bereich aus, für den du eine Anfrage stellen möchtest.</p>

    @php
        // Standardmäßig Tattoo, außer der Parameter sagt etwas anderes
        $aktivesThema = request('thema', 'tattoo');

        // Fallback, falls jemand ?thema=quatsch in die URL eingibt
        if (!in_array($aktivesThema, ['tattoo', 'piercing', 'allgemein'])) {
            $aktivesThema = 'tattoo';
        }
    @endphp

    <div class="anfrageformular">
        <!-- 1. Die Reiter (Buttons) -->
        <div class="tabs-nav">
            <button class="tab-btn {{ $aktivesThema == 'tattoo' ? 'active' : '' }}" data-target="tab-tattoo">Tattoo</button>
            <button class="tab-btn {{ $aktivesThema == 'piercing' ? 'active' : '' }}"
                data-target="tab-piercing">Piercing</button>
            <button class="tab-btn {{ $aktivesThema == 'allgemein' ? 'active' : '' }}"
                data-target="tab-allgemein">Allgemein</button>
        </div>

        <!-- 2. Der Inhalt der Reiter -->

        <!-- TATTOO -->
        <div id="tab-tattoo" class="tab-content {{ $aktivesThema == 'tattoo' ? 'active' : '' }}">
            <h2>Tattoo Anfrage</h2>
            <div class="form-placeholder">
                <p><em>Hier wird später das echte Tattoo-Formular stehen.</em></p>
                <ul>
                    <li>Vorname, Nachname</li>
                    <li>E-Mail</li>
                    <li>Telefonnummer</li>
                    <li>Geburtsdatum</li>
                    <li>Auswahl: Unentschlossen, Black & Gray, Color, ein bisschen von beidem</li>
                    <li>Körperstelle</li>
                    <li>Größe des Tattoos (Breite x Höhe)</li>
                    <li>Bis wann soll das Tattoo fertig sein?</li>
                    <li>Erzähle uns von deiner Tattoo Idee (Textfeld)</li>
                    <li>Datei-Upload (bis zu 5 Bilder)</li>
                </ul>
            </div>
        </div>

        <!-- PIERCING -->
        <div id="tab-piercing" class="tab-content {{ $aktivesThema == 'piercing' ? 'active' : '' }}">
            <h2>Piercing Anfrage</h2>
            <div class="form-placeholder">
                <p><em>Hier wird später das echte Piercing-Formular stehen.</em></p>
                <ul>
                    <li>Vorname, Nachname</li>
                    <li>E-Mail</li>
                    <li>Telefonnummer</li>
                    <li>Geburtsdatum</li>
                    <li>Körperstelle</li>
                    <li>Art des Piercings</li>
                    <li>Bis wann soll das Piercing fertig sein?</li>
                    <li>Erzähle uns von deiner Piercing Idee (Textfeld)</li>
                </ul>
            </div>
        </div>

        <!-- ALLGEMEIN -->
        <div id="tab-allgemein" class="tab-content {{ $aktivesThema == 'allgemein' ? 'active' : '' }}">
            <h2>Allgemeine Anfrage</h2>
            <div class="form-placeholder">
                <p><em>Hier wird später das echte allgemeine Formular stehen.</em></p>
                <ul>
                    <li>Vorname, Nachname</li>
                    <li>E-Mail</li>
                    <li>Telefonnummer</li>
                    <li>Geburtsdatum</li>
                    <li>Nachricht (Textfeld)</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // 1. Alle Reiter und Inhalte auf "inaktiv" setzen
                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));

                    // 2. Den geklickten Reiter als "aktiv" markieren
                    this.classList.add('active');

                    // 3. Den dazugehörigen Inhalt anzeigen
                    const targetId = this.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                });
            });
        });
    </script>
@endsection
