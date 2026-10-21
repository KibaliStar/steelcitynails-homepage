<h2>Neue Anfrage: {{ ucfirst($daten['thema']) }}</h2>

<p><strong>Name:</strong> {{ trim(($daten['vorname'] ?? '') . ' ' . ($daten['nachname'] ?? '')) ?: 'Nicht angegeben' }}</p>

@if(!empty($daten['email']))
    <p><strong>E-Mail:</strong> {{ $daten['email'] }}</p>
@endif

<p><strong>Telefon:</strong> {{ $daten['telefon'] }}</p>

@if(!empty($daten['volljaehrig']))
    <p><strong>Volljährig:</strong> Ja</p>
@endif

<hr>

@if($daten['thema'] == 'tattoo' || $daten['thema'] == 'piercing')
    @if(!empty($daten['koerperstelle']))
        <p><strong>Körperstelle:</strong> {{ $daten['koerperstelle'] }}</p>
    @endif
    @if(!empty($daten['wunschtermin']))
        <p><strong>Wunschtermin:</strong> {{ $daten['wunschtermin'] }}</p>
    @endif
@endif

@if($daten['thema'] == 'tattoo')
    @if(!empty($daten['stil']))
        <p><strong>Stil:</strong> {{ $daten['stil'] }}</p>
    @endif
    @if(!empty($daten['groesse']))
        <p><strong>Größe:</strong> {{ $daten['groesse'] }}</p>
    @endif
@endif

@if($daten['thema'] == 'piercing')
    @if(!empty($daten['piercing_art']))
        <p><strong>Art des Piercings:</strong> {{ $daten['piercing_art'] }}</p>
    @endif
@endif

@if(!empty($daten['nachricht']))
    <p><strong>Nachricht / Idee:</strong></p>
    <p>{!! nl2br(e($daten['nachricht'])) !!}</p>
@endif

@if(count($bilder) > 0)
    <p><em>Es wurden {{ count($bilder) }} Bild(er) angehängt.</em></p>
@endif