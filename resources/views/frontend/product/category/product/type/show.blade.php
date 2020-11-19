@extends('frontend.layouts.app')

@section('title', $product->brand->name . ' ' . $product->name)
@section('description', $product->brand->name . ' ' . $product->name)
@section('keywords', $product->brand->name . ', ' . $product->name)

@section('content')
            <div class="row mt-5 mb-3">
                <div class="col-sm">
                    <h1>{{ $product->brand->name }} {{ $product->name }} <small class="text-muted">{{ $type->name }}</small></h1>
                </div>
            </div>
@if ($type->img)
            <div class="col-sm">
                <img src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" class="" alt="{{ $product->brand->name }} {{ $product->name }} {{ $type->name }}">
            </div>
@endif
            <div class="col-sm mt-5">
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
                </table>
            </div>
@endsection
