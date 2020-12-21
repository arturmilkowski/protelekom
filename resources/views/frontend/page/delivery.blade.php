@extends('frontend.layouts.app')

@section('title', 'Dostawa')
@section('description', 'Koszty dostawy. Sposób pakowania przesyłki')
@section('keywords', 'koszty dostawy, pakowanie przesyłki')

@section('content')
            <div class="container">
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>Dostawa</h1></div></div>
            <div class="row row-cols-1 row-cols-md-2">
@foreach ($deliveries as $delivery)
                <div class="col">
                    <div class="card">
@if ($delivery->img)
                        <img src="{{ asset('storage/img') }}/{{ $delivery->img }}" class="card-img-top" alt="{{ $delivery->display_name }}">
@endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $delivery->display_name }}</h5>
                            <p class="card-text">
@if ($delivery->description )
                                {{ $delivery->description }}
@endif

                                <table class="table">
                                    <tbody>
@foreach ($delivery->methods as $method)
                                        <tr>
                                            <th scope="row">{{ $method->display_name }}</th>
                                            <td>
                                                <table class="table table-sm">
                                                    {{--
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">--</th>
                                                            <th scope="col">Cena</th>
                                                        </tr>
                                                    </thead>
                                                    --}}
                                                    <tbody>
@foreach ($method->costs as $cost)
                                                        <tr>
                                                            <td>{{ $cost->description }}</td>
                                                            <td>{{ $cost->cost }} zł</td>
                                                        </tr>
@endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
@endforeach
                                    </tbody>
                                </table>
                            </p>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
            <div class="row mt-5 mb-2"><div class="col-sm"><h2>Sposób płatności</h2></div></div>
            <div class="row">
                <div class="col-sm">{{ $methodOfPayment }}</div>
            </div>
{{--
            <div class="row mt-5 mb-2"><div class="col-sm"><h2>Pakowanie</h2></div></div>
            <div class="row">
                <div class="col-sm">
                    przesyłka dostarczana jest w kopercie bąbelkowej.
                    każda butelka zapakowana jest w papier i dodatkowo owijana gumką, która amortyzuje uderzenia i otarcia.
                    ryzyko rozbicia lub uszkodzenia jest minimalne.
                </div>
            </div>
            <div class="row mt-5 mb-2"><div class="col-sm"><h2>Czas realizacji</h2></div></div>
            <div class="row">
                <div class="col-sm">
                    paczka najczęściej jest wysyłana w dniu gdy należność pojawi się na koncie lub na dzień następny.
                    do całkowitego czasu oczekiwania należy doliczyć czas poczty polskiej, w którym dostarcza przesyłkę.
                </div>
            </div>
            </div>
--}}
@endsection
