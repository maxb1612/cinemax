@extends('layouts.main')

@section('title')
    Вхід
@endsection

@section('main')
    <h1>Вхід</h1>
    <form method="post" action="{{ route('user.login') }}">
        @csrf
        <h2>Номер телефону</h2>
        <input type="text" name="phone" placeholder="+38(ХХХ)-ХХХ-ХХХХ" required>
        <h2>Пароль</h2>
        <input type="password" name="password" required>
        @error('password')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit">
            <a>Увійти</a>
        </button>
    </form>
    <div class="login-text">
        <p>Не маєте аккаунту? <a href="{{route('user.signup')}}">Зареєструватись.</a></p>
    </div>
@endsection
