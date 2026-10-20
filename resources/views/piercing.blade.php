@extends('layouts.app')

@section('title', 'Piercing')

@section('content')
    
    <h1>Piercing</h1>

    <a href="{{ route('anfrage', ['thema' => 'piercing']) }}">Jetzt Piercing anfragen</a>

    @include('partials.fragenzu')
@endsection