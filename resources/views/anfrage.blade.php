@extends('layouts.app')

@section('title', 'Anfrage / Kontaktformular')

@section('styles')
    <style>
        .anfrageformular { margin: 2rem 0; }
        
        .tabs-nav {
            display: flex;
            border-bottom: 2px solid var(--color-border);
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
            margin-bottom: -2px;
        }

        .tab-btn.active {
            color: var(--color-text-studio-name);
            border-color: var(--color-border);
            background: var(--color-faqfieldset);
        }

        .tab-content {
            display: none;
            padding: 20px;
            border: 2px solid var(--color-border);
            border-top: none;
            border-radius: 0 0 8px 8px;
            background: var(--color-faqfieldset);
        }

        .tab-content.active { display: block; }

        /* Formular Styles */
        .form-group { margin-bottom: 15px; display: flex; flex-direction: column; }
        .form-group label { font-weight: bold; margin-bottom: 5px; font-size: 0.9rem; }
        .form-group input, .form-group select, .form-group textarea {
            padding: 10px;
            border: 1px solid var(--color-border);
            border-radius: 4px;
            font-family: inherit;
        }
        .form-row { display: flex; gap: 15px; }
        .form-row .form-group { flex: 1; }
        
        .checkbox-group {
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }
        .checkbox-group label { margin-bottom: 0; font-weight: normal; }
        
        .submit-btn {
            background: var(--color-text-link);
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 1.1rem;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }
        .erfolgsmeldung {
            background: #d4edda; color: #155724; padding: 15px;
            border-radius: 4px; margin-bottom: 20px; border: 1px solid #c3e6cb;
        }
        .fehlermeldung {
            background: #f8d7da; color: #721c24; padding: 15px;
            border-radius: 4px; margin-bottom: 20px; border: 1px solid #f5c6cb;
        }
        fieldset.tab-content { border: 2px solid var(--color-border); border-top: none; margin: 0; }
        fieldset.tab-content legend { display: none; }
        .pflicht-hinweis { font-size: 0.85rem; color: #666; margin-bottom: 15px; }
    </style>
@endsection

@section('content')
    <h1>Kontaktformular</h1>
    <p>Bitte wähle den Bereich aus, für den du eine Anfrage stellen möchtest.</p>

    @if(session('success'))
        <div class="erfolgsmeldung">{{ session('success') }}</div>
    @endif

    {{-- Fehler anzeigen, falls die Validierung fehlschlägt --}}
    @if($errors->any())
        <div class="fehlermeldung">
            <ul>
                @foreach($errors->all() as $error)
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

    <div class="anfrageformular">
        <!-- Reiter-Buttons -->
        <div class="tabs-nav">
            <button type="button" class="tab-btn {{ $aktivesThema == 'tattoo' ? 'active' : '' }}" data-target="tab-tattoo">Tattoo</button>
            <button type="button" class="tab-btn {{ $aktivesThema == 'piercing' ? 'active' : '' }}" data-target="tab-piercing">Piercing</button>
            <button type="button" class="tab-btn {{ $aktivesThema == 'allgemein' ? 'active' : '' }}" data-target="tab-allgemein">Allgemein</button>
        </div>

        <!-- EIN EINZIGES FORMULAR -->
        <form action="{{ route('kontakt.senden') }}" method="POST" enctype="multipart/form-data" class="bilder-formular">
            @csrf
            <input type="hidden" name="thema" id="input-thema" value="{{ $aktivesThema }}">

            <p class="pflicht-hinweis">Mit * markierte Felder sind Pflichtfelder. Alle anderen Angaben helfen uns, deine Anfrage besser zu bearbeiten.</p>

            <!-- TATTOO -->
            <fieldset id="tab-tattoo" class="tab-content {{ $aktivesThema == 'tattoo' ? 'active' : '' }}" {{ $aktivesThema != 'tattoo' ? 'disabled' : '' }}>
                <h2>Tattoo Anfrage</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Vorname</label>
                        <input type="text" name="vorname" value="{{ old('vorname') }}">
                    </div>
                    <div class="form-group">
                        <label>Nachname</label>
                        <input type="text" name="nachname" value="{{ old('nachname') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Telefonnummer *</label>
                        <input type="tel" name="telefon" value="{{ old('telefon') }}" required>
                    </div>
                </div>
                
                <div class="form-group checkbox-group">
                    <input type="checkbox" name="volljaehrig" id="tattoo_volljaehrig" value="1">
                    <label for="tattoo_volljaehrig">Ich bin 18 Jahre oder älter</label>
                </div>

                <hr style="margin: 20px 0; border: 0; border-top: 1px solid #ccc;">

                <div class="form-row">
                    <div class="form-group">
                        <label>Stil</label>
                        <select name="stil">
                            <option value="">Bitte wählen...</option>
                            <option value="Unentschlossen" {{ old('stil') == 'Unentschlossen' ? 'selected' : '' }}>Unentschlossen</option>
                            <option value="Black & Gray" {{ old('stil') == 'Black & Gray' ? 'selected' : '' }}>Black & Gray</option>
                            <option value="Color" {{ old('stil') == 'Color' ? 'selected' : '' }}>Color</option>
                            <option value="ein bisschen von beidem" {{ old('stil') == 'ein bisschen von beidem' ? 'selected' : '' }}>ein bisschen von beidem</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Körperstelle</label>
                        <input type="text" name="koerperstelle" value="{{ old('koerperstelle') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Größe (Breite x Höhe)</label>
                        <input type="text" name="groesse" placeholder="z.B. 10x15 cm" value="{{ old('groesse') }}">
                    </div>
                    <div class="form-group">
                        <label>Bis wann fertig?</label>
                        <input type="date" name="wunschtermin" value="{{ old('wunschtermin') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Erzähle uns von deiner Tattoo Idee</label>
                    <textarea name="nachricht" rows="5">{{ old('nachricht') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Bilder hochladen (max. 5 Bilder)</label>
                    <input type="file" name="bilder[]" multiple accept="image/*">
                    <small style="color: #666;">Bilder werden vor dem Upload automatisch verkleinert.</small>
                </div>
            </fieldset>

            <!-- PIERCING -->
            <fieldset id="tab-piercing" class="tab-content {{ $aktivesThema == 'piercing' ? 'active' : '' }}" {{ $aktivesThema != 'piercing' ? 'disabled' : '' }}>
                <h2>Piercing Anfrage</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Vorname</label>
                        <input type="text" name="vorname" value="{{ old('vorname') }}">
                    </div>
                    <div class="form-group">
                        <label>Nachname</label>
                        <input type="text" name="nachname" value="{{ old('nachname') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Telefonnummer *</label>
                        <input type="tel" name="telefon" value="{{ old('telefon') }}" required>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" name="volljaehrig" id="piercing_volljaehrig" value="1">
                    <label for="piercing_volljaehrig">Ich bin 18 Jahre oder älter</label>
                </div>

                <hr style="margin: 20px 0; border: 0; border-top: 1px solid #ccc;">

                <div class="form-row">
                    <div class="form-group">
                        <label>Körperstelle</label>
                        <input type="text" name="koerperstelle" value="{{ old('koerperstelle') }}">
                    </div>
                    <div class="form-group">
                        <label>Art des Piercings</label>
                        <input type="text" name="piercing_art" value="{{ old('piercing_art') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Bis wann fertig?</label>
                    <input type="date" name="wunschtermin" value="{{ old('wunschtermin') }}">
                </div>

                <div class="form-group">
                    <label>Erzähle uns von deiner Piercing Idee</label>
                    <textarea name="nachricht" rows="5">{{ old('nachricht') }}</textarea>
                </div>
            </fieldset>

            <!-- ALLGEMEIN -->
            <fieldset id="tab-allgemein" class="tab-content {{ $aktivesThema == 'allgemein' ? 'active' : '' }}" {{ $aktivesThema != 'allgemein' ? 'disabled' : '' }}>
                <h2>Allgemeine Anfrage</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Vorname</label>
                        <input type="text" name="vorname" value="{{ old('vorname') }}">
                    </div>
                    <div class="form-group">
                        <label>Nachname</label>
                        <input type="text" name="nachname" value="{{ old('nachname') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Telefonnummer *</label>
                        <input type="tel" name="telefon" value="{{ old('telefon') }}" required>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" name="volljaehrig" id="allg_volljaehrig" value="1">
                    <label for="allg_volljaehrig">Ich bin 18 Jahre oder älter</label>
                </div>

                <hr style="margin: 20px 0; border: 0; border-top: 1px solid #ccc;">

                <div class="form-group">
                    <label>Deine Nachricht</label>
                    <textarea name="nachricht" rows="5">{{ old('nachricht') }}</textarea>
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
                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabContents.forEach(c => {
                        c.classList.remove('active');
                        c.setAttribute('disabled', 'disabled');
                    });

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
                    const fileInput = aktivesFieldset ? aktivesFieldset.querySelector('input[type="file"]') : null;
                    
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
                            const compressedFile = await imageCompression(file, { maxSizeMB: 1, maxWidthOrHeight: 1920, useWebWorker: true });
                            dataTransfer.items.add(new File([compressedFile], file.name, { type: compressedFile.type }));
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