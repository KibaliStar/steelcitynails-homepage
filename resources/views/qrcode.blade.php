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

    <div class="standard-section">
        <h2>QR Code</h2>

        <div class="qr">
            <x-qr_code />
        </div>
    </div>

@endsection
