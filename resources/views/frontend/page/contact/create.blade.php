@extends('frontend.layouts.app')

@section('title', 'Kontakt')
@section('description', 'Masz pytania? Skontaktuj się z nami.')
@section('keywords', '')
{{--
@section('ldjson')
        @include('frontend.page.includes.ld_json_contact')
@endsection
--}}
@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>Kontakt</h1></div></div>
            <div class="row mb-5">
                <div class="col-sm">
                    <div class="jumbotron contact-jumbo">
                        <h2 class="display-4">Protelekom</h2>
                        <p class="lead">e-mail: <a href="mailto:poczta@protelekom.pl">poczta@protelekom.pl</a></p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm">
                    <div class="card mb-4">
                        <h3 class="card-header">Oświęcim</h3>
                        <div class="card-body">
                            <p class="card-text">
                                ul. Łukasiewicza 4<br>
                                tel. +48 33 843 66 92<br>
                                czynne: 09.00 &ndash; 17.00 sob 09.00 &ndash; 13.00
                            </p>        
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card mb-4">
                        <h3 class="card-header">Wadowice</h3>
                        <div class="card-body">
                            <p class="card-text">
                                ul. M.B. Fatimskiej 8A<br>
                                tel. +48 33 872 05 88<br>
                                czynne 10.00 &ndash; 16.30 sob 9.00 &ndash; 13.00
                            </p>        
                        </div>
                    </div>
                </div>
            </div>
@endsection
