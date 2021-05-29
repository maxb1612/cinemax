@extends('layouts.main')

@section('title')
    Місця
@endsection

@section('main')
    <h1>Вибрати місця</h1>
    <form method="post" action="{{route('buyTickets')}}">
        @csrf
        <input type="hidden" name="session_id" value="{{$session_id}}">
        <div class="seats">
            <div class="seat-row">
                @for($i = 1; $i <= 16; $i++)
                    <div class="seat">
                        <input type="checkbox" class="custom-checkbox" id="seat_{{$i}}" name="seats[]" value="{{$i}}"
                               @foreach($taken as $item) @if($item->seat == $i) checked disabled @endif @endforeach>
                        <label for="seat_{{$i}}"></label>
                    </div>
                @endfor
            </div>
            <div class="seat-row">
                @for($i = 17; $i <= 32; $i++)
                    <div class="seat">
                        <input type="checkbox" class="custom-checkbox" id="seat_{{$i}}" name="seats[]" value="{{$i}}"
                               @foreach($taken as $item) @if($item->seat == $i) checked disabled @endif @endforeach>
                        <label for="seat_{{$i}}"></label>
                    </div>
                @endfor
            </div>
            <div class="seat-row">
                @for($i = 33; $i <= 48; $i++)
                    <div class="seat">
                        <input type="checkbox" class="custom-checkbox" id="seat_{{$i}}" name="seats[]" value="{{$i}}"
                               @foreach($taken as $item) @if($item->seat == $i) checked disabled @endif @endforeach>
                        <label for="seat_{{$i}}"></label>
                    </div>
                @endfor
            </div>
            <div class="seat-row">
                @for($i = 49; $i <= 64; $i++)
                    <div class="seat">
                        <input type="checkbox" class="custom-checkbox" id="seat_{{$i}}" name="seats[]" value="{{$i}}"
                               @foreach($taken as $item) @if($item->seat == $i) checked disabled @endif @endforeach>
                        <label for="seat_{{$i}}"></label>
                    </div>
                @endfor
            </div>
        </div>
        <button type="submit">
            <a>Купити</a>
        </button>
    </form>
@endsection

