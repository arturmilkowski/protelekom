@extends('frontend.layouts.app')

@section('title', 'Serwis')
@section('description', 'Działamy od roku 2000. Sprzedajemy i serwisujemy telefony komórkowe, smartfony, tablety i laptopy.')
@section('keywords', 'telefony komórkowe, smartfony, tablety, sprzedaż, skup, serwis')
{{--
@section('ldjson')
        @include('frontend.page.includes.ld_json_about')
@endsection
--}}
@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1><i class="fas fa-tools"></i> Serwis</h1></div></div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-5">
                        <img src="{{ asset('storage/img/foto.jpg') }}" class="card-img-top" alt="Od roku 2000 na rynku">
                        <div class="card-body">
                            <h2 class="card-title h3">Działamy nieprzerwanie od roku 2000</h2>
                        </div>
                    </div>
                    {{--
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2 class="card-title h3">Działamy nieprzerwanie od roku 2000</h2>
                        </div>
                        <img src="{{ asset('storage/img/foto.jpg') }}" class="card-img-bottom" alt="Od roku 2000 na rynku">
                    </div>
                    --}}
                    <div class="card mb-5">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/img/serwis2.jpg') }}" width="300" height="200" class="card-img width300" alt="Ekspresowa wymiana ekranów w smartfonach">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title h5">Ekspresowa wymiana ekranów w smartfonach</h2>
                                    <p class="card-text">Czas oczekiwania, od kilku godzin do dwóch dni roboczych</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/img/serwis4.jpg') }}" width="300" height="200" class="card-img width300" alt="Naprawy smartfonów">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title h5">Specjalizujemy się w naprawach telefonów komórkowych, smartfonów i tabletów</h2>
                                    <p class="card-text">Ponadto serwisujemy też nawigacje, laptopy i inny drobny sprzęt elektroniczny.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/img/serwis3.jpg') }}" width="300" height="200" class="card-img width300" alt="Kilkunastoletnie doświadczenie">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title h5">Kilkunastoletnie doświadczenie gwarantuje wysoką jakość usług</h2>
                                    <p class="card-text">Współpraca z doświadczonymi technikami oraz najlepszymi hurtowniami, w znacznym stopniu wpływa na skuteczność oraz koszt naprawy.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/img/serwis1.jpg') }}" width="300" height="200" class="card-img width300" alt="Dotrzymujemy terminów">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title h5">Staramy dotrzymywać jak najkrótszych terminów realizacji</h2>
                                    <p class="card-text">
                                        Na czas naprawy telefonów lub smartfonów oferujemy telefon zastępczy. Na wszystkie wykonane przez nas naprawy udzielamy gwarancji oraz wystawiamy faktury vat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/img/serwis5.jpg') }}" width="300" height="200" class="card-img width300" alt="Usługi serwisowe">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title h5">Wykonujemy następujące usługi serwisowe:</h2>
                                    <p class="card-text">
                                        <ul class="list-unstyled">
                                            <li>&mdash; wymiana ekranów dotykowych, wyświetlaczy</li>
                                            <li>&mdash; naprawa telefonów komórkowych „po zalaniu” lub po uderzeniu</li>
                                            <li>&mdash; wymiana części: gniazda ładowania, USB, czytniki kart sim, głośników, mikrofonów, buzerów, itp.</li>
                                            <li>&mdash; wymiana obudowy w telefonie</li>
                                            <li>&mdash; archiwizacja danych, na przykład, kopiowanie książki telefonicznej lub zdjęć</li>
                                            <li>&mdash; usuwanie blokady sim-lock</li>
                                            <li>&mdash; usuwanie kodów zabezpieczających, wzorów blokady ekranu</li>
                                            <li>&mdash; zmiana oprogramowania telefonu, na przykład, bez brandu operatora, zmiana języka menu na polski</li>
                                            <li>&mdash; naprawa programowa po nieudanej aktualizacji</li>
                                            <li>&mdash; naprawa telefonów z błędami systemowymi</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--
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
            --}}
@endsection
