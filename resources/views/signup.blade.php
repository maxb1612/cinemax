@extends('layouts.main')

@section('title')
    Реєстрація
@endsection

@section('main')
    <h1>Реєстрація</h1>
    <form method="post" action="{{ route('user.signup') }}">
        @csrf
        <h2>Номер телефону</h2>
        <input type="text" name="phone" placeholder="+38(ХХХ)-ХХХ-ХХХХ" required>
        @error('phone')
        <p>{{ $message }}</p>
        @enderror
        <h2>Пароль</h2>
        <input type="password" name="password" required>
        @error('password')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit">
            <a>Зареєструватись</a>
        </button>
    </form>
@endsection


