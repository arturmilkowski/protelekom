@extends('frontend.layouts.app')

@section('title', $product->brand->name . ' ' . $product->name)
@section('description', $product->brand->name . ' ' . $product->name)
@section('keywords', $product->brand->name . ', ' . $product->name)

@section('content')
            <livewire:frontend.search />
@isset($basket)
            @include('frontend.includes.basket')

@endisset
            <div class="row text-center justify-content-center mt-5 mb-3">
                <div class="col-sm">
                    <h1>{{ $product->brand->name }} {{ $product->name }} <small class="text-muted">{{ $type->name }}</small></h1>
                </div>
            </div>
@if ($type->img)
            <div class="row text-center justify-content-center">
                <div class="col-sm">
                    <img class="img-fluid" src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" alt="{{ $product->brand->name }} {{ $product->name }} {{ $type->name }}">
                </div>
            </div>
@endif
            <div class="row justify-content-center">
            <div class="col-lg-10 mt-5">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Kategoria:</th>
                            <td>{{ $product->category->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Stan:</th>
                            <td>{{ $type->condition->display_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Dostępność</th>
                            <td>@if ($type->quantity > 0) <span class="badge badge-success">Dostępny</span> @else <span class="badge badge-danger">Niedostępny</span> @endif</td>
                        </tr>
@if ($type->description)
                        <tr>
                            <th scope="row">Opis:</th>
                            <td><span class="text-muted">{{ $type->description }}</span></td>
                        </tr>
@endif
                        <tr>
                            <th scope="row">Cena:</th>
                            <td><strong>{{ $type->price }}<strong> zł</td>
                        </tr>
@if ($type->quantity > 0)
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <form action="{{ route('frontend.basket.store', [$type->id]) }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-outline-primary">Do koszyka <i class="fas fa-shopping-basket fa-lg"></i></button>
                                </form>
                            </td>
                        </tr>
@endif
                </table>
            </div>
            </div>
            
            <div class="row mt-5 mb-3">
                <div class="col-sm">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.pages.index') }}" title="Strona główna"><i class="fas fa-home"></i> Strona główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.product.index') }}" title="Produkty"><i class="fas fa-arrow-up"></i> Produkty</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.product.category.product.index', [$category, $product, $type]) }}" title=""><i class="fas fa-arrow-left"></i> Powrót do modelu {{ $product->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
@endsection
