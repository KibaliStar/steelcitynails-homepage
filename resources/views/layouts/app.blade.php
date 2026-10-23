<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Tattoo Studio') - Bumblebee Tattoo Eisenhüttenstadt</title>
    <meta name="description" content="@yield('description', 'Bumblebee Tattoo in Eisenhüttenstadt - professionelle Tattoos, individuelle Beratung und faire Preise.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Tattoo Studio') - Bumblebee Tattoo Eisenhüttenstadt">
    <meta property="og:description" content="@yield('description', 'Bumblebee Tattoo in Eisenhüttenstadt - professionelle Tattoos, individuelle Beratung und faire Preise.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#000000">
    @yield('styles')
    <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": ["TattooParlor", "LocalBusiness"],
        "name": "Bumblebee Tattoo Eisenhüttenstadt",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Eisenhüttenstadt",
            "addressCountry": "DE"
        },
        "url": "{{ url('/') }}"
        }
    </script>
    @cookieconsentscripts
</head>

<body>
    <header>
        @include('partials.header')
    </header>
    <nav>
        @include('partials.nav')
    </nav>
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
</body>

</html>
