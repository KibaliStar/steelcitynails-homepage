@extends('layouts.app')

@section('title', 'Anfrage / Kontaktformular')

@section('description',
    'Tattoo und Piercing in Eisenhüttenstadt, du suchst Kontakt zu uns? 
    Hier findest du unser Kontaktformular, Teile deine Wünsche und Vorstellungen mit uns.')

@section('styles')
    <style>
        .anfrageformular {
            margin: 1rem 0;
            width: var(--contentWidth);
            margin-left: auto;
            margin-right: auto;

            h1 {
                font-size: 1.8rem;
                margin-bottom: 0.5rem;
            }

            p.einleitung {
                font-size: 0.95rem;
                color: #555;
                margin-bottom: 1.5rem;
            }
        }

        /* ===== TABS NAVIGATION ===== */
        .tabs-nav {
            display: flex;
            border-bottom: 2px solid var(--color-border);
            margin-bottom: 0px;
            gap: 5px;
            flex-wrap: wrap;

            .tab-btn {
                padding: 8px 16px;
                background: transparent;
                border: 1px solid transparent;
                border-bottom: none;
                cursor: pointer;
                font-size: 1rem;
                font-weight: bold;
                color: var(--color-text-link);
                border-radius: 6px 6px 0 0;
                transition: all 0.2s ease;
                margin-bottom: -2px;

                &:hover {
                    color: var(--color-text-hover);
                }

                &.active {
                    color: var(--color-text-studio-name);
                    border-color: var(--color-border);
                    border-bottom-color: var(--color-border);
                    background: var(--color-faqfieldset);
                }
            }
        }

        /* ===== TAB CONTENT ===== */
        fieldset.tab-content {
            display: none;
            padding: 15px;
            border: 2px solid var(--color-border);
            border-top: none;
            border-radius: 0 0 6px 6px;
            background: var(--color-faqfieldset);
            margin: 0;

            &.active {
                display: block;
            }

            legend {
                display: none;
            }

            h2 {
                font-size: 1.2rem;
                margin-top: 0;
                margin-bottom: 15px;
            }
        }

        /* ===== FORMULAR ELEMENTE ===== */
        .form-group {
            margin-bottom: 12px;
            display: flex;
            flex-direction: column;

            label {
                font-weight: bold;
                margin-bottom: 4px;
                font-size: 0.85rem;
            }

            input,
            select,
            textarea {
                padding: 8px;
                border: 1px solid var(--color-border);
                border-radius: 4px;
                font-family: inherit;
                font-size: 0.95rem;
                width: 100%;
                box-sizing: border-box;
                max-width: 100%;
            }

            textarea {
                resize: vertical;
                min-height: 80px;
            }

            small {
                font-size: 0.75rem;
                color: #666;
                margin-top: 4px;
            }
        }

        /* ===== RESPONSIVE GRID FÜR FELDER ===== */
        .form-row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            width: 100%;

            .form-group {
                flex: 1 1 100%;
                min-width: 0;
            }

            /* Ab 600px: 2 Spalten */
            @media (min-width: 600px) {
                .form-group {
                    flex: 1 1 calc(50% - 12px);
                }
            }
        }

        /* ===== CHECKBOX GRUPPE ===== */
        .form-group.checkbox-group {
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            gap: 8px;
            margin-bottom: 15px;
            text-align: left;

            input[type="checkbox"] {
                width: auto;
                margin: 0;
            }

            label {
                margin-bottom: 0;
                font-weight: normal;
                font-size: 0.85rem;
                text-align: left;
            }
        }

        /* ===== BUTTON & MELDUNGEN ===== */
        .submit-btn {
            background: var(--color-text-link);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 15px;
            width: 100%;
            font-weight: bold;

            &:hover {
                background: var(--color-text-hover);
            }
        }

        .erfolgsmeldung {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 15px;
            border: 1px solid #c3e6cb;
        }

        .fehlermeldung {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 15px;
            border: 1px solid #f5c6cb;

            ul {
                margin: 0;
                padding-left: 20px;
            }
        }

        hr.trennlinie {
            margin: 15px 0;
            border: 0;
            border-top: 1px solid var(--color-border);
            opacity: 0.5;
        }

        p.pflicht-hinweis {
            font-size: 0.8rem;
            color: #666;
            margin: 10px 0;
        }

        /* Honeypot: Unsichtbar für Menschen, aber nicht per display:none versteckt */
        .hp-field {
            position: absolute;
            left: -9999px;
            top: -9999px;
            opacity: 0;
            height: 0;
            width: 0;
            overflow: hidden;
            z-index: -1;
        }
    </style>
