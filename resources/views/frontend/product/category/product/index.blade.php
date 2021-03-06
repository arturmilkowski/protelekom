@extends('frontend.layouts.app')

@section('title', $product->brand->name . ' ' . $product->name)
@section('description', $product->brand->name . ' ' . $product->name)
@section('keywords', $product->brand->name . ', ' . $product->name)

@section('content')
            <livewire:frontend.search />
@isset($basket)
            @include('frontend.includes.basket')

@endisset
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>{{ $product->brand->name . ' ' . $product->name }}</h1></div></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
@foreach ($types as $type)
                <div class="col mb-4">
                    <div class="card h-100 my-shadow-sm">
@if ($type->img)
                        <a href="{{ route('frontend.product.category.product.type.show', [$category, $product, $type]) }}" title="{{ $type->product->brand->name }} {{ $type->product->name }}">
                            <img src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" class="card-img-top" alt="{{ $type->name }}" loading="lazy">
                        </a>
@endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $type->product->brand->name }} <small>{{ $type->product->name }}</small> <small class="text-muted">{{ $type->name }}</small></h2>
                            <h3 class="card-text">Cena: {{ $type->price }} zł</h3>
                            <p class="card-text">@if ($type->quantity > 0) <span class="badge badge-success">Dostępny</span> @else <span class="badge badge-danger">Niedostępny</span> @endif</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="{{ route('frontend.product.category.product.type.show', [$category, $product, $type]) }}" role="button" title="{{ $type->product->brand->name }} {{ $type->product->name }}">
                                Pokaż <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
            <div class="row mt-5 mb-3">
                <div class="col-sm">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.pages.index') }}" title="Strona główna"><i class="fas fa-home"></i> Strona główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.product.category.show', [$category]) }}" title="Kategorie"><i class="fas fa-arrow-left"></i> Powrót do kategorii {{ $category->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
@endsection
