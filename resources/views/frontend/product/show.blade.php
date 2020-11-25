@extends('frontend.layouts.app')
@section('title', $product->name)
@section('description', $product->site_description)
@section('keywords', $product->site_keyword)
@section('og_type', 'product')
@if ($product->types->count() > 0)
@if (isset($product->types[0]))
@section('og_image', asset(config('settings.storage.types_storage_path')) . '/' . $product->types[0]->img)
@endif
@endif
{{--
@section('ldjson')
        @include('frontend.product.includes.ld_json')
@endsection
--}}
@section('content')
@isset($basket)
            @include('frontend.includes.basket')

@endisset
            <div>
                <h1 class="mt-5 mb-3">{{ $product->name }}</h1>
            </div>
            <div class="card-deck">
@forelse ($product->types as $type)
                <div class="card">
@if ($type->img)
                    <img class="card-img-top" src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" alt="{{ $product->name }} {{ $type->name }}" loading="lazy">
@endif
                    <div class="card-body">
                        <h2 class="card-title">{{ $type->name }} {{ $product->category->name }} {{-- $product->concentration->name --}}</h2>
                        <h3 class="card-text">{{ $type->price }} zł</h3>
                        <p class="card-text"><small class="text-muted">sztuk w magazynie: {{ $type->quantity}}</small></p>
@if ($type->description)
                        <p class="card-text"><span class="text-muted">{{ $type->description }}</span></p>
@endif
@if ($type->quantity > 0)
                        {{--
                        <form action="{{ route('frontend.basket.store', [$type->id]) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-outline-primary">do koszyka <i class="fas fa-shopping-basket fa-lg"></i></button>
                        </form>
                        --}}
@else
                        <div class="alert alert-danger" role="alert">brak w magazynie</div>
@endif
                    </div>
                </div>                
@empty
                <h2 class="col text-center">Brak typów</h2>
@endforelse
            </div>
            <div class="row mt-3">
                <div class="col-sm">
                    <a href="{{ route('frontend.product.index') }}" title="powrót do poprzedniej strony"><i class="fas fa-arrow-left"></i> Powrót</a>
                </div>
            </div>
@endsection
