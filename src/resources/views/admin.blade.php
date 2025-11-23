@extends('layouts.app')

@section('css')
<link rel="stylesheet" href= "{{ asset('css/admin.css') }}" >
@endsection

@section('header')
<form class="form" action="/logout" method="post">
    @csrf
    <button  class="logout__button">logout</button>
</form>
@endsection

@section('contact')
<div class="admin">
    <div class="admin__title">
        <h2>Admin</h2>
    </div>
    <form class="search-form" action="/contact/search" method="get">
        @csrf
        <input class="search-form__input-keyword" type="text" name="keyword" value="{{ old('keyword') }}">
        <select class="search-form__select-gender" name="gender">
            <option value="">性別</option>
            @foreach ($contacts as $contact)
            <option value="{{ $contact['gender'] }}">{{ $contact['gender'] }}</option>
            @endforeach
        </select>
        <select class="search-form__select-category" name="category_id">
            <option value="">お問い合わせの種類</option>
            @foreach ($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
            @endforeach
        </select>
        <input class="search-form__input-date" type="date" name="date" >
        <button>検索</button>

        <div class="contact-table">
            <table class="contact-table__inner">
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <span class="contact-table__header-span">お名前</span>
                        <span class="contact-table__header-span">性別</span>
                        <span class="contact-table__header-span">メールアドレス</span>
                        <span class="contact-table__header-span">お問い合わせの種類</span>
                    </th>
                </tr>
                @foreach ($contacts as $contact)
                <tr class="contact-table__row">
                    <td class="contact-table__item">
                        <form action="/contact" method="post">
                            @csrf
                            <div class="contact-form__item">
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}">
                                <input type="hidden" name="id" value="{{ $contact['id'] }}">
                            </div>
                            <div class="contact-form__item">
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}">
                                <input type="hidden" name="id" value="{{ $contact['id'] }}">
                            </div>
                            <div class="contact-form__item">
                                <input type="text" name="gender" value="{{ $contact['gender'] }}">
                                <input type="hidden" name="id" value="{{ $contact['id'] }}">
                            </div>
                            <div class="contact-form__item">
                                <input type="email" name="email" value="{{ $contact['email'] }}">
                                <input type="hidden" name="id" value="{{ $contact['id'] }}">
                            </div>
                            <div class="contact-form__item">
                                <input type="text" name="category_id" value="{{$contact['category_id'] }}">
                                <input type="hidden" name="category_id" value="{{ $contact['id'] }}">
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </form>
</div>
@endsection