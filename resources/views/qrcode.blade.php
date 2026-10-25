@extends('layouts.app')

@section('title', 'QR Code')

@section('description', 'Hier finden Sie den QR Code zur Webpräsens von Steelcitynails Eisenhüttenstadt')

@section('styles')
    <style>
        .qr {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: var(--contentWidth);
            margin: 0 auto;

            picture {
                max-width: 80%;
                height: auto;
            }

            svg {
                max-width: 80%;
                height: auto;
            }
        }
    </style>
@endsection

@section('content')

    <h1>QR Code</h1>

    <div class="qr">
        {{-- <picture>
            <source srcset="/images/steelcitynails_qr.avif" type="image/avif">
            <img src="/images/steelcitynails_qr.png" alt="QR-Code Steelcitynails">
        </picture> --}}
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1024" height="1079"
            viewBox="0 0 1024 1079">
            <rect x="0" y="0" width="1024" height="1079" fill="#FFFFFF" rx="0" />
            <g transform="translate(0,0)">
                <defs>
                    <clipPath id="clip-path-background-color-39">
                        <rect x="0" y="0" width="1024" height="1024" />
                    </clipPath>
                    <clipPath id="clip-path-dot-color-39">
                        <rect x="332" y="12" width="40" height="40" transform="rotate(0,352,32)" />
                        <rect x="412" y="12" width="40" height="40" transform="rotate(0,432,32)" />
                        <rect x="452" y="12" width="40" height="40" transform="rotate(0,472,32)" />
                        <rect x="532" y="12" width="40" height="40" transform="rotate(0,552,32)" />
                        <rect x="332" y="52" width="40" height="40" transform="rotate(0,352,72)" />
                        <rect x="372" y="52" width="40" height="40" transform="rotate(0,392,72)" />
                        <rect x="492" y="52" width="40" height="40" transform="rotate(0,512,72)" />
                        <rect x="572" y="52" width="40" height="40" transform="rotate(0,592,72)" />
                        <rect x="332" y="92" width="40" height="40" transform="rotate(0,352,112)" />
                        <rect x="532" y="92" width="40" height="40" transform="rotate(0,552,112)" />
                        <rect x="572" y="92" width="40" height="40" transform="rotate(0,592,112)" />
                        <rect x="612" y="92" width="40" height="40" transform="rotate(0,632,112)" />
                        <rect x="372" y="132" width="40" height="40" transform="rotate(0,392,152)" />
                        <rect x="412" y="132" width="40" height="40" transform="rotate(0,432,152)" />
                        <rect x="452" y="132" width="40" height="40" transform="rotate(0,472,152)" />
                        <rect x="492" y="132" width="40" height="40" transform="rotate(0,512,152)" />
                        <rect x="532" y="132" width="40" height="40" transform="rotate(0,552,152)" />
                        <rect x="572" y="132" width="40" height="40" transform="rotate(0,592,152)" />
                        <rect x="612" y="132" width="40" height="40" transform="rotate(0,632,152)" />
                        <rect x="652" y="132" width="40" height="40" transform="rotate(0,672,152)" />
                        <rect x="332" y="172" width="40" height="40" transform="rotate(0,352,192)" />
                        <rect x="452" y="172" width="40" height="40" transform="rotate(0,472,192)" />
                        <rect x="532" y="172" width="40" height="40" transform="rotate(0,552,192)" />
                        <rect x="572" y="172" width="40" height="40" transform="rotate(0,592,192)" />
                        <rect x="652" y="172" width="40" height="40" transform="rotate(0,672,192)" />
                        <rect x="372" y="212" width="40" height="40" transform="rotate(0,392,232)" />
                        <rect x="412" y="212" width="40" height="40" transform="rotate(0,432,232)" />
                        <rect x="532" y="212" width="40" height="40" transform="rotate(0,552,232)" />
                        <rect x="572" y="212" width="40" height="40" transform="rotate(0,592,232)" />
                        <rect x="332" y="252" width="40" height="40" transform="rotate(0,352,272)" />
                        <rect x="412" y="252" width="40" height="40" transform="rotate(0,432,272)" />
                        <rect x="492" y="252" width="40" height="40" transform="rotate(0,512,272)" />
                        <rect x="572" y="252" width="40" height="40" transform="rotate(0,592,272)" />
                        <rect x="652" y="252" width="40" height="40" transform="rotate(0,672,272)" />
                        <rect x="412" y="292" width="40" height="40" transform="rotate(0,432,312)" />
                        <rect x="452" y="292" width="40" height="40" transform="rotate(0,472,312)" />
                        <rect x="492" y="292" width="40" height="40" transform="rotate(0,512,312)" />
                        <rect x="532" y="292" width="40" height="40" transform="rotate(0,552,312)" />
                        <rect x="572" y="292" width="40" height="40" transform="rotate(0,592,312)" />
                        <rect x="12" y="332" width="40" height="40" transform="rotate(0,32,352)" />
                        <rect x="132" y="332" width="40" height="40" transform="rotate(0,152,352)" />
                        <rect x="172" y="332" width="40" height="40" transform="rotate(0,192,352)" />
                        <rect x="212" y="332" width="40" height="40" transform="rotate(0,232,352)" />
                        <rect x="252" y="332" width="40" height="40" transform="rotate(0,272,352)" />
                        <rect x="292" y="332" width="40" height="40" transform="rotate(0,312,352)" />
                        <rect x="332" y="332" width="40" height="40" transform="rotate(0,352,352)" />
                        <rect x="372" y="332" width="40" height="40" transform="rotate(0,392,352)" />
                        <rect x="572" y="332" width="40" height="40" transform="rotate(0,592,352)" />
                        <rect x="652" y="332" width="40" height="40" transform="rotate(0,672,352)" />
                        <rect x="692" y="332" width="40" height="40" transform="rotate(0,712,352)" />
                        <rect x="812" y="332" width="40" height="40" transform="rotate(0,832,352)" />
                        <rect x="892" y="332" width="40" height="40" transform="rotate(0,912,352)" />
                        <rect x="932" y="332" width="40" height="40" transform="rotate(0,952,352)" />
                        <rect x="972" y="332" width="40" height="40" transform="rotate(0,992,352)" />
                        <rect x="92" y="372" width="40" height="40" transform="rotate(0,112,392)" />
                        <rect x="212" y="372" width="40" height="40" transform="rotate(0,232,392)" />
                        <rect x="292" y="372" width="40" height="40" transform="rotate(0,312,392)" />
                        <rect x="372" y="372" width="40" height="40" transform="rotate(0,392,392)" />
                        <rect x="492" y="372" width="40" height="40" transform="rotate(0,512,392)" />
                        <rect x="572" y="372" width="40" height="40" transform="rotate(0,592,392)" />
                        <rect x="612" y="372" width="40" height="40" transform="rotate(0,632,392)" />
                        <rect x="772" y="372" width="40" height="40" transform="rotate(0,792,392)" />
                        <rect x="812" y="372" width="40" height="40" transform="rotate(0,832,392)" />
                        <rect x="852" y="372" width="40" height="40" transform="rotate(0,872,392)" />
                        <rect x="892" y="372" width="40" height="40" transform="rotate(0,912,392)" />
                        <rect x="932" y="372" width="40" height="40" transform="rotate(0,952,392)" />
                        <rect x="92" y="412" width="40" height="40" transform="rotate(0,112,432)" />
                        <rect x="132" y="412" width="40" height="40" transform="rotate(0,152,432)" />
                        <rect x="172" y="412" width="40" height="40" transform="rotate(0,192,432)" />
                        <rect x="212" y="412" width="40" height="40" transform="rotate(0,232,432)" />
                        <rect x="252" y="412" width="40" height="40" transform="rotate(0,272,432)" />
                        <rect x="292" y="412" width="40" height="40" transform="rotate(0,312,432)" />
                        <rect x="372" y="412" width="40" height="40" transform="rotate(0,392,432)" />
                        <rect x="412" y="412" width="40" height="40" transform="rotate(0,432,432)" />
                        <rect x="452" y="412" width="40" height="40" transform="rotate(0,472,432)" />
                        <rect x="612" y="412" width="40" height="40" transform="rotate(0,632,432)" />
                        <rect x="652" y="412" width="40" height="40" transform="rotate(0,672,432)" />
                        <rect x="692" y="412" width="40" height="40" transform="rotate(0,712,432)" />
                        <rect x="732" y="412" width="40" height="40" transform="rotate(0,752,432)" />
                        <rect x="812" y="412" width="40" height="40" transform="rotate(0,832,432)" />
                        <rect x="892" y="412" width="40" height="40" transform="rotate(0,912,432)" />
                        <rect x="972" y="412" width="40" height="40" transform="rotate(0,992,432)" />
                        <rect x="52" y="452" width="40" height="40" transform="rotate(0,72,472)" />
                        <rect x="92" y="452" width="40" height="40" transform="rotate(0,112,472)" />
                        <rect x="292" y="452" width="40" height="40" transform="rotate(0,312,472)" />
                        <rect x="332" y="452" width="40" height="40" transform="rotate(0,352,472)" />
                        <rect x="372" y="452" width="40" height="40" transform="rotate(0,392,472)" />
                        <rect x="452" y="452" width="40" height="40" transform="rotate(0,472,472)" />
                        <rect x="492" y="452" width="40" height="40" transform="rotate(0,512,472)" />
                        <rect x="652" y="452" width="40" height="40" transform="rotate(0,672,472)" />
                        <rect x="772" y="452" width="40" height="40" transform="rotate(0,792,472)" />
                        <rect x="812" y="452" width="40" height="40" transform="rotate(0,832,472)" />
                        <rect x="892" y="452" width="40" height="40" transform="rotate(0,912,472)" />
                        <rect x="12" y="492" width="40" height="40" transform="rotate(0,32,512)" />
                        <rect x="92" y="492" width="40" height="40" transform="rotate(0,112,512)" />
                        <rect x="132" y="492" width="40" height="40" transform="rotate(0,152,512)" />
                        <rect x="172" y="492" width="40" height="40" transform="rotate(0,192,512)" />
                        <rect x="212" y="492" width="40" height="40" transform="rotate(0,232,512)" />
                        <rect x="252" y="492" width="40" height="40" transform="rotate(0,272,512)" />
                        <rect x="292" y="492" width="40" height="40" transform="rotate(0,312,512)" />
                        <rect x="372" y="492" width="40" height="40" transform="rotate(0,392,512)" />
                        <rect x="452" y="492" width="40" height="40" transform="rotate(0,472,512)" />
                        <rect x="612" y="492" width="40" height="40" transform="rotate(0,632,512)" />
                        <rect x="652" y="492" width="40" height="40" transform="rotate(0,672,512)" />
                        <rect x="732" y="492" width="40" height="40" transform="rotate(0,752,512)" />
                        <rect x="772" y="492" width="40" height="40" transform="rotate(0,792,512)" />
                        <rect x="852" y="492" width="40" height="40" transform="rotate(0,872,512)" />
                        <rect x="972" y="492" width="40" height="40" transform="rotate(0,992,512)" />
                        <rect x="12" y="532" width="40" height="40" transform="rotate(0,32,552)" />
                        <rect x="52" y="532" width="40" height="40" transform="rotate(0,72,552)" />
                        <rect x="92" y="532" width="40" height="40" transform="rotate(0,112,552)" />
                        <rect x="132" y="532" width="40" height="40" transform="rotate(0,152,552)" />
                        <rect x="292" y="532" width="40" height="40" transform="rotate(0,312,552)" />
                        <rect x="412" y="532" width="40" height="40" transform="rotate(0,432,552)" />
                        <rect x="492" y="532" width="40" height="40" transform="rotate(0,512,552)" />
                        <rect x="532" y="532" width="40" height="40" transform="rotate(0,552,552)" />
                        <rect x="572" y="532" width="40" height="40" transform="rotate(0,592,552)" />
                        <rect x="612" y="532" width="40" height="40" transform="rotate(0,632,552)" />
                        <rect x="652" y="532" width="40" height="40" transform="rotate(0,672,552)" />
                        <rect x="812" y="532" width="40" height="40" transform="rotate(0,832,552)" />
                        <rect x="852" y="532" width="40" height="40" transform="rotate(0,872,552)" />
                        <rect x="892" y="532" width="40" height="40" transform="rotate(0,912,552)" />
                        <rect x="932" y="532" width="40" height="40" transform="rotate(0,952,552)" />
                        <rect x="12" y="572" width="40" height="40" transform="rotate(0,32,592)" />
                        <rect x="52" y="572" width="40" height="40" transform="rotate(0,72,592)" />
                        <rect x="92" y="572" width="40" height="40" transform="rotate(0,112,592)" />
                        <rect x="132" y="572" width="40" height="40" transform="rotate(0,152,592)" />
                        <rect x="172" y="572" width="40" height="40" transform="rotate(0,192,592)" />
                        <rect x="252" y="572" width="40" height="40" transform="rotate(0,272,592)" />
                        <rect x="292" y="572" width="40" height="40" transform="rotate(0,312,592)" />
                        <rect x="532" y="572" width="40" height="40" transform="rotate(0,552,592)" />
                        <rect x="572" y="572" width="40" height="40" transform="rotate(0,592,592)" />
                        <rect x="612" y="572" width="40" height="40" transform="rotate(0,632,592)" />
                        <rect x="652" y="572" width="40" height="40" transform="rotate(0,672,592)" />
                        <rect x="852" y="572" width="40" height="40" transform="rotate(0,872,592)" />
                        <rect x="932" y="572" width="40" height="40" transform="rotate(0,952,592)" />
                        <rect x="972" y="572" width="40" height="40" transform="rotate(0,992,592)" />
                        <rect x="12" y="612" width="40" height="40" transform="rotate(0,32,632)" />
                        <rect x="132" y="612" width="40" height="40" transform="rotate(0,152,632)" />
                        <rect x="212" y="612" width="40" height="40" transform="rotate(0,232,632)" />
                        <rect x="412" y="612" width="40" height="40" transform="rotate(0,432,632)" />
                        <rect x="492" y="612" width="40" height="40" transform="rotate(0,512,632)" />
                        <rect x="612" y="612" width="40" height="40" transform="rotate(0,632,632)" />
                        <rect x="692" y="612" width="40" height="40" transform="rotate(0,712,632)" />
                        <rect x="732" y="612" width="40" height="40" transform="rotate(0,752,632)" />
                        <rect x="772" y="612" width="40" height="40" transform="rotate(0,792,632)" />
                        <rect x="812" y="612" width="40" height="40" transform="rotate(0,832,632)" />
                        <rect x="852" y="612" width="40" height="40" transform="rotate(0,872,632)" />
                        <rect x="892" y="612" width="40" height="40" transform="rotate(0,912,632)" />
                        <rect x="932" y="612" width="40" height="40" transform="rotate(0,952,632)" />
                        <rect x="12" y="652" width="40" height="40" transform="rotate(0,32,672)" />
                        <rect x="92" y="652" width="40" height="40" transform="rotate(0,112,672)" />
                        <rect x="172" y="652" width="40" height="40" transform="rotate(0,192,672)" />
                        <rect x="212" y="652" width="40" height="40" transform="rotate(0,232,672)" />
                        <rect x="252" y="652" width="40" height="40" transform="rotate(0,272,672)" />
                        <rect x="292" y="652" width="40" height="40" transform="rotate(0,312,672)" />
                        <rect x="332" y="652" width="40" height="40" transform="rotate(0,352,672)" />
                        <rect x="372" y="652" width="40" height="40" transform="rotate(0,392,672)" />
                        <rect x="452" y="652" width="40" height="40" transform="rotate(0,472,672)" />
                        <rect x="492" y="652" width="40" height="40" transform="rotate(0,512,672)" />
                        <rect x="532" y="652" width="40" height="40" transform="rotate(0,552,672)" />
                        <rect x="572" y="652" width="40" height="40" transform="rotate(0,592,672)" />
                        <rect x="652" y="652" width="40" height="40" transform="rotate(0,672,672)" />
                        <rect x="692" y="652" width="40" height="40" transform="rotate(0,712,672)" />
                        <rect x="732" y="652" width="40" height="40" transform="rotate(0,752,672)" />
                        <rect x="772" y="652" width="40" height="40" transform="rotate(0,792,672)" />
                        <rect x="812" y="652" width="40" height="40" transform="rotate(0,832,672)" />
                        <rect x="892" y="652" width="40" height="40" transform="rotate(0,912,672)" />
                        <rect x="972" y="652" width="40" height="40" transform="rotate(0,992,672)" />
                        <rect x="332" y="692" width="40" height="40" transform="rotate(0,352,712)" />
                        <rect x="412" y="692" width="40" height="40" transform="rotate(0,432,712)" />
                        <rect x="452" y="692" width="40" height="40" transform="rotate(0,472,712)" />
                        <rect x="532" y="692" width="40" height="40" transform="rotate(0,552,712)" />
                        <rect x="652" y="692" width="40" height="40" transform="rotate(0,672,712)" />
                        <rect x="812" y="692" width="40" height="40" transform="rotate(0,832,712)" />
                        <rect x="892" y="692" width="40" height="40" transform="rotate(0,912,712)" />
                        <rect x="332" y="732" width="40" height="40" transform="rotate(0,352,752)" />
                        <rect x="372" y="732" width="40" height="40" transform="rotate(0,392,752)" />
                        <rect x="412" y="732" width="40" height="40" transform="rotate(0,432,752)" />
                        <rect x="492" y="732" width="40" height="40" transform="rotate(0,512,752)" />
                        <rect x="652" y="732" width="40" height="40" transform="rotate(0,672,752)" />
                        <rect x="732" y="732" width="40" height="40" transform="rotate(0,752,752)" />
                        <rect x="812" y="732" width="40" height="40" transform="rotate(0,832,752)" />
                        <rect x="972" y="732" width="40" height="40" transform="rotate(0,992,752)" />
                        <rect x="332" y="772" width="40" height="40" transform="rotate(0,352,792)" />
                        <rect x="452" y="772" width="40" height="40" transform="rotate(0,472,792)" />
                        <rect x="532" y="772" width="40" height="40" transform="rotate(0,552,792)" />
                        <rect x="612" y="772" width="40" height="40" transform="rotate(0,632,792)" />
                        <rect x="652" y="772" width="40" height="40" transform="rotate(0,672,792)" />
                        <rect x="812" y="772" width="40" height="40" transform="rotate(0,832,792)" />
                        <rect x="852" y="772" width="40" height="40" transform="rotate(0,872,792)" />
                        <rect x="972" y="772" width="40" height="40" transform="rotate(0,992,792)" />
                        <rect x="332" y="812" width="40" height="40" transform="rotate(0,352,832)" />
                        <rect x="372" y="812" width="40" height="40" transform="rotate(0,392,832)" />
                        <rect x="452" y="812" width="40" height="40" transform="rotate(0,472,832)" />
                        <rect x="492" y="812" width="40" height="40" transform="rotate(0,512,832)" />
                        <rect x="572" y="812" width="40" height="40" transform="rotate(0,592,832)" />
                        <rect x="612" y="812" width="40" height="40" transform="rotate(0,632,832)" />
                        <rect x="652" y="812" width="40" height="40" transform="rotate(0,672,832)" />
                        <rect x="692" y="812" width="40" height="40" transform="rotate(0,712,832)" />
                        <rect x="732" y="812" width="40" height="40" transform="rotate(0,752,832)" />
                        <rect x="772" y="812" width="40" height="40" transform="rotate(0,792,832)" />
                        <rect x="812" y="812" width="40" height="40" transform="rotate(0,832,832)" />
                        <rect x="332" y="852" width="40" height="40" transform="rotate(0,352,872)" />
                        <rect x="412" y="852" width="40" height="40" transform="rotate(0,432,872)" />
                        <rect x="492" y="852" width="40" height="40" transform="rotate(0,512,872)" />
                        <rect x="612" y="852" width="40" height="40" transform="rotate(0,632,872)" />
                        <rect x="652" y="852" width="40" height="40" transform="rotate(0,672,872)" />
                        <rect x="692" y="852" width="40" height="40" transform="rotate(0,712,872)" />
                        <rect x="732" y="852" width="40" height="40" transform="rotate(0,752,872)" />
                        <rect x="852" y="852" width="40" height="40" transform="rotate(0,872,872)" />
                        <rect x="892" y="852" width="40" height="40" transform="rotate(0,912,872)" />
                        <rect x="932" y="852" width="40" height="40" transform="rotate(0,952,872)" />
                        <rect x="972" y="852" width="40" height="40" transform="rotate(0,992,872)" />
                        <rect x="412" y="892" width="40" height="40" transform="rotate(0,432,912)" />
                        <rect x="452" y="892" width="40" height="40" transform="rotate(0,472,912)" />
                        <rect x="492" y="892" width="40" height="40" transform="rotate(0,512,912)" />
                        <rect x="572" y="892" width="40" height="40" transform="rotate(0,592,912)" />
                        <rect x="612" y="892" width="40" height="40" transform="rotate(0,632,912)" />
                        <rect x="652" y="892" width="40" height="40" transform="rotate(0,672,912)" />
                        <rect x="772" y="892" width="40" height="40" transform="rotate(0,792,912)" />
                        <rect x="812" y="892" width="40" height="40" transform="rotate(0,832,912)" />
                        <rect x="852" y="892" width="40" height="40" transform="rotate(0,872,912)" />
                        <rect x="932" y="892" width="40" height="40" transform="rotate(0,952,912)" />
                        <rect x="972" y="892" width="40" height="40" transform="rotate(0,992,912)" />
                        <rect x="372" y="932" width="40" height="40" transform="rotate(0,392,952)" />
                        <rect x="492" y="932" width="40" height="40" transform="rotate(0,512,952)" />
                        <rect x="572" y="932" width="40" height="40" transform="rotate(0,592,952)" />
                        <rect x="612" y="932" width="40" height="40" transform="rotate(0,632,952)" />
                        <rect x="732" y="932" width="40" height="40" transform="rotate(0,752,952)" />
                        <rect x="772" y="932" width="40" height="40" transform="rotate(0,792,952)" />
                        <rect x="852" y="932" width="40" height="40" transform="rotate(0,872,952)" />
                        <rect x="892" y="932" width="40" height="40" transform="rotate(0,912,952)" />
                        <rect x="932" y="932" width="40" height="40" transform="rotate(0,952,952)" />
                        <rect x="972" y="932" width="40" height="40" transform="rotate(0,992,952)" />
                        <rect x="332" y="972" width="40" height="40" transform="rotate(0,352,992)" />
                        <rect x="452" y="972" width="40" height="40" transform="rotate(0,472,992)" />
                        <rect x="652" y="972" width="40" height="40" transform="rotate(0,672,992)" />
                        <rect x="692" y="972" width="40" height="40" transform="rotate(0,712,992)" />
                        <rect x="732" y="972" width="40" height="40" transform="rotate(0,752,992)" />
                        <rect x="812" y="972" width="40" height="40" transform="rotate(0,832,992)" />
                        <rect x="852" y="972" width="40" height="40" transform="rotate(0,872,992)" />
                        <rect x="972" y="972" width="40" height="40" transform="rotate(0,992,992)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-square-color-0-0-39">
                        <path clip-rule="evenodd" d="M 12 12v 280h 280v -280zM 52 52h 200v 200h -200z"
                            transform="rotate(0,152,152)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-dot-color-0-0-39">
                        <rect x="92" y="92" width="120" height="120" transform="rotate(0,152,152)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-square-color-1-0-39">
                        <path clip-rule="evenodd" d="M 732 12v 280h 280v -280zM 772 52h 200v 200h -200z"
                            transform="rotate(90,872,152)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-dot-color-1-0-39">
                        <rect x="812" y="92" width="120" height="120" transform="rotate(90,872,152)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-square-color-0-1-39">
                        <path clip-rule="evenodd" d="M 12 732v 280h 280v -280zM 52 772h 200v 200h -200z"
                            transform="rotate(-90,152,872)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-dot-color-0-1-39">
                        <rect x="92" y="812" width="120" height="120" transform="rotate(-90,152,872)" />
                    </clipPath>
                </defs>
                <rect x="0" y="0" height="1024" width="1024" clip-path="url('#clip-path-background-color-39')"
                    fill="#FFFFFF" />
                <rect x="0" y="0" height="1024" width="1024" clip-path="url('#clip-path-dot-color-39')"
                    fill="#000000" />
                <rect x="12" y="12" height="280" width="280"
                    clip-path="url('#clip-path-corners-square-color-0-0-39')" fill="#000000" />
                <rect x="92" y="92" height="120" width="120" clip-path="url('#clip-path-corners-dot-color-0-0-39')"
                    fill="#000000" />
                <rect x="732" y="12" height="280" width="280"
                    clip-path="url('#clip-path-corners-square-color-1-0-39')" fill="#000000" />
                <rect x="812" y="92" height="120" width="120" clip-path="url('#clip-path-corners-dot-color-1-0-39')"
                    fill="#000000" />
                <rect x="12" y="732" height="280" width="280"
                    clip-path="url('#clip-path-corners-square-color-0-1-39')" fill="#000000" />
                <rect x="92" y="812" height="120" width="120" clip-path="url('#clip-path-corners-dot-color-0-1-39')"
                    fill="#000000" />
            </g>
            <rect x="0" y="1024" width="1024" height="55" fill="#FFFFFF" /><text x="1019" y="1074"
                text-anchor="end" fill="#000000" opacity="0.95" font-size="40"
                font-family="Inter,system-ui,sans-serif">www.SteelCityNails.de</text>
        </svg>
    </div>

@endsection
