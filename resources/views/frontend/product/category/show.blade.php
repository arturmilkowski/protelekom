@extends('frontend.layouts.app')

@section('title', 'Producenci w kategorii ' . $category->name)
@section('description', 'Producenci w kategorii ' . $category->name)
@section('keywords', $category->name)

@section('content')
            <div class="row mt-5 mb-3"><div class="col-sm"><h1>{{ $category->name }}</h1></div></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
@forelse ($products as $product)
                            <div class="col mb-4">
                                <div class="card">                    
                                    <div class="card-body">
                                        <h2 class="card-title"><a href="{{ route('frontend.product.category.product.index', [$product->category, $product]) }}" title="{{ $product->name }}">{{ $product->name }}</a></h2>
                                        <a href="{{ route('frontend.product.category.product.index', [$product->category, $product]) }}" class="card-link" title="{{ $product->brand->name }} {{ $product->name }}">Pokaż <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>                
@empty
                            <p>Brak produktów</p>
@endforelse
            </div>
@endsection