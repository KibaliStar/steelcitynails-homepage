<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Nageldesign Studio') - Steelcitynails Eisenhüttenstadt</title>
    <meta name="description" content="@yield('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt - professionelles Nageldesign und faire Preise.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Nageldesign Studio') - Steelcitynails Eisenhüttenstadt">
    <meta property="og:description" content="@yield('description', 'Steelcitynails dein Nagelstudio in Eisenhüttenstadt - professionelles Nageldesign und faire Preise.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#000000">
    @yield('styles')
    <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": ["NailSalon", "LocalBusiness"],
        "name": "Steelcitynails Eisenhüttenstadt",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Eisenhüttenstadt",
            "addressCountry": "DE"
        },
        "url": "{{ url('/') }}"
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const trackingData = {
                website: 'nageldesign',
                url: window.location.pathname + window.location.search,
                referrer: document.referrer || 'direct',
                device: window.innerWidth < 768 ? 'mobile' : (window.innerWidth < 1024 ? 'tablet' : 'desktop')
            };

            const endpoint = 'https://seoexpert.trinkbecherdepot.de/track.php';

            // Daten als URLSearchParams senden (löst keinen CORS-Fehler aus)
            const params = new URLSearchParams(trackingData);

            if (navigator.sendBeacon) {
                navigator.sendBeacon(endpoint, params);
            } else {
                fetch(endpoint, {
                    method: 'POST',
                    body: params
                });
            }
        });
    </script>
    @cookieconsentscripts
</head>

<body>
    <nav>
        @include('partials.nav')
    </nav>
    <header>
        @include('partials.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    @cookieconsentview
    @spamprotectKey
    @spamprotectJs

    @yield('scripts')
    <!-- EIGENES ANALYTICS TRACKING -->


    <!-- Fallback, falls JavaScript deaktiviert ist -->
    <noscript>
        <img src="https://seoexpert.trinkbecherdepot.de/track.php?site=tattoo&amp;url={{ request()->path() }}"
            width="1" height="1" alt="" style="display:none;">
    </noscript>
    <!-- ENDE EIGENES ANALYTICS TRACKING -->
</body>

</html>
