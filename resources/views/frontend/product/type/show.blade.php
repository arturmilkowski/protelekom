@extends('frontend.layouts.app')
@section('title', $brand->name . ' ' . $product->name)

@section('content')
            <div class="card mt-5 mb-3" style="width: 675px;">
@if ($type->img)
                <img src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" class="card-img-top" alt="{{ $brand->name }} {{ $product->name }} {{ $type->name }}">
@endif
                <div class="card-body">
                    <h1 class="card-title">{{ $brand->name }} {{ $product->name }}</h1>
                    <h3 class="card-subtitle mb-5 text-muted">{{ $type->name }}</h3>
                    <p class="card-text mb-1">{{ $product->category->name }}</p>
                    <h3 class="card-text">{{ $type->price }} zł</h3>
                    <p class="card-text">Stan: {{ $type->condition->name }}</p>
                    <p class="card-text"><small class="text-muted">sztuk w magazynie: {{ $type->quantity }}</small></p>
@if ($type->description)
                    <p class="card-text"><span class="text-muted">{{ $type->description }}</span></p>
@endif
                    <a href="{{ route('frontend.pages.index') }}" class="card-link" title="Strona główna">Strona główna</a>
                    <a href="{{ route('frontend.product.index') }}" class="card-link" title="Produkty">Produkty</a>
                </div>
            </div>
@endsection
