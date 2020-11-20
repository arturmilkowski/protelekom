@extends('frontend.layouts.app')

@section('title', 'Producenci w kategorii ' . $category->name)
@section('description', 'Producenci w kategorii ' . $category->name)
@section('keywords', $category->name)

@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>{{ $category->name }}</h1></div></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
@forelse ($products as $product)
                <div class="col">
                    <div class="card mb-4">
                        <div class="row no-gutters">
@if ($product->img)
                            <div class="col-md-4">
                                <img src="{{ asset('storage') . '/' . 'img/products' . '/' . $product->img }}" class="card-img" alt="{{ $product->brand->name }} {{ $product->name }}">
                            </div>
@endif
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <a href="{{ route('frontend.product.category.product.index', [$product->category, $product]) }}" title="">
                                            {{ $product->name }}
                                        </a>
                                    </h2>
                                    <a href="{{ route('frontend.product.category.product.index', [$product->category, $product]) }}" class="btn btn-primary" title="{{ $product->brand->name }} {{ $product->name }}">
                                        Pokaż
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@empty
                <h2 class="col text-center">Brak produktów</h2>
@endforelse
            </div>
@endsection