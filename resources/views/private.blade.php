@extends('layouts.main')

@section('title')
    Профіль
@endsection

@section('main')

    <h1>Профіль</h1>
    <form method="post" action="{{route('user.updateUser')}}">
        @csrf
        <h2>Номер телефону</h2>
        <h2>{{$user['phone']}}</h2>
        <h2>Ім'я</h2>
        <input type="text" name="firstname" value="@if($user['firstname']) {{ $user['firstname'] }} @endif">
        <h2>Прізвище</h2>
        <input type="text" name="lastname" value="@if($user['lastname']) {{ $user['lastname'] }} @endif">
        <h2>Електронна пошта</h2>
        <input type="text" name="email" value="@if($user['email']) {{ $user['email'] }} @endif">
        <button type="submit">
            <a>Зберегти</a>
        </button>
    </form>
@endsection
