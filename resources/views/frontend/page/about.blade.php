@extends('frontend.layouts.app')

@section('title', 'O firmie')
@section('description', 'Działamy od roku 2000. Sprzedajemy i serwisujemy telefony komórkowe, smartfony, tablety i laptopy.')
@section('keywords', 'telefony komórkowe, smartfony, tablety, sprzedaż, skup, serwis')
{{--
@section('ldjson')
        @include('frontend.page.includes.ld_json_about')
@endsection
--}}
@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>O firmie</h1></div></div>
            <div class="row">
                <div class="col-sm">
                    <div class="card my-card">
                        <div class="card-body">
                            <h2 class="card-title">Działamy nieprzerwanie od roku 2000.</h2>
                            <p class="card-text mt-4">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card my-card">
                        <div class="card-body">
                            <h2 class="card-title">Serwis</h2>
                            <p class="card-text mt-4">
                                Oferujemy ekspresową wymianę ekranów w smartfonach &mdash; czas oczekiwania od kilku godzin do 2 dni roboczych.
                                <br>
                                Specjalizujemy się w naprawach telefonów komórkowych, smartfonów i tabletów.
                                <br>
                                Ponadto serwisujemy też nawigacje, laptopy i inny drobny sprzęt elektroniczny.
                                <br>
                                Nasze kilkunastoletnie  doświadczenie  gwarantuje wysoką jakość świadczonych usług.
                                Współpraca z doświadczonymi technikami oraz najlepszymi hurtowniami, w znacznym stopniu wpływa na skuteczność oraz koszt naprawy.
                                <br>
                                Staramy dotrzymywać jak najkrótszych terminów realizacji.
                                <br>
                                Na czas naprawy telefonów lub smartfonów oferujemy telefon zastępczy.
                                <br>
                                Na wszystkie wykonane przez nas naprawy udzielamy gwarancji oraz wystawiamy faktury vat.
                                <br>
                                Wykonujemy następujące usługi serwisowe:
                                <ul class="list-unstyled ">
                                    <li>– wymiana  ekranów dotykowych, wyświetlaczy</li>
                                    <li>– naprawa telefonów komórkowych „po zalaniu” lub po uderzeniu</li>
                                    <li>– wymiana części: gniazda ładowania, USB, czytniki kart sim, głośników, mikrofonów, buzerów, itp.</li>
                                    <li>– wymiana obudowy w telefonie</li>
                                    <li>– archiwizacja danych, na przykład, kopiowanie książki telefonicznej lub zdjęć</li>
                                    <li>– usuwanie blokady sim-lock</li>
                                    <li>– usuwanie kodów zabezpieczających, wzorów blokady ekranu</li>
                                    <li>– zmiana oprogramowania telefonu, na przykład, bez brandu operatora, zmiana języka menu na polski</li>
                                    <li>– naprawa programowa po nieudanej aktualizacji</li>
                                    <li>– naprawa telefonów z błędami systemowymi</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
@endsection
