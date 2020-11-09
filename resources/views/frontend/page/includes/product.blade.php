                <div class="col">
                    <div class="card my-post-card">
@if ($product->img)
                        <a href="{{ route('frontend.product.show', $product) }}" title="{{ $product->name }}">
                            <img src="{{ asset(config('settings.storage.products_storage_path')) . '/' . $product->img }}" class="card-img-top" alt="{{ $product->name }}">
                        </a>
@endif
                        <div class="card-body">
                            <h2 class="card-title"><a href="{{ route('frontend.product.show', $product) }}" title="{{ $product->name }}">{{ $product->name }}</a></h2>
                            <h3 class="card-text">Kategoria: {{ $product->category->name }}</h3>
                            <p class="card-text"><span class="text-muted">{!! $product->description !!}</span></p>
                            <p class="card-text">
                                <span class="text-muted">
                                    <a href="{{ route('frontend.product.show', $product) }}" title="{{ $product->name }}">
                                        pokaż <i class="fas fa-angle-right"></i>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
