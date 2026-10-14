<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
    @yield('styles')
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
</body>

</html>
