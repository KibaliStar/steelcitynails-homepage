@extends('layouts.app')

@section('title', 'QR Code')

@section('description', 'Hier finden Sie den QR Code zur Webpräsens von Bumblebee Tattoo Eisenhüttenstadt')

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
            <source srcset="/images/bumblebee_qr.avif" type="image/avif">
            <img src="/images/bumblebee_qr.png" alt="QR-Code Bumblebee Tattoo">
        </picture> --}}
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1024" height="1079"
            viewBox="0 0 1024 1079">
            <rect x="0" y="0" width="1024" height="1079" fill="#FFFFFF" rx="0" />
            <g transform="translate(0,0)">
                <defs>
                    <clipPath id="clip-path-background-color-38">
                        <rect x="0" y="0" width="1024" height="1024" />
                    </clipPath>
                    <clipPath id="clip-path-dot-color-38">
                        <rect x="284" y="4" width="35" height="35" transform="rotate(0,301.5,21.5)" />
                        <rect x="319" y="4" width="35" height="35" transform="rotate(0,336.5,21.5)" />
                        <rect x="389" y="4" width="35" height="35" transform="rotate(0,406.5,21.5)" />
                        <rect x="529" y="4" width="35" height="35" transform="rotate(0,546.5,21.5)" />
                        <rect x="564" y="4" width="35" height="35" transform="rotate(0,581.5,21.5)" />
                        <rect x="634" y="4" width="35" height="35" transform="rotate(0,651.5,21.5)" />
                        <rect x="669" y="4" width="35" height="35" transform="rotate(0,686.5,21.5)" />
                        <rect x="704" y="4" width="35" height="35" transform="rotate(0,721.5,21.5)" />
                        <rect x="284" y="39" width="35" height="35" transform="rotate(0,301.5,56.5)" />
                        <rect x="389" y="39" width="35" height="35" transform="rotate(0,406.5,56.5)" />
                        <rect x="494" y="39" width="35" height="35" transform="rotate(0,511.5,56.5)" />
                        <rect x="529" y="39" width="35" height="35" transform="rotate(0,546.5,56.5)" />
                        <rect x="599" y="39" width="35" height="35" transform="rotate(0,616.5,56.5)" />
                        <rect x="704" y="39" width="35" height="35" transform="rotate(0,721.5,56.5)" />
                        <rect x="459" y="74" width="35" height="35" transform="rotate(0,476.5,91.5)" />
                        <rect x="494" y="74" width="35" height="35" transform="rotate(0,511.5,91.5)" />
                        <rect x="529" y="74" width="35" height="35" transform="rotate(0,546.5,91.5)" />
                        <rect x="634" y="74" width="35" height="35" transform="rotate(0,651.5,91.5)" />
                        <rect x="669" y="74" width="35" height="35" transform="rotate(0,686.5,91.5)" />
                        <rect x="704" y="74" width="35" height="35" transform="rotate(0,721.5,91.5)" />
                        <rect x="284" y="109" width="35" height="35" transform="rotate(0,301.5,126.5)" />
                        <rect x="319" y="109" width="35" height="35" transform="rotate(0,336.5,126.5)" />
                        <rect x="354" y="109" width="35" height="35" transform="rotate(0,371.5,126.5)" />
                        <rect x="424" y="109" width="35" height="35" transform="rotate(0,441.5,126.5)" />
                        <rect x="564" y="109" width="35" height="35" transform="rotate(0,581.5,126.5)" />
                        <rect x="599" y="109" width="35" height="35" transform="rotate(0,616.5,126.5)" />
                        <rect x="704" y="109" width="35" height="35" transform="rotate(0,721.5,126.5)" />
                        <rect x="319" y="144" width="35" height="35" transform="rotate(0,336.5,161.5)" />
                        <rect x="389" y="144" width="35" height="35" transform="rotate(0,406.5,161.5)" />
                        <rect x="459" y="144" width="35" height="35" transform="rotate(0,476.5,161.5)" />
                        <rect x="599" y="144" width="35" height="35" transform="rotate(0,616.5,161.5)" />
                        <rect x="634" y="144" width="35" height="35" transform="rotate(0,651.5,161.5)" />
                        <rect x="669" y="144" width="35" height="35" transform="rotate(0,686.5,161.5)" />
                        <rect x="494" y="179" width="35" height="35" transform="rotate(0,511.5,196.5)" />
                        <rect x="634" y="179" width="35" height="35" transform="rotate(0,651.5,196.5)" />
                        <rect x="669" y="179" width="35" height="35" transform="rotate(0,686.5,196.5)" />
                        <rect x="704" y="179" width="35" height="35" transform="rotate(0,721.5,196.5)" />
                        <rect x="284" y="214" width="35" height="35" transform="rotate(0,301.5,231.5)" />
                        <rect x="354" y="214" width="35" height="35" transform="rotate(0,371.5,231.5)" />
                        <rect x="424" y="214" width="35" height="35" transform="rotate(0,441.5,231.5)" />
                        <rect x="494" y="214" width="35" height="35" transform="rotate(0,511.5,231.5)" />
                        <rect x="564" y="214" width="35" height="35" transform="rotate(0,581.5,231.5)" />
                        <rect x="634" y="214" width="35" height="35" transform="rotate(0,651.5,231.5)" />
                        <rect x="704" y="214" width="35" height="35" transform="rotate(0,721.5,231.5)" />
                        <rect x="284" y="249" width="35" height="35" transform="rotate(0,301.5,266.5)" />
                        <rect x="424" y="249" width="35" height="35" transform="rotate(0,441.5,266.5)" />
                        <rect x="459" y="249" width="35" height="35" transform="rotate(0,476.5,266.5)" />
                        <rect x="494" y="249" width="35" height="35" transform="rotate(0,511.5,266.5)" />
                        <rect x="599" y="249" width="35" height="35" transform="rotate(0,616.5,266.5)" />
                        <rect x="4" y="284" width="35" height="35" transform="rotate(0,21.5,301.5)" />
                        <rect x="74" y="284" width="35" height="35" transform="rotate(0,91.5,301.5)" />
                        <rect x="109" y="284" width="35" height="35" transform="rotate(0,126.5,301.5)" />
                        <rect x="179" y="284" width="35" height="35" transform="rotate(0,196.5,301.5)" />
                        <rect x="214" y="284" width="35" height="35" transform="rotate(0,231.5,301.5)" />
                        <rect x="249" y="284" width="35" height="35" transform="rotate(0,266.5,301.5)" />
                        <rect x="319" y="284" width="35" height="35" transform="rotate(0,336.5,301.5)" />
                        <rect x="389" y="284" width="35" height="35" transform="rotate(0,406.5,301.5)" />
                        <rect x="424" y="284" width="35" height="35" transform="rotate(0,441.5,301.5)" />
                        <rect x="459" y="284" width="35" height="35" transform="rotate(0,476.5,301.5)" />
                        <rect x="494" y="284" width="35" height="35" transform="rotate(0,511.5,301.5)" />
                        <rect x="564" y="284" width="35" height="35" transform="rotate(0,581.5,301.5)" />
                        <rect x="599" y="284" width="35" height="35" transform="rotate(0,616.5,301.5)" />
                        <rect x="634" y="284" width="35" height="35" transform="rotate(0,651.5,301.5)" />
                        <rect x="669" y="284" width="35" height="35" transform="rotate(0,686.5,301.5)" />
                        <rect x="774" y="284" width="35" height="35" transform="rotate(0,791.5,301.5)" />
                        <rect x="879" y="284" width="35" height="35" transform="rotate(0,896.5,301.5)" />
                        <rect x="949" y="284" width="35" height="35" transform="rotate(0,966.5,301.5)" />
                        <rect x="984" y="284" width="35" height="35" transform="rotate(0,1001.5,301.5)" />
                        <rect x="4" y="319" width="35" height="35" transform="rotate(0,21.5,336.5)" />
                        <rect x="39" y="319" width="35" height="35" transform="rotate(0,56.5,336.5)" />
                        <rect x="74" y="319" width="35" height="35" transform="rotate(0,91.5,336.5)" />
                        <rect x="144" y="319" width="35" height="35" transform="rotate(0,161.5,336.5)" />
                        <rect x="179" y="319" width="35" height="35" transform="rotate(0,196.5,336.5)" />
                        <rect x="249" y="319" width="35" height="35" transform="rotate(0,266.5,336.5)" />
                        <rect x="284" y="319" width="35" height="35" transform="rotate(0,301.5,336.5)" />
                        <rect x="319" y="319" width="35" height="35" transform="rotate(0,336.5,336.5)" />
                        <rect x="354" y="319" width="35" height="35" transform="rotate(0,371.5,336.5)" />
                        <rect x="529" y="319" width="35" height="35" transform="rotate(0,546.5,336.5)" />
                        <rect x="564" y="319" width="35" height="35" transform="rotate(0,581.5,336.5)" />
                        <rect x="669" y="319" width="35" height="35" transform="rotate(0,686.5,336.5)" />
                        <rect x="704" y="319" width="35" height="35" transform="rotate(0,721.5,336.5)" />
                        <rect x="739" y="319" width="35" height="35" transform="rotate(0,756.5,336.5)" />
                        <rect x="774" y="319" width="35" height="35" transform="rotate(0,791.5,336.5)" />
                        <rect x="809" y="319" width="35" height="35" transform="rotate(0,826.5,336.5)" />
                        <rect x="844" y="319" width="35" height="35" transform="rotate(0,861.5,336.5)" />
                        <rect x="984" y="319" width="35" height="35" transform="rotate(0,1001.5,336.5)" />
                        <rect x="4" y="354" width="35" height="35" transform="rotate(0,21.5,371.5)" />
                        <rect x="39" y="354" width="35" height="35" transform="rotate(0,56.5,371.5)" />
                        <rect x="109" y="354" width="35" height="35" transform="rotate(0,126.5,371.5)" />
                        <rect x="144" y="354" width="35" height="35" transform="rotate(0,161.5,371.5)" />
                        <rect x="214" y="354" width="35" height="35" transform="rotate(0,231.5,371.5)" />
                        <rect x="249" y="354" width="35" height="35" transform="rotate(0,266.5,371.5)" />
                        <rect x="319" y="354" width="35" height="35" transform="rotate(0,336.5,371.5)" />
                        <rect x="354" y="354" width="35" height="35" transform="rotate(0,371.5,371.5)" />
                        <rect x="424" y="354" width="35" height="35" transform="rotate(0,441.5,371.5)" />
                        <rect x="494" y="354" width="35" height="35" transform="rotate(0,511.5,371.5)" />
                        <rect x="529" y="354" width="35" height="35" transform="rotate(0,546.5,371.5)" />
                        <rect x="599" y="354" width="35" height="35" transform="rotate(0,616.5,371.5)" />
                        <rect x="634" y="354" width="35" height="35" transform="rotate(0,651.5,371.5)" />
                        <rect x="809" y="354" width="35" height="35" transform="rotate(0,826.5,371.5)" />
                        <rect x="844" y="354" width="35" height="35" transform="rotate(0,861.5,371.5)" />
                        <rect x="914" y="354" width="35" height="35" transform="rotate(0,931.5,371.5)" />
                        <rect x="949" y="354" width="35" height="35" transform="rotate(0,966.5,371.5)" />
                        <rect x="144" y="389" width="35" height="35" transform="rotate(0,161.5,406.5)" />
                        <rect x="179" y="389" width="35" height="35" transform="rotate(0,196.5,406.5)" />
                        <rect x="319" y="389" width="35" height="35" transform="rotate(0,336.5,406.5)" />
                        <rect x="354" y="389" width="35" height="35" transform="rotate(0,371.5,406.5)" />
                        <rect x="389" y="389" width="35" height="35" transform="rotate(0,406.5,406.5)" />
                        <rect x="424" y="389" width="35" height="35" transform="rotate(0,441.5,406.5)" />
                        <rect x="459" y="389" width="35" height="35" transform="rotate(0,476.5,406.5)" />
                        <rect x="494" y="389" width="35" height="35" transform="rotate(0,511.5,406.5)" />
                        <rect x="529" y="389" width="35" height="35" transform="rotate(0,546.5,406.5)" />
                        <rect x="669" y="389" width="35" height="35" transform="rotate(0,686.5,406.5)" />
                        <rect x="704" y="389" width="35" height="35" transform="rotate(0,721.5,406.5)" />
                        <rect x="809" y="389" width="35" height="35" transform="rotate(0,826.5,406.5)" />
                        <rect x="844" y="389" width="35" height="35" transform="rotate(0,861.5,406.5)" />
                        <rect x="984" y="389" width="35" height="35" transform="rotate(0,1001.5,406.5)" />
                        <rect x="4" y="424" width="35" height="35" transform="rotate(0,21.5,441.5)" />
                        <rect x="39" y="424" width="35" height="35" transform="rotate(0,56.5,441.5)" />
                        <rect x="74" y="424" width="35" height="35" transform="rotate(0,91.5,441.5)" />
                        <rect x="214" y="424" width="35" height="35" transform="rotate(0,231.5,441.5)" />
                        <rect x="354" y="424" width="35" height="35" transform="rotate(0,371.5,441.5)" />
                        <rect x="389" y="424" width="35" height="35" transform="rotate(0,406.5,441.5)" />
                        <rect x="599" y="424" width="35" height="35" transform="rotate(0,616.5,441.5)" />
                        <rect x="879" y="424" width="35" height="35" transform="rotate(0,896.5,441.5)" />
                        <rect x="914" y="424" width="35" height="35" transform="rotate(0,931.5,441.5)" />
                        <rect x="4" y="459" width="35" height="35" transform="rotate(0,21.5,476.5)" />
                        <rect x="249" y="459" width="35" height="35" transform="rotate(0,266.5,476.5)" />
                        <rect x="284" y="459" width="35" height="35" transform="rotate(0,301.5,476.5)" />
                        <rect x="354" y="459" width="35" height="35" transform="rotate(0,371.5,476.5)" />
                        <rect x="389" y="459" width="35" height="35" transform="rotate(0,406.5,476.5)" />
                        <rect x="459" y="459" width="35" height="35" transform="rotate(0,476.5,476.5)" />
                        <rect x="669" y="459" width="35" height="35" transform="rotate(0,686.5,476.5)" />
                        <rect x="739" y="459" width="35" height="35" transform="rotate(0,756.5,476.5)" />
                        <rect x="774" y="459" width="35" height="35" transform="rotate(0,791.5,476.5)" />
                        <rect x="809" y="459" width="35" height="35" transform="rotate(0,826.5,476.5)" />
                        <rect x="914" y="459" width="35" height="35" transform="rotate(0,931.5,476.5)" />
                        <rect x="949" y="459" width="35" height="35" transform="rotate(0,966.5,476.5)" />
                        <rect x="984" y="459" width="35" height="35" transform="rotate(0,1001.5,476.5)" />
                        <rect x="39" y="494" width="35" height="35" transform="rotate(0,56.5,511.5)" />
                        <rect x="74" y="494" width="35" height="35" transform="rotate(0,91.5,511.5)" />
                        <rect x="109" y="494" width="35" height="35" transform="rotate(0,126.5,511.5)" />
                        <rect x="144" y="494" width="35" height="35" transform="rotate(0,161.5,511.5)" />
                        <rect x="179" y="494" width="35" height="35" transform="rotate(0,196.5,511.5)" />
                        <rect x="214" y="494" width="35" height="35" transform="rotate(0,231.5,511.5)" />
                        <rect x="249" y="494" width="35" height="35" transform="rotate(0,266.5,511.5)" />
                        <rect x="354" y="494" width="35" height="35" transform="rotate(0,371.5,511.5)" />
                        <rect x="494" y="494" width="35" height="35" transform="rotate(0,511.5,511.5)" />
                        <rect x="564" y="494" width="35" height="35" transform="rotate(0,581.5,511.5)" />
                        <rect x="599" y="494" width="35" height="35" transform="rotate(0,616.5,511.5)" />
                        <rect x="634" y="494" width="35" height="35" transform="rotate(0,651.5,511.5)" />
                        <rect x="669" y="494" width="35" height="35" transform="rotate(0,686.5,511.5)" />
                        <rect x="739" y="494" width="35" height="35" transform="rotate(0,756.5,511.5)" />
                        <rect x="774" y="494" width="35" height="35" transform="rotate(0,791.5,511.5)" />
                        <rect x="809" y="494" width="35" height="35" transform="rotate(0,826.5,511.5)" />
                        <rect x="844" y="494" width="35" height="35" transform="rotate(0,861.5,511.5)" />
                        <rect x="914" y="494" width="35" height="35" transform="rotate(0,931.5,511.5)" />
                        <rect x="949" y="494" width="35" height="35" transform="rotate(0,966.5,511.5)" />
                        <rect x="984" y="494" width="35" height="35" transform="rotate(0,1001.5,511.5)" />
                        <rect x="4" y="529" width="35" height="35" transform="rotate(0,21.5,546.5)" />
                        <rect x="39" y="529" width="35" height="35" transform="rotate(0,56.5,546.5)" />
                        <rect x="109" y="529" width="35" height="35" transform="rotate(0,126.5,546.5)" />
                        <rect x="179" y="529" width="35" height="35" transform="rotate(0,196.5,546.5)" />
                        <rect x="284" y="529" width="35" height="35" transform="rotate(0,301.5,546.5)" />
                        <rect x="389" y="529" width="35" height="35" transform="rotate(0,406.5,546.5)" />
                        <rect x="459" y="529" width="35" height="35" transform="rotate(0,476.5,546.5)" />
                        <rect x="669" y="529" width="35" height="35" transform="rotate(0,686.5,546.5)" />
                        <rect x="809" y="529" width="35" height="35" transform="rotate(0,826.5,546.5)" />
                        <rect x="844" y="529" width="35" height="35" transform="rotate(0,861.5,546.5)" />
                        <rect x="949" y="529" width="35" height="35" transform="rotate(0,966.5,546.5)" />
                        <rect x="144" y="564" width="35" height="35" transform="rotate(0,161.5,581.5)" />
                        <rect x="214" y="564" width="35" height="35" transform="rotate(0,231.5,581.5)" />
                        <rect x="284" y="564" width="35" height="35" transform="rotate(0,301.5,581.5)" />
                        <rect x="354" y="564" width="35" height="35" transform="rotate(0,371.5,581.5)" />
                        <rect x="389" y="564" width="35" height="35" transform="rotate(0,406.5,581.5)" />
                        <rect x="424" y="564" width="35" height="35" transform="rotate(0,441.5,581.5)" />
                        <rect x="564" y="564" width="35" height="35" transform="rotate(0,581.5,581.5)" />
                        <rect x="634" y="564" width="35" height="35" transform="rotate(0,651.5,581.5)" />
                        <rect x="704" y="564" width="35" height="35" transform="rotate(0,721.5,581.5)" />
                        <rect x="739" y="564" width="35" height="35" transform="rotate(0,756.5,581.5)" />
                        <rect x="844" y="564" width="35" height="35" transform="rotate(0,861.5,581.5)" />
                        <rect x="879" y="564" width="35" height="35" transform="rotate(0,896.5,581.5)" />
                        <rect x="949" y="564" width="35" height="35" transform="rotate(0,966.5,581.5)" />
                        <rect x="39" y="599" width="35" height="35" transform="rotate(0,56.5,616.5)" />
                        <rect x="144" y="599" width="35" height="35" transform="rotate(0,161.5,616.5)" />
                        <rect x="249" y="599" width="35" height="35" transform="rotate(0,266.5,616.5)" />
                        <rect x="319" y="599" width="35" height="35" transform="rotate(0,336.5,616.5)" />
                        <rect x="389" y="599" width="35" height="35" transform="rotate(0,406.5,616.5)" />
                        <rect x="459" y="599" width="35" height="35" transform="rotate(0,476.5,616.5)" />
                        <rect x="529" y="599" width="35" height="35" transform="rotate(0,546.5,616.5)" />
                        <rect x="599" y="599" width="35" height="35" transform="rotate(0,616.5,616.5)" />
                        <rect x="704" y="599" width="35" height="35" transform="rotate(0,721.5,616.5)" />
                        <rect x="809" y="599" width="35" height="35" transform="rotate(0,826.5,616.5)" />
                        <rect x="879" y="599" width="35" height="35" transform="rotate(0,896.5,616.5)" />
                        <rect x="914" y="599" width="35" height="35" transform="rotate(0,931.5,616.5)" />
                        <rect x="949" y="599" width="35" height="35" transform="rotate(0,966.5,616.5)" />
                        <rect x="4" y="634" width="35" height="35" transform="rotate(0,21.5,651.5)" />
                        <rect x="144" y="634" width="35" height="35" transform="rotate(0,161.5,651.5)" />
                        <rect x="214" y="634" width="35" height="35" transform="rotate(0,231.5,651.5)" />
                        <rect x="249" y="634" width="35" height="35" transform="rotate(0,266.5,651.5)" />
                        <rect x="389" y="634" width="35" height="35" transform="rotate(0,406.5,651.5)" />
                        <rect x="529" y="634" width="35" height="35" transform="rotate(0,546.5,651.5)" />
                        <rect x="564" y="634" width="35" height="35" transform="rotate(0,581.5,651.5)" />
                        <rect x="599" y="634" width="35" height="35" transform="rotate(0,616.5,651.5)" />
                        <rect x="704" y="634" width="35" height="35" transform="rotate(0,721.5,651.5)" />
                        <rect x="774" y="634" width="35" height="35" transform="rotate(0,791.5,651.5)" />
                        <rect x="809" y="634" width="35" height="35" transform="rotate(0,826.5,651.5)" />
                        <rect x="914" y="634" width="35" height="35" transform="rotate(0,931.5,651.5)" />
                        <rect x="74" y="669" width="35" height="35" transform="rotate(0,91.5,686.5)" />
                        <rect x="144" y="669" width="35" height="35" transform="rotate(0,161.5,686.5)" />
                        <rect x="179" y="669" width="35" height="35" transform="rotate(0,196.5,686.5)" />
                        <rect x="284" y="669" width="35" height="35" transform="rotate(0,301.5,686.5)" />
                        <rect x="389" y="669" width="35" height="35" transform="rotate(0,406.5,686.5)" />
                        <rect x="424" y="669" width="35" height="35" transform="rotate(0,441.5,686.5)" />
                        <rect x="599" y="669" width="35" height="35" transform="rotate(0,616.5,686.5)" />
                        <rect x="634" y="669" width="35" height="35" transform="rotate(0,651.5,686.5)" />
                        <rect x="739" y="669" width="35" height="35" transform="rotate(0,756.5,686.5)" />
                        <rect x="914" y="669" width="35" height="35" transform="rotate(0,931.5,686.5)" />
                        <rect x="39" y="704" width="35" height="35" transform="rotate(0,56.5,721.5)" />
                        <rect x="109" y="704" width="35" height="35" transform="rotate(0,126.5,721.5)" />
                        <rect x="179" y="704" width="35" height="35" transform="rotate(0,196.5,721.5)" />
                        <rect x="214" y="704" width="35" height="35" transform="rotate(0,231.5,721.5)" />
                        <rect x="249" y="704" width="35" height="35" transform="rotate(0,266.5,721.5)" />
                        <rect x="284" y="704" width="35" height="35" transform="rotate(0,301.5,721.5)" />
                        <rect x="389" y="704" width="35" height="35" transform="rotate(0,406.5,721.5)" />
                        <rect x="424" y="704" width="35" height="35" transform="rotate(0,441.5,721.5)" />
                        <rect x="459" y="704" width="35" height="35" transform="rotate(0,476.5,721.5)" />
                        <rect x="599" y="704" width="35" height="35" transform="rotate(0,616.5,721.5)" />
                        <rect x="669" y="704" width="35" height="35" transform="rotate(0,686.5,721.5)" />
                        <rect x="704" y="704" width="35" height="35" transform="rotate(0,721.5,721.5)" />
                        <rect x="739" y="704" width="35" height="35" transform="rotate(0,756.5,721.5)" />
                        <rect x="774" y="704" width="35" height="35" transform="rotate(0,791.5,721.5)" />
                        <rect x="809" y="704" width="35" height="35" transform="rotate(0,826.5,721.5)" />
                        <rect x="844" y="704" width="35" height="35" transform="rotate(0,861.5,721.5)" />
                        <rect x="879" y="704" width="35" height="35" transform="rotate(0,896.5,721.5)" />
                        <rect x="914" y="704" width="35" height="35" transform="rotate(0,931.5,721.5)" />
                        <rect x="284" y="739" width="35" height="35" transform="rotate(0,301.5,756.5)" />
                        <rect x="319" y="739" width="35" height="35" transform="rotate(0,336.5,756.5)" />
                        <rect x="354" y="739" width="35" height="35" transform="rotate(0,371.5,756.5)" />
                        <rect x="389" y="739" width="35" height="35" transform="rotate(0,406.5,756.5)" />
                        <rect x="459" y="739" width="35" height="35" transform="rotate(0,476.5,756.5)" />
                        <rect x="494" y="739" width="35" height="35" transform="rotate(0,511.5,756.5)" />
                        <rect x="564" y="739" width="35" height="35" transform="rotate(0,581.5,756.5)" />
                        <rect x="599" y="739" width="35" height="35" transform="rotate(0,616.5,756.5)" />
                        <rect x="634" y="739" width="35" height="35" transform="rotate(0,651.5,756.5)" />
                        <rect x="704" y="739" width="35" height="35" transform="rotate(0,721.5,756.5)" />
                        <rect x="844" y="739" width="35" height="35" transform="rotate(0,861.5,756.5)" />
                        <rect x="879" y="739" width="35" height="35" transform="rotate(0,896.5,756.5)" />
                        <rect x="914" y="739" width="35" height="35" transform="rotate(0,931.5,756.5)" />
                        <rect x="949" y="739" width="35" height="35" transform="rotate(0,966.5,756.5)" />
                        <rect x="984" y="739" width="35" height="35" transform="rotate(0,1001.5,756.5)" />
                        <rect x="284" y="774" width="35" height="35" transform="rotate(0,301.5,791.5)" />
                        <rect x="354" y="774" width="35" height="35" transform="rotate(0,371.5,791.5)" />
                        <rect x="459" y="774" width="35" height="35" transform="rotate(0,476.5,791.5)" />
                        <rect x="564" y="774" width="35" height="35" transform="rotate(0,581.5,791.5)" />
                        <rect x="634" y="774" width="35" height="35" transform="rotate(0,651.5,791.5)" />
                        <rect x="669" y="774" width="35" height="35" transform="rotate(0,686.5,791.5)" />
                        <rect x="704" y="774" width="35" height="35" transform="rotate(0,721.5,791.5)" />
                        <rect x="774" y="774" width="35" height="35" transform="rotate(0,791.5,791.5)" />
                        <rect x="844" y="774" width="35" height="35" transform="rotate(0,861.5,791.5)" />
                        <rect x="879" y="774" width="35" height="35" transform="rotate(0,896.5,791.5)" />
                        <rect x="949" y="774" width="35" height="35" transform="rotate(0,966.5,791.5)" />
                        <rect x="284" y="809" width="35" height="35" transform="rotate(0,301.5,826.5)" />
                        <rect x="389" y="809" width="35" height="35" transform="rotate(0,406.5,826.5)" />
                        <rect x="424" y="809" width="35" height="35" transform="rotate(0,441.5,826.5)" />
                        <rect x="529" y="809" width="35" height="35" transform="rotate(0,546.5,826.5)" />
                        <rect x="704" y="809" width="35" height="35" transform="rotate(0,721.5,826.5)" />
                        <rect x="844" y="809" width="35" height="35" transform="rotate(0,861.5,826.5)" />
                        <rect x="879" y="809" width="35" height="35" transform="rotate(0,896.5,826.5)" />
                        <rect x="949" y="809" width="35" height="35" transform="rotate(0,966.5,826.5)" />
                        <rect x="984" y="809" width="35" height="35" transform="rotate(0,1001.5,826.5)" />
                        <rect x="319" y="844" width="35" height="35" transform="rotate(0,336.5,861.5)" />
                        <rect x="354" y="844" width="35" height="35" transform="rotate(0,371.5,861.5)" />
                        <rect x="494" y="844" width="35" height="35" transform="rotate(0,511.5,861.5)" />
                        <rect x="599" y="844" width="35" height="35" transform="rotate(0,616.5,861.5)" />
                        <rect x="704" y="844" width="35" height="35" transform="rotate(0,721.5,861.5)" />
                        <rect x="739" y="844" width="35" height="35" transform="rotate(0,756.5,861.5)" />
                        <rect x="774" y="844" width="35" height="35" transform="rotate(0,791.5,861.5)" />
                        <rect x="809" y="844" width="35" height="35" transform="rotate(0,826.5,861.5)" />
                        <rect x="844" y="844" width="35" height="35" transform="rotate(0,861.5,861.5)" />
                        <rect x="914" y="844" width="35" height="35" transform="rotate(0,931.5,861.5)" />
                        <rect x="949" y="844" width="35" height="35" transform="rotate(0,966.5,861.5)" />
                        <rect x="284" y="879" width="35" height="35" transform="rotate(0,301.5,896.5)" />
                        <rect x="319" y="879" width="35" height="35" transform="rotate(0,336.5,896.5)" />
                        <rect x="354" y="879" width="35" height="35" transform="rotate(0,371.5,896.5)" />
                        <rect x="424" y="879" width="35" height="35" transform="rotate(0,441.5,896.5)" />
                        <rect x="459" y="879" width="35" height="35" transform="rotate(0,476.5,896.5)" />
                        <rect x="494" y="879" width="35" height="35" transform="rotate(0,511.5,896.5)" />
                        <rect x="529" y="879" width="35" height="35" transform="rotate(0,546.5,896.5)" />
                        <rect x="599" y="879" width="35" height="35" transform="rotate(0,616.5,896.5)" />
                        <rect x="704" y="879" width="35" height="35" transform="rotate(0,721.5,896.5)" />
                        <rect x="739" y="879" width="35" height="35" transform="rotate(0,756.5,896.5)" />
                        <rect x="844" y="879" width="35" height="35" transform="rotate(0,861.5,896.5)" />
                        <rect x="879" y="879" width="35" height="35" transform="rotate(0,896.5,896.5)" />
                        <rect x="984" y="879" width="35" height="35" transform="rotate(0,1001.5,896.5)" />
                        <rect x="284" y="914" width="35" height="35" transform="rotate(0,301.5,931.5)" />
                        <rect x="354" y="914" width="35" height="35" transform="rotate(0,371.5,931.5)" />
                        <rect x="424" y="914" width="35" height="35" transform="rotate(0,441.5,931.5)" />
                        <rect x="634" y="914" width="35" height="35" transform="rotate(0,651.5,931.5)" />
                        <rect x="704" y="914" width="35" height="35" transform="rotate(0,721.5,931.5)" />
                        <rect x="809" y="914" width="35" height="35" transform="rotate(0,826.5,931.5)" />
                        <rect x="914" y="914" width="35" height="35" transform="rotate(0,931.5,931.5)" />
                        <rect x="984" y="914" width="35" height="35" transform="rotate(0,1001.5,931.5)" />
                        <rect x="494" y="949" width="35" height="35" transform="rotate(0,511.5,966.5)" />
                        <rect x="529" y="949" width="35" height="35" transform="rotate(0,546.5,966.5)" />
                        <rect x="564" y="949" width="35" height="35" transform="rotate(0,581.5,966.5)" />
                        <rect x="634" y="949" width="35" height="35" transform="rotate(0,651.5,966.5)" />
                        <rect x="704" y="949" width="35" height="35" transform="rotate(0,721.5,966.5)" />
                        <rect x="739" y="949" width="35" height="35" transform="rotate(0,756.5,966.5)" />
                        <rect x="809" y="949" width="35" height="35" transform="rotate(0,826.5,966.5)" />
                        <rect x="879" y="949" width="35" height="35" transform="rotate(0,896.5,966.5)" />
                        <rect x="949" y="949" width="35" height="35" transform="rotate(0,966.5,966.5)" />
                        <rect x="284" y="984" width="35" height="35" transform="rotate(0,301.5,1001.5)" />
                        <rect x="319" y="984" width="35" height="35" transform="rotate(0,336.5,1001.5)" />
                        <rect x="459" y="984" width="35" height="35" transform="rotate(0,476.5,1001.5)" />
                        <rect x="634" y="984" width="35" height="35" transform="rotate(0,651.5,1001.5)" />
                        <rect x="669" y="984" width="35" height="35" transform="rotate(0,686.5,1001.5)" />
                        <rect x="704" y="984" width="35" height="35" transform="rotate(0,721.5,1001.5)" />
                        <rect x="774" y="984" width="35" height="35" transform="rotate(0,791.5,1001.5)" />
                        <rect x="879" y="984" width="35" height="35" transform="rotate(0,896.5,1001.5)" />
                        <rect x="949" y="984" width="35" height="35" transform="rotate(0,966.5,1001.5)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-square-color-0-0-38">
                        <path clip-rule="evenodd" d="M 4 4v 245h 245v -245zM 39 39h 175v 175h -175z"
                            transform="rotate(0,126.5,126.5)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-dot-color-0-0-38">
                        <rect x="74" y="74" width="105" height="105" transform="rotate(0,126.5,126.5)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-square-color-1-0-38">
                        <path clip-rule="evenodd" d="M 774 4v 245h 245v -245zM 809 39h 175v 175h -175z"
                            transform="rotate(90,896.5,126.5)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-dot-color-1-0-38">
                        <rect x="844" y="74" width="105" height="105" transform="rotate(90,896.5,126.5)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-square-color-0-1-38">
                        <path clip-rule="evenodd" d="M 4 774v 245h 245v -245zM 39 809h 175v 175h -175z"
                            transform="rotate(-90,126.5,896.5)" />
                    </clipPath>
                    <clipPath id="clip-path-corners-dot-color-0-1-38">
                        <rect x="74" y="844" width="105" height="105" transform="rotate(-90,126.5,896.5)" />
                    </clipPath>
                </defs>
                <rect x="0" y="0" height="1024" width="1024" clip-path="url('#clip-path-background-color-38')"
                    fill="#FFFFFF" />
                <rect x="0" y="0" height="1024" width="1024" clip-path="url('#clip-path-dot-color-38')"
                    fill="#000000" />
                <rect x="4" y="4" height="245" width="245"
                    clip-path="url('#clip-path-corners-square-color-0-0-38')" fill="#000000" />
                <rect x="74" y="74" height="105" width="105"
                    clip-path="url('#clip-path-corners-dot-color-0-0-38')" fill="#000000" />
                <rect x="774" y="4" height="245" width="245"
                    clip-path="url('#clip-path-corners-square-color-1-0-38')" fill="#000000" />
                <rect x="844" y="74" height="105" width="105"
                    clip-path="url('#clip-path-corners-dot-color-1-0-38')" fill="#000000" />
                <rect x="4" y="774" height="245" width="245"
                    clip-path="url('#clip-path-corners-square-color-0-1-38')" fill="#000000" />
                <rect x="74" y="844" height="105" width="105"
                    clip-path="url('#clip-path-corners-dot-color-0-1-38')" fill="#000000" />
            </g>
            <rect x="0" y="1024" width="1024" height="55" fill="#FFFFFF" /><text x="1019" y="1074"
                text-anchor="end" fill="#000000" opacity="0.95" font-size="40"
                font-family="Inter,system-ui,sans-serif">www.bumblebeetattoo.de</text>
        </svg>
    </div>

@endsection
