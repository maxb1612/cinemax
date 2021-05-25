@extends('layouts.main')

@section('title')
    {{$movie[0]->name}}
@endsection

@section('main')

    <div class="movie-page">
        <div class="row row-cols-2">
            <div class="col-xxl-4 col-sm-12 col-12">
                <img src="{{asset($movie[0]->img)}}" alt="poster">
                <form method="get" action="{{route('getSeats')}}">
                    @csrf
                    <select name="session_id">
                        @foreach($sessions as $session)
                            <option value="{{$session->id}}">{{$session->date}}, {{$session->session_time}}</option>
                        @endforeach
                    </select>
                    <button type="submit">
                        <a>Купити квитки</a>
                    </button>
                </form>
            </div>

            <div class="col-xxl-8 col-sm-12 col-12">
                <ul>
                    <li><h1>{{$movie[0]->name}}</h1></li>
                    <li><h2 class="static">Рік:</h2><h2 class="data">{{$movie[0]->year}}</h2></li>
                    <li><h2 class="static">Режисер:</h2><h2 class="data">{{$movie[0]->director}}</h2></li>
                    <li><h2 class="static">В ролях:</h2><h2 class="data">{{$movie[0]->actors}}</h2></li>
                </ul>
                <p>{{$movie[0]->description}}</p>
            </div>
        </div>
    </div>
@endsection
