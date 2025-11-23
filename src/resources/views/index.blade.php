@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
@endsection

@section('contact')
<div class="contact-form__content">
    <div class="contact-form__title">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">お名前</span>
                <span class="form__container-title--required">※</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--input---name">
                    <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}">
                    <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}">
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">性別</span>
                <span class="form__container-title--required">※</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--radio">
                    <input type="radio" name="gender" value="1" checked>男性
                    <input type="radio" name="gender" value="2">女性
                    <input type="radio" name="gender" value="3">その他
                </div>
            </div>
        </div>
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">メールアドレス</span>
                <span class="form__container-title--required">※</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--input">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">電話番号</span>
                <span class="form__container-title--required">※</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--input">
                    <input type="tel" name="tel" placeholder="08012345678" value="{{ old('tel') }}">
                </div>
                <div class="form__error">
                    @error('tel')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">住所</span>
                <span class="form__container-title--required">※</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--input">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">建物名</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--input">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
                </div>
            </div>
        </div>
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">お問い合わせの種類</span>
                <span class="form__container-title--required">※</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--input">
                    <select name="category_id" >
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__container">
            <div class="form__container-title">
                <span class="form__container-title--item">お問い合わせ内容</span>
                <span class="form__container-title--required">※</span>
            </div>
            <div class="form__container-item">
                <div class="form__container-item--input">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記入ください" value="{{ old('detail') }}"></textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-confirm">確認画面</button>
        </div>
    </form>
</div>
@endsection