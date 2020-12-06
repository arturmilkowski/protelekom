@extends('frontend.layouts.app')

@section('title', 'Kasa')

@section('noindex')
<meta name="robots" content="noindex">
@endsection

@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>Kasa</h1></div></div>
            <div class="row">
                <div class="col-sm">
                    @include('frontend.includes.basket_no_edit')
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Dostawa: {{ $deliveryCost }} zł.
                    <strong>Razem: {{ $totalPriceAndDeliveryCost }} zł<strong>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm">
                    <a class="btn btn-outline-secondary btn-block" href="{{ route('login') }}" title="logowanie">Zaloguj się i kup <i class="fas fa-sign-in-alt"></i></a>
                </div>
                <div class="col-sm text-center">
                    <a class="btn btn-outline-secondary btn-block" href="{{ route('register') }}" title="zakładanie konta">Załóż konto <i class="fas fa-user-plus"></i></a>
                </div>
                <div class="col-sm text-center">
                    <a class="btn btn-outline-secondary btn-block" href="{{ route('frontend.orders.without_registration.create') }}" title="zamawianie bez rejestracji">Zamów bez rejestracji <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
@endsection
