                <div class="col mb-3">
                    <div class="card h-100 my-shadow-sm">
@if ($type->img)
                        <a href="{{ route('frontend.product.category.product.type.show', [$type->product->category, $type->product, $type]) }}" title="{{ $type->product->brand->name }} {{ $type->product->name }} {{ $type->name }}">
                            <img class="card-img-top" src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" alt="{{ $type->name }}" loading="lazy">
                        </a>
@endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $type->product->brand->name }} <small>{{ $type->product->name }}</small> <small class="text-muted">{{ $type->name }}</small></h2>
                            <h3 class="card-text">Cena: {{ $type->price }} zł</h3>
                            <p class="card-text">@if ($type->quantity > 0) <span class="badge badge-success">Dostępny</span> @else <span class="badge badge-danger">Niedostępny</span> @endif</p>
                        </div>
                        <div class="card-footer">
                            <form action="{{ route('frontend.basket.store', [$type->id]) }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a class="btn btn-primary" href="{{ route('frontend.product.category.product.type.show', [$type->product->category, $type->product, $type]) }}" role="button" title="{{ $type->product->brand->name }} {{ $type->product->name }} {{ $type->name }}">
                                    Pokaż <i class="fas fa-angle-right"></i>
                                </a>
@if ($type->quantity > 0)
                                {{--<button type="submit" class="btn btn-outline-primary">do koszyka <i class="fas fa-shopping-basket fa-lg"></i></button>--}}
@endif
                            </form>
                        </div>
                    </div>
                </div>
