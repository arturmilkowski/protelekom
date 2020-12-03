<div>
    <form>
        <div class="form-group mt-5 mb-5">
            <input wire:model="search" wire:keydown.escape="handleEscape" type="text" class="form-control" placeholder="Wpisz szukaną frazę">
        </div>
    </form>
{{--
    <div wire:loading class="spinner-border text-secondary mb-3" role="status">
        <span class="sr-only">Loading...</span>
    </div>
--}}
@if ($searchedProducts->count() > 0)
    <table class="table mb-3">
        <thead>
            <tr>
                <th class="table-light" colspan="3" scope="col">Produkty</th>
            </tr>
        </thead>
        <tbody>
@foreach($searchedProducts as $product)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><a href="{{ route('frontend.product.category.product.index', [$product->category, $product->slug]) }}" title="{{ $product->name }}">{{ $product->name }}</a></td>
                <td>{{ $product->brand->name }}</td>
            </tr>
@endforeach
        </tbody>
    </table>
@endif

@if ($searchedPosts->count() > 0)
    <table class="table mb-3">
        <thead>
            <tr>
                <th class="table-light" colspan="2" scope="col">Informacje</th>
            </tr>
        </thead>
        <tbody>
@foreach($searchedPosts as $post)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><a href="{{ route('frontend.blog.posts.show', $post) }}" title="{{ $post->intro }}">{{ $post->title }}</a></td>
            </tr>
@endforeach
        </tbody>
    </table>
@endif
</div>
