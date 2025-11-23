@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" >
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
@endsection

@section('header')
<a class="login__button" href="/contacts/login">login</a>
@endsection

@section('contact')
<div class="register">
    <div class="register__title">
        <h2>Register</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">お名前</span>
            </div>
            <input class="form__container-input"  type="text" name="name" placeholder="例: 山田　太郎" value>
            <div class="form__container-title">
                <span class="form__container-title--item">メールアドレス</span>
            </div>
            <input class="form__container-input"  type="email" name="email"   value="{{ old('email') }}" placeholder="例: test@example.com" value>
            <div class="form__container-title">
                <span class="form__container-title--item">パスワード</span>
            </div>
            <input class="form__container-title" type="password" name="password" placeholder="例: coachtech1106">
        </div>
        <div class="form__button">
            <button class="form__button-register">登録</button>
        </div>
    </form>
</div>
@endsection