@endsection

@section('content')
    <div class="anfrageformular">
        <h1 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Kontaktformular</h1>
        <p style="font-size: 0.95rem; color: #555; margin-bottom: 1.5rem;">Bitte wähle den Bereich aus, für den du eine
            Anfrage stellen möchtest.</p>

        @if (session('success'))
            <div class="erfolgsmeldung">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="fehlermeldung">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @php
            $aktivesThema = old('thema', request('thema', 'tattoo'));
            if (!in_array($aktivesThema, ['tattoo', 'piercing', 'allgemein'])) {
                $aktivesThema = 'tattoo';
            }
        @endphp

        <!-- Reiter-Buttons -->
        <div class="tabs-nav">
            <button type="button" class="tab-btn {{ $aktivesThema == 'tattoo' ? 'active' : '' }}"
                data-target="tab-tattoo">Tattoo</button>
            <button type="button" class="tab-btn {{ $aktivesThema == 'piercing' ? 'active' : '' }}"
                data-target="tab-piercing">Piercing</button>
            <button type="button" class="tab-btn {{ $aktivesThema == 'allgemein' ? 'active' : '' }}"
                data-target="tab-allgemein">Allgemein</button>
        </div>

        <!-- EIN EINZIGES FORMULAR -->
        <form action="{{ route('kontakt.senden') }}" method="POST" enctype="multipart/form-data" class="bilder-formular">
            @csrf
            <input type="hidden" name="thema" id="input-thema" value="{{ $aktivesThema }}">

            {{-- HONEYPOT: Bots füllen das aus, Menschen nicht --}}
            <div class="hp-field" aria-hidden="true">
                <label for="website">Bitte lassen Sie dieses Feld leer</label>
                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
            </div>

            {{-- ZEITSTEMPEL: Wann wurde die Seite geladen? --}}
            <input type="hidden" name="form_start_time" id="form_start_time" value="{{ time() }}">

            <p style="font-size: 0.8rem; 
                color: var(--color-text-primaerhell); 
                background-color: var(--color-faqfieldset);
                border-right: 2px solid var(--color-border);
                border-left: 2px solid var(--color-border);
                padding: 10px;
                ">
                Mit * markierte Felder sind Pflichtfelder (Name &
                Telefonnummer). Alle anderen Angaben helfen uns bei der Bearbeitung.
            </p>

            <!-- TATTOO -->
            <fieldset id="tab-tattoo" class="tab-content {{ $aktivesThema == 'tattoo' ? 'active' : '' }}"
                {{ $aktivesThema != 'tattoo' ? 'disabled' : '' }}>
                <h2 style="font-size: 1.2rem; margin-top: 0; margin-bottom: 15px;">Tattoo Anfrage</h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="tattoo_vorname">Vorname</label>
                        <input id="tattoo_vorname" type="text" name="vorname" value="{{ old('vorname') }}">
                    </div>
                    <div class="form-group">
                        <label for="tattoo_nachname">Nachname</label>
                        <input id="tattoo_nachname" type="text" name="nachname" value="{{ old('nachname') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="tattoo_email">E-Mail</label>
                        <input id="tattoo_email" type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="tattoo_telefon">Telefonnummer *</label>
                        <input id="tattoo_telefon" type="tel" name="telefon" value="{{ old('telefon') }}" required>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" name="volljaehrig" id="tattoo_volljaehrig" value="1">
                    <label for="tattoo_volljaehrig">Ich bin 18 Jahre oder älter</label>
                </div>

                <hr class="trennlinie">

                <div class="form-row">
                    <div class="form-group">
                        <label for="tattoo_stil">Stil</label>
                        <select  id="tattoo_stil" name="stil">
                            <option value="">Bitte wählen...</option>
                            <option value="Unentschlossen" {{ old('stil') == 'Unentschlossen' ? 'selected' : '' }}>
                                Unentschlossen</option>
                            <option value="Black & Gray" {{ old('stil') == 'Black & Gray' ? 'selected' : '' }}>Black & Gray
                            </option>
                            <option value="Color" {{ old('stil') == 'Color' ? 'selected' : '' }}>Color</option>
                            <option value="ein bisschen von beidem"
                                {{ old('stil') == 'ein bisschen von beidem' ? 'selected' : '' }}>ein bisschen von beidem
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tattoo_koerperstelle">Körperstelle</label>
                        <input id="tattoo_koerperstelle" type="text" name="koerperstelle" value="{{ old('koerperstelle') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="tattoo_groesse">Größe (Breite x Höhe)</label>
                        <input id="tattoo_groesse" type="text" name="groesse" placeholder="z.B. 10x15 cm" value="{{ old('groesse') }}">
                    </div>
                    <div class="form-group">
                        <label for="tattoo_bis_wann">Bis wann fertig?</label>
                        <input id="tattoo_bis_wann" type="date" name="wunschtermin" min="{{ date('Y-m-d') }}" value="{{ old('wunschtermin') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tattoo_idee">Erzähle uns von deiner Tattoo Idee</label>
                    <textarea id="tattoo_idee" name="nachricht" rows="4">{{ old('nachricht') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="tattoo_bilder">Bilder hochladen (max. 5 Bilder)</label>
                    <input id="tattoo_bilder" type="file" name="bilder[]" multiple accept="image/*" style="padding: 4px;">
                    <small>Bilder werden vor dem Upload automatisch verkleinert.</small>
                </div>
            </fieldset>

            <!-- PIERCING -->
            <fieldset id="tab-piercing" class="tab-content {{ $aktivesThema == 'piercing' ? 'active' : '' }}"
                {{ $aktivesThema != 'piercing' ? 'disabled' : '' }}>
                <h2 style="font-size: 1.2rem; margin-top: 0; margin-bottom: 15px;">Piercing Anfrage</h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="piercing_vorname">Vorname</label>
                        <input id="piercing_vorname" type="text" name="vorname" value="{{ old('vorname') }}">
                    </div>
                    <div class="form-group">
                        <label for="piercing_nachname">Nachname</label>
                        <input id="piercing_nachname" type="text" name="nachname" value="{{ old('nachname') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="piercing_email">E-Mail</label>
                        <input id="piercing_email" type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="piercing_telefon">Telefonnummer *</label>
                        <input id="piercing_telefon" type="tel" name="telefon" value="{{ old('telefon') }}" required>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" name="volljaehrig" id="piercing_volljaehrig" value="1">
                    <label for="piercing_volljaehrig">Ich bin 18 Jahre oder älter</label>
                </div>

                <hr class="trennlinie">

                <div class="form-row">
                    <div class="form-group">
                        <label for="piercing_koerperstelle">Körperstelle</label>
                        <input id="piercing_koerperstelle" type="text" name="koerperstelle" value="{{ old('koerperstelle') }}">
                    </div>
                    <div class="form-group">
                        <label for="piercing_art">Art des Piercings</label>
                        <input id="piercing_art" type="text" name="piercing_art" value="{{ old('piercing_art') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="piercing_bis_wann">Bis wann fertig?</label>
                    <input id="piercing_bis_wann" type="date" name="wunschtermin" min="{{ date('Y-m-d') }}" value="{{ old('wunschtermin') }}">
                </div>

                <div class="form-group">
                    <label for="piercing_idee">Erzähle uns von deiner Piercing Idee</label>
                    <textarea id="piercing_idee" name="nachricht" rows="4">{{ old('nachricht') }}</textarea>
                </div>
            </fieldset>

            <!-- ALLGEMEIN -->
            <fieldset id="tab-allgemein" class="tab-content {{ $aktivesThema == 'allgemein' ? 'active' : '' }}"
                {{ $aktivesThema != 'allgemein' ? 'disabled' : '' }}>
                <h2 style="font-size: 1.2rem; margin-top: 0; margin-bottom: 15px;">Allgemeine Anfrage</h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="allgemein_vorname">Vorname</label>
                        <input id="allgemein_vorname" type="text" name="vorname" value="{{ old('vorname') }}">
                    </div>
                    <div class="form-group">
                        <label for="allgemein_nachname">Nachname</label>
                        <input id="allgemein_nachname" type="text" name="nachname" value="{{ old('nachname') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="allgemein_email">E-Mail</label>
                        <input id="allgemein_email" type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="allgemein_telefon">Telefonnummer *</label>
                        <input id="allgemein_telefon" type="tel" name="telefon" value="{{ old('telefon') }}" required>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" name="volljaehrig" id="allg_volljaehrig" value="1">
                    <label for="allg_volljaehrig">Ich bin 18 Jahre oder älter</label>
                </div>

                <hr class="trennlinie">

                <div class="form-group">
                    <label for="allgemein_nachricht">Deine Nachricht</label>
                    <textarea id="allgemein_nachricht" name="nachricht" rows="4">{{ old('nachricht') }}</textarea>
                </div>
            </fieldset>

            <button type="submit" class="submit-btn">Anfrage absenden</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/browser-image-compression@2.0.2/dist/browser-image-compression.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // TABS LOGIK
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            const themaInput = document.getElementById('input-thema');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // 1. Alle Reiter visuell auf inaktiv setzen
                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabContents.forEach(c => {
                        c.classList.remove('active');
                        c.setAttribute('disabled', 'disabled');
                    });

                    // 2. Den geklickten Reiter aktivieren
                    this.classList.add('active');
                    const targetId = this.getAttribute('data-target');
                    const targetContent = document.getElementById(targetId);

                    targetContent.classList.add('active');
                    targetContent.removeAttribute('disabled');
                    themaInput.value = targetId.replace('tab-', '');
                });
            });

            // BILD-KOMPRIMIERUNG
            const formularMitBildern = document.querySelector('.bilder-formular');
            if (formularMitBildern) {
                formularMitBildern.addEventListener('submit', async function(e) {
                    const aktivesFieldset = formularMitBildern.querySelector('fieldset.active');
                    const fileInput = aktivesFieldset ? aktivesFieldset.querySelector(
                        'input[type="file"]') : null;

                    if (!fileInput || fileInput.files.length === 0) return;

                    e.preventDefault();

                    const submitBtn = formularMitBildern.querySelector('button[type="submit"]');
                    const originalBtnText = submitBtn.innerText;
                    submitBtn.innerText = 'Bilder werden optimiert...';
                    submitBtn.disabled = true;

                    try {
                        const dataTransfer = new DataTransfer();
                        for (let i = 0; i < fileInput.files.length; i++) {
                            const file = fileInput.files[i];
                            const compressedFile = await imageCompression(file, {
                                maxSizeMB: 1,
                                maxWidthOrHeight: 1920,
                                useWebWorker: true
                            });
                            dataTransfer.items.add(new File([compressedFile], file.name, {
                                type: compressedFile.type
                            }));
                        }
                        fileInput.files = dataTransfer.files;
                        formularMitBildern.submit();
                    } catch (error) {
                        console.error(error);
                        alert('Fehler beim Optimieren der Bilder.');
                        submitBtn.innerText = originalBtnText;
                        submitBtn.disabled = false;
                    }
                });
            }
        });
    </script>
@endsection
