@extends('frontend.layouts.app')

@section('title', 'Ciastka')
@section('description', 'Ciastka (pliki cookie) używamy tylko do logowania')
@section('keywords', 'zasady plików cookie')

@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>Ciastka</h1></div></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm text-justify">
                        Plików cookie, używamy jedynie w celach bezpieczeństwa aplikacji.
                        Lub gdy użytkownik, podczas logowania, zaznaczy, że chce żeby login i hasło zostało zapamiętane na jego komputerze.
                        Takie logowanie jest wygodniejsze i właściwie tak samo bezpieczne jak wpisywanie loginu i hasła za każdym razem.
                        Pliki ciastek są szyfrowane.
                        <br>
                        <strong>Nie używamy ciastek do śledzenia użytkownika, wyświetlania reklam, zapisywania jego położenia lub w jakimkolwiek innym celu</strong>.
                        <br>
                        <a href="{{ route('frontend.pages.privacy_policy') }}" title="">Polityka prywatności</a>.
                    </div>
                </div>
            </div>
@endsection
