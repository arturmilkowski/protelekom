@extends('frontend.layouts.app')

@section('title', 'polityka prywatności')
@section('description', 'dane są bezpieczne i nie przekazywane dalej. nie spamuję')
@section('keywords', 'woda kolońska, naturalna woda kolońska, ręcznie tworzona woda kolońska, lawendowa woda kolońska, lawenda')

@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>polityka prywatności</h1></div></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm text-justify">
                        administratorem danych osobowych jest właściciel witryny, artur miłkowski.
                        tylko ta jedna osoba ma dostęp do danych.
                        nie udostępnia żadnych informacji innym osobom, firmom ani instytucją.
                        w aplikacji zapisywane są tylko te dane, które podaje użytkownik.
                        miejscami do podawania danych jest rejestracja użytkownika, jego profil lub zamówienie bez rejestracji.
                        nie zapisuje danych podawanych przez nasz serwer bądź urządzenie użytkownika, takie jak komputer, laptop, tablet lub telefon.
                        dane są wykorzystywane jedynie w celu zrealizowania zamówienia.
                        nie wysyłam reklam.
                        mój kontakt z użytkownikiem aplikacji odbywa się najczęściej poprzez email.
                        w wyjątkowych, pilnych sytuacjach, przez telefon, o ile użytkownik taki poda.
                        zmian danych można dokonać w panelu administracyjnym, w zakładce "profil".
                        dane są chronione hasłem. hasła są szyfrowane.
                        o plikach typu <a href="{{ route('frontend.pages.cookie') }}" title="pliki cookie">ciastka</a>.
                        informacje o <a href="{{ route('frontend.pages.term_condition') . '#rodo' }}" title="prawa przysługujące z tytułu rodo">rodo</a>.
                    </div>
                </div>
            </div>
@endsection
