@extends('layouts.app')

@section('title', 'Galerie')

@section('description',
    'Tattoo und Piercing in Eisenhüttenstadt, hier findest du eine Galerie mit ausgewählten Arbeiten')

@section('styles')
    <style>
        .card-content-image {
            /* background-color: rgb(0, 0, 0, 0.5); */
            padding: 5px;
            text-align: center;
            font-size: 0.8rem;
            border: 2px solid var(--primary-color);
            border-top: none;
            border-radius: 0 0 var(--border-radius) var(--border-radius);
        }

        .card-content-image img {
            width: 100%;
            height: auto;
        }

        /* ---- grid ---- */
        .grid {
            max-width: 1800px;
            margin: 3px;
        }

        /* clearfix */
        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        .grid-item {
            width: 295px;
            float: left;
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('content')
    <h1>Galerie</h1>

    @php
        // JSON-Datei serverseitig einlesen
        $jsonPfad = public_path('galeriebilder.json');
        $bilder = [];

        if (file_exists($jsonPfad)) {
            $jsonInhalt = file_get_contents($jsonPfad);
            $alleBilder = json_decode($jsonInhalt, true) ?? [];

            // Nur Bilder anzeigen, deren hash-Array den gewünschten Hash enthält
            $gewuenschterHash = 'tattoo';
            $bilder = array_filter($alleBilder, function ($bild) use ($gewuenschterHash) {
                return isset($bild['hash']) &&
                    is_array($bild['hash']) &&
                    in_array($gewuenschterHash, $bild['hash'], true);
            });
        }
    @endphp

    <div class="grid" id="galeriegrid" data-hash="tattoo">
        {{-- <div class="grid-item">
            <div class="card-content-image">
                <img src="galerieimages/frog.png" alt="Frosch Bild" />
                Frosch
            </div>
        </div>

        <div class="grid-item">
            <div class="card-content-image">
                <img src="galerieimages/baer.png" alt="Bär Bild" />
                Bär
            </div>
        </div> --}}
        @forelse ($bilder as $bild)
            <div class="grid-item">
                <div class="card-content-image">
                    <img src="{{ asset($bild['src']) }}" alt="{{ $bild['alt'] }}" />
                    {{ $bild['alt'] }}
                </div>
            </div>
        @empty
            <p>Keine Bilder für diesen Bereich gefunden.</p>
        @endforelse
    </div>

    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <script>
        window.addEventListener('load', function() {
            var elem = document.querySelector('.grid');
            var msnry = new Masonry(elem, {
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });
        });
    </script>
@endsection
