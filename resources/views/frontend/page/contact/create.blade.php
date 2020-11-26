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
            <div class="row mt-5 mb-3"><div class="col-sm"><h1><i class="fas fa-address-book"></i> Kontakt</h1></div></div>
            <div class="row mb-5">
                <div class="col-sm">
                    <div class="jumbotron contact-jumbo">
                        <h2 class="display-4">Protelekom</h2>
                        <p class="lead"><i class="fas fa-envelope"></i> e-mail: <a href="mailto:poczta@protelekom.pl">poczta@protelekom.pl</a></p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm">
                    <div class="card mb-4">
                        <h3 class="card-header"><a href="https://www.google.pl/maps/place/O%C5%9Bwi%C4%99cim/@49.9825635,19.3382787,10.25z/data=!4m5!3m4!1s0x471694e04f384c31:0x1e1c6b2131976ebd!8m2!3d50.0343982!4d19.2097782" title="Oświęcim"><i class="far fa-building"></i> Oświęcim</a></h3>
                        <div class="card-body">
                            <p class="card-text">
                                <a href="https://www.google.pl/maps/place/Ignacego+%C5%81ukasiewicza+4,+32-600+O%C5%9Bwi%C4%99cim/@50.0343857,19.2369043,17z/data=!4m5!3m4!1s0x47169509572bcd27:0x167961dd3add9d70!8m2!3d50.0344546!4d19.2368077" title="Oświęcim. ul. Łukasiewicza 4"><i class="fas fa-street-view"></i> ul. Łukasiewicza 4</a><br>
                                <i class="fas fa-phone"></i> tel. +48 33 843 66 92<br>
                                <i class="fas fa-clock"></i> czynne: 09.00 &ndash; 17.00 sob 09.00 &ndash; 13.00
                            </p>        
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card mb-4">
                        <h3 class="card-header"><a href="https://www.google.pl/maps/place/34-100+Wadowice/@49.8562555,19.6025702,10.25z/data=!4m5!3m4!1s0x4716889608939ca5:0xb33fdae9a20eb189!8m2!3d49.8827856!4d19.4939579" title="Wadowice"><i class="far fa-building"></i> Wadowice</a></h3>
                        <div class="card-body">
                            <p class="card-text">
                                <a href="https://www.google.pl/maps/place/aleja+Matki+Bo%C5%BCej+Fatimskiej+8A,+34-100+Wadowice/@49.8816225,19.4939677,17z/data=!4m5!3m4!1s0x471688c6d3dacf93:0xd88a59b3d118e49a!8m2!3d49.8816917!4d19.4939677" title="Wadowice. ul. M.B. Fatimskiej 8A"><i class="fas fa-street-view"></i> ul. M.B. Fatimskiej 8A</a><br>
                                <i class="fas fa-phone"></i> tel. +48 33 872 05 88<br>
                                <i class="fas fa-clock"></i> czynne 10.00 &ndash; 16.30 sob 9.00 &ndash; 13.00
                            </p>        
                        </div>
                    </div>
                </div>
            </div>
@endsection
