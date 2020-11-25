{{--
                <div class="card mb-5">
@if ($type->img)
                    <img src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" class="card-img-top" alt="{{ $type->name }}" loading="lazy">
@endif
                    <div class="card-body">
                        <p class="card-title h4 product-name">{{ $type->name }}</p>
                        <p class="card-subtitle h5 mb-2 product-price">{{ $type->price }} zł</p>
@if($type->description)
                        <p class="card-text">{!! Markdown::parse($type->description) !!}</p>
@endif
                        <p class="card-text">
                            <small class="text-muted">sztuk w magazynie: {{ $type->quantity}}</small>
                        </p>
                    </div>
                    <div class="card-footer">
@if ($type->quantity > 0)
                        <form action="{{ route('frontend.basket.store', [$type->id]) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-outline-primary">do koszyka <i class="fas fa-shopping-basket fa-lg"></i></button>
                        </form>
@else
                        <div class="alert alert-danger" role="alert">brak w magazynie</div>
@endif
                    </div>
                </div>
--}}
                <div class="col mb-4">
                    <div class="card h-100">
                @if ($type->img)
                        <a href="{{ route('frontend.product.category.product.type.show', [$type->product->category, $type->product, $type]) }}" title="{{ $type->product->brand->name }} {{ $type->product->name }} {{ $type->name }}">
                            <img src="{{ asset(config('settings.storage.types_storage_path')) . '/' . $type->img }}" class="card-img-top" alt="{{ $type->name }}" loading="lazy">
                        </a>
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
                                </span>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="{{ route('frontend.product.category.product.type.show', [$type->product->category, $type->product, $type]) }}" role="button" title="{{ $type->product->brand->name }} {{ $type->product->name }} {{ $type->name }}">
                                Pokaż <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
