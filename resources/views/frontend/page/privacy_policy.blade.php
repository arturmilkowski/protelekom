@extends('frontend.layouts.app')

@section('title', 'Polityka Prywatności')
@section('description', 'Dane są bezpieczne. Nie przekazujemy ich nikomu. Nie rozsyłamy spamu.')
@section('keywords', 'polityka prywatności, telefony komórkowe, serwis telefonów')

@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>Polityka Prywatności</h1></div></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm text-justify">
                        Administratorem danych osobowych jest właściciel witryny, Grzegorz Romański.
                        Jest jedyną osobą mającą dostęp do danych.
                        Nie przekazuje żadnych informacji osobom trzecim, firmom ani instytucją.
                        W aplikacji zapisywane są jedynie dane, które podaje użytkownik.
                        Miejscami do ich podawania jest rejestracja użytkownika i jego profil lub zamówienie bez rejestracji.
                        Informacje przekazywane przez serwer lub urządzenie użytkownika, takie jak komputer, laptop, tablet lub telefon nie są zapisywane.
                        Dane są wykorzystywane jedynie w celu zrealizowania zamówienia.
                        Nie wysyłamy reklam.
                        Kontakt z użytkownikiem aplikacji odbywa się najczęściej poprzez email lub telefon.
                        Zmian danych dokonuje się panelu administracyjnym, w zakładce "profil".
                        Dane są chronione hasłem i szyfrowane.
                        O plikach typu <a href="{{ route('frontend.pages.cookie') }}" title="pliki cookie">ciastka</a>.
                        Informacje o <a href="{{ route('frontend.pages.rodo') }}" title="prawa przysługujące z tytułu rodo">RODO</a>.
                    </div>
                </div>
            </div>
@endsection
