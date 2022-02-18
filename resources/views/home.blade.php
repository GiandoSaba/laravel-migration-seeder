@extends('layouts.base')

@section('content')
<div class="cards">
@foreach ($trains as $train)
    <ul class="card">
        <li>Agenzia <br>{{ $train -> agency }}</li>
        <li>Partenza <br>{{ $train -> departure_station }} - {{ $train -> departure_time }}</li>
        <li>Arrivo<br>{{ $train -> arrival_station }} - {{ $train -> arrival_time }}</li>
        <li>{{ $train -> train_code }} - N Carrozze: {{ $train -> train_carriage }}</li>
        <li>{{ ($train -> in_time) ? 'In orario' : 'In ritardo' }}</li>
        <li>{{ ($train -> deleted) ? 'Cancellato' : ''  }}</li>
    </ul>
@endforeach
</div>
@endsection
