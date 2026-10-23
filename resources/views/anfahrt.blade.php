@extends('layouts.app')

@section('title', 'Anfahrt')

@section('description',
    'Tattoo und Piercing in Eisenhüttenstadt, so findest du unser Studio.')

@section('content')
    <h1>Anfahrt</h1>
    <iframe width="90%" height="400" id="gmap_canvas"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1224.3148202083416!2d14.650884599053647!3d52.141058200173475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4707b87b68dca96b%3A0x39cb6676da007d20!2sBumblebee%20Tattoo!5e0!3m2!1sde!2sde!4v1781365770390!5m2!1sde!2sde"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    </iframe>
@endsection
