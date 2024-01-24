@extends('layouts.app')

@section('content')


<h1>Lista Treni in Partenza Oggi</h1>

<ul>
    @foreach($trains as $train)
        <li>
            <strong>Azienda:</strong> {{ $train->azienda }}<br>
            <strong>Partenza:</strong> {{ $train->stazione_partenza }}<br>
            <strong>Arrivo:</strong> {{ $train->stazione_arrivo }}<br>
            <strong>Orario Partenza:</strong> {{ $train->orario_partenza }}<br>
            <strong>Orario Arrivo:</strong> {{ $train->orario_arrivo }}<br>
            <strong>Codice Treno:</strong> {{ $train->codice_treno }}<br>
            <strong>Numero Carrozze:</strong> {{ $train->numero_carrozze }}<br>
            <strong>In Orario:</strong> {{ $train->in_orario ? 'Sì' : 'No' }}<br>
            <strong>Cancellato:</strong> {{ $train->cancellato ? 'Sì' : 'No' }}<br>
            <br>
        </li>
    @endforeach
</ul>

@endsection