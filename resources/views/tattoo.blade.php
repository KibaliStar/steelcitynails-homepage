@extends('layouts.app')

@section('title', 'Tattoo')

@section('content')
    
    <h1>Tattoo und CoverUp</h1>

    <a href="{{ route('anfrage', ['thema' => 'tattoo']) }}">Jetzt Tattoo anfragen</a>

    @include('partials.fragenzu')
@endsection