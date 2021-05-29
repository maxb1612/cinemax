@extends('layouts.main')

@section('title')
    Квитки
@endsection

@section('main')
    <h1>Мої квитки</h1>
    @foreach($tickets as $ticket)
        <div class="ticket">
            <h2>{{$ticket->name}}</h2>
            <h2>Час: {{$ticket->date}}, {{$ticket->session_time}}</h2>
            <h2>Ряд: {{floor($ticket->seat / 16) + 1}}</h2>
            <h2>Місце: {{$ticket->seat % 16}}</h2>
        </div>
    @endforeach
@endsection
