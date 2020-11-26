@extends('frontend.layouts.app')
@section('gtag')
        @include('frontend.includes.gtag')
@endsection
@section('title', config('settings.company_name'))
@section('content')
@isset($basket)
            @include('frontend.includes.basket')

@endisset
            {{--@include('frontend.page.includes.slogan')--}}

@if ($posts->count() > 0)
            <div class="row mt-5 mb-2">
                <h6 class="h2 col-sm">
                    <a href="{{ route('frontend.blog.posts.index') }}" title="Aktualne informacje"><i class="far fa-newspaper"></i> Informacje</a>
                </h6>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mb-5">
@foreach ($posts as $post)
                @include('frontend.page.includes.post', ['post' => $post])
@endforeach
            </div>
@endif

{{--
@if ($products->count() > 0)
            <div class="row mt-5 mb-3"><h5 class="h1 col-sm"><a href="{{ route('frontend.product.index') }}" title="Produkty">Produkty</a></h5></div>
            <div class="row row row-cols-xs-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
@foreach ($products as $product)
                @include('frontend.page.includes.product', ['product' => $product])
@endforeach
            </div>
@endif
--}}

@if ($types->count() > 0)
            <div class="row mt-5 mb-2">
                <h5 class="h2 col-sm">
                    <a href="{{ route('frontend.product.index') }}" title="Produkty"><i class="fab fa-product-hunt"></i> Produkty</a>
                </h5>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
@foreach ($types as $type)
                @include('frontend.page.includes.type', ['type' => $type])
@endforeach
            </div>
@endif
@endsection
