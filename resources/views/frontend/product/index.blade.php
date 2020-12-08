@extends('frontend.layouts.app')

@section('title', 'Produkty')
@section('description', 'Produkty')
@section('keywords', 'telefony komórkowe, smartfony, tablety, alkomaty')

@section('content')
@isset($basket)
            @include('frontend.includes.basket')

@endisset
            <div class="row mt-5 mb-3"><div class="col-sm"><h1><i class="fas fa-th"></i> Kategorie</h1></div></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
@forelse ($categories as $category)
            <div class="col mb-4">
                <div class="card">                    
                    <div class="card-body">
                        <h2 class="card-title"><a href="{{ route('frontend.product.category.show', [$category]) }}" title="">{{ $category->name }}</a></h2>
                    </div>
                </div>
            </div>                
@empty
                <p>Brak kategorii</p>
@endforelse
            </div>
@endsection
