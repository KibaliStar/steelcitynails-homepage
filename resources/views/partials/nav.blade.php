{{-- nav.blade.php --}}

<a href="{{ route('home') }}" class="site-logo">
    <x-logo />
</a>
<div class="nav-links">
    Angebot
    Über Mich
    Nageldesign
    Visagistik
    Kontakt
</div>
<div class="nav-buchen-top">
    buchen-top
</div>
<div class="nav-hamburger">
    <!-- 1. Das unsichtbare Kontrollkästchen (muss VOR dem Menü stehen) -->
    <input type="checkbox" id="menu-toggle" class="menu-checkbox" aria-hidden="true">

    <!-- 2. Der Hamburger-Button (jetzt ein Label) -->
    <label for="menu-toggle" class="hamburger-btn" aria-label="Menü öffnen">
        <svg class="icon-navmenu" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </label>

    <!-- 3. Das ganzseitige Overlay-Menü -->
    <div class="mobile-menu-overlay">
        <!-- Kopfbereich mit Logo und Schließen-Button (jetzt auch ein Label) -->
        <div class="mobile-menu-header">
            <a href="{{ route('home') }}" class="site-logo">
                <x-logo />
            </a>
            <!-- Das X zum Schließen -->
            <label for="menu-toggle" class="hamburger-btn" aria-label="Menü schließen">
                <svg class="icon-navmenu" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </label>
        </div>

        <!-- Die Links -->
        <div class="mobile-menu-links">
            <a href="{{ route('home') }}">Startseite</a>
            <a href="{{ route('galerie') }}">Galerie</a>
            <a href="{{ route('studio') }}">Studio</a>
            <a href="{{ route('anfrage') }}">Termin buchen</a>
            <a href="{{ route('kontakt') }}">Kontakt</a>
        </div>
    </div>
</div>
