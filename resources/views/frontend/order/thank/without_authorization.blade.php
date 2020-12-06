@extends('frontend.layouts.app')

@section('title', 'Dziękujemy za zamówienie bez rejestracji')

@section('noindex')
<meta name="robots" content="noindex">
@endsection

@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>Dziękujmy za zamówienie (bez rejestracji)</h1></div></div>
            <div class="row mb-3"><div class="col-sm text-center"><h2>Podsumowanie</h2></div></div>
            <div class="row">
                <div class="col-sm">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Numer zamówienia (podaj jako tytuł przelewu)</th>
                                <td>{{ $number }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Numer konta</th>
                                <td>{{ config('settings.account_number') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Do zapłaty (w tym koszt przesyłki)</th>
                                <td>{{ number_format($total_price_and_delivery_cost, 2) }} zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Sposób płatności</th>
                                <td>{{ $methodOfPayment }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Dokument zakupu:</th>
                                <td>{{ $sale_document }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Przesyłka</th>
                                <td>{{ $delivery_name }}. Koszt {{ $delivery_cost }} zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Dane firmy</th>
                                <td>
                                    <ul class="list-unstyled">
                                        <li>{{ config('settings.company_name') }}</li>
                                        <li>{{ config('settings.company_address.street') }}</li>
                                        <li>
                                            {{ config('settings.company_address.zip_code') }} 
                                            {{ config('settings.company_address.city') }}
                                        </li>
                                        <li>{{ config('settings.company_address.voivodeship') }}</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Dostawa na adres</th>
                                <td>
                                    <ul class="list-unstyled">
                                        <li>{{ $name }} {{ $lastname }}</li>
                                        <li>{{ $street }}</li>
                                        <li>{{ $zip_code }} {{ $city }}</li>
                                        <li>{{ $voivodeship }}</li>
@if ($phone)
                                        <li>Tel: {{ $phone }}</li>
@endif
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <a href="{{ route('frontend.pages.index') }}" title="strona główna"><i class="fas fa-home"></i> Strona główna</a>
                </div>
            </div>
@endsection
