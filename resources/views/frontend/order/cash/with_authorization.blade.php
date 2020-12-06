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

            <div class="row mt-2 mb-3"><div class="col-sm text-center"><h2>Dostawa</h2></div></div>
            <div class="row">
                <div class="col-sm mb-5">
                    @include('frontend.order.includes.delivery', ['deliveryName' => $deliveryName, 'deliveryCost' => $deliveryCost])
                </div>
            </div>

            <div class="row mt-2 mb-3"><div class="col-sm text-center"><h2>Sposób płatności</h2></div></div>
            <div class="row">
                <div class="col-sm mb-5">
                    @include('frontend.order.includes.payment_method', ['methodOfPayment' => $methodOfPayment])
                </div>
            </div>

            <div class="row mt-2 mb-3"><div class="col-sm text-center"><h2>dane</h2></div></div>
            <div class="row">
                <div class="col-sm">
                    @include('frontend.includes.personal_data')
                </div>
            </div>
@if ($deliveryAddress)
            <h2 class="text-center">Adres dostawy</h2>
            <div class="row">
                <div class="col-sm">
                    @include('frontend.includes.delivery_address')
                </div>
            </div>
@endif
            <div class="row">
                <div class="col-sm">
                    <form action="{{ route('frontend.orders.with_registration.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <small class="form-text text-muted">Rachunek lub faktura dostępna do wydrukowania w każdym momencie w panelu administracyjnym</small>
                            @include('frontend.order.includes.sale_document', ['saleDocuments' => $saleDocuments ])
                        </div>
                        
                        <div class="form-group">
                            <label for="comment">Komentarz do zamówienia</label>
                            <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" maxlength="1000" rows="3" placeholder="komentarz do zamówienia">{{ old('comment') }}</textarea>
                            @error('comment')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input @error('term')is-invalid @enderror" id="term" name="term" value="term" @if (old('term')) checked @endif>
                            <label class="form-check-label" for="term">Akceptuję regulamin</label>
                            @error('term')<div class="invalid-feedback">{{ $message }}</div>@enderror

                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Wyślij zamówienie <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
@endsection
