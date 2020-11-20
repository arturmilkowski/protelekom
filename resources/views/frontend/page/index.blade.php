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
{{--
@if ($posts->count() > 0)
            <div class="row mt-5 mb-3"><h6 class="h1 col-sm"><a href="{{ route('frontend.blog.posts.index') }}" title="Blog">Blog</a></h6></div>
            <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 mb-5">
@foreach ($posts as $post)
                @include('frontend.page.includes.post', ['post' => $post])
@endforeach
            </div>
@endif
--}}
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
            <div class="row mt-5 mb-3"><h5 class="h1 col-sm"><a href="{{ route('frontend.product.index') }}" title="Produkty">Produkty</a></h5></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
@foreach ($types as $type)
                <div class="col mb-4">
                    <div class="card h-100">
@if ($type->img)
                        <img src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" class="card-img-top" alt="{{ $type->name }}" loading="lazy">
@endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $type->product->brand->name }} <small>{{ $type->product->name }}</small> <small class="text-muted">{{ $type->name }}</small></h2>
                            <h3 class="card-text">Cena: {{ $type->price }} zł</h3>
                            <p class="card-text">@if ($type->quantity > 0) <span class="badge badge-success">Dostępny</span> @else <span class="badge badge-danger">Niedostępny</span> @endif</p>
                            <p class="card-text">
                                <span class="text-muted">
                                    {{--
                                    <a href="{{ route('frontend.product.type.show', [$type->product->brand, $type->product, $type]) }}" title="{{ $type->product->name }}">
                                        Pokaż <i class="fas fa-angle-right"></i>
                                    </a>
                                    --}}

                                    <a class="btn btn-primary"
                                        href="{{ route('frontend.product.category.product.type.show', [$type->product->category, $type->product, $type]) }}"
                                        role="button" title="{{ $type->product->brand->name }} {{ $type->product->name }} {{ $type->name }}">
                                        Pokaż 
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
@endif
@endsection
