@extends('layouts.app')

@section('css')
<link rel="stylesheet" href= "{{ asset('css/login.css') }}" >
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
@endsection

@section('header')
<a class="register__button" href="contacts/register">register</a>
@endsection

@section('contact')
<form class="form" action="/login" method="post">
    @csrf
    <div class="form__container">
        <div class="form__container-title">
            <span class="form__container-title--item">メールアドレス</span>
        </div>
        <input class="form__container-input"  type="text" name="email" placeholder="例: test@example.com" value>
        <div class="form__container-title">
            <span class="form__container-title--item">パスワード</span>
        </div>
        <input class="form__container-title" type="text" name="password" placeholder="例: coachtech1106">
        <div class="form__button">
            <button class="form__button-login">ログイン</button>
        </div>
</form>
@endsection