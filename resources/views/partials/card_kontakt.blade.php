<div class="div-contact-line">
    <div class="contact-line">
        <a class="icon" href="{{ route('kontakt') }}">
            <x-smartphone />
        </a>
        <div>
            <x-encrypt-phone phone="+49 157 850 672 49" class="linkgeschuetzt" /> <br>
            <div class="nur_text">(nur Textnachrichten in WhatsApp oder SMS)</div>
        </div>
    </div>
    <div class="contact-line">
        <a class="icon" href="{{ route('kontakt') }}">
            <x-umschlag />
        </a>
        <x-encrypt-email email="studio@steelcitynails.de" class="linkgeschuetzt" />
    </div>
    <div class="contact-line">
        <a class="icon" href="{{ route('anfahrt') }}">
            <x-map />
        </a>
        <a class="text-link" href="{{ route('anfahrt') }}" title="Anfahrt">
            <span>Fröbelringpassage 24/25, <br>15890 Eisenhüttenstadt</span>
        </a>
    </div>
    <div class="contact-line">
        <a class="icon" href="{{ route('buchen') }}">
            <x-termin />
        </a>
        <a class="text-link" href="{{ route('buchen') }}" title="Termin anfragen">
            Termin anfragen
        </a>
    </div>
</div>
