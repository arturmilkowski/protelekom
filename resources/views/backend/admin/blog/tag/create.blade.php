@extends('backend.layouts.app')

@section('title', 'dodawanie tagu')

@section('content')
            @component('backend.components.header')
                dodawanie tagu
            @endcomponent
            <div class="row">
                <div class="col-sm">
                    <form action="{{ route('backend.admins.blogs.tags.store') }}" method="POST" {{--enctype="multipart/form-data"--}} novalidate>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">nazwa</label>
                            <input class="form-control @error('name')is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" maxlength="40" placeholder="pole obowiązkowe" required>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror

                        </div>
                        <a class="btn btn-secondary" href="{{ route('backend.admins.blogs.tags.index') }}" role="button" title="powrót"><i class="fas fa-arrow-left"></i> powrót</a>
                        <button type="submit" class="btn btn-primary" title="zapisywanie"><i class="fas fa-save"></i> zapisz</button>
                    </form>
                </div>
            </div>
@endsection
