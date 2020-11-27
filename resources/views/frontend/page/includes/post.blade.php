                <div class="col mb-3">
                    <article class="card h-100 mb-5 my-shadow-sm">
@if ($post->img)
                        <a href="{{ route('frontend.blog.posts.show', $post) }}" title="czytaj dalej">
                            <img src="{{ asset('storage') . config('settings.storage.posts_storage_path') . '/' . $post->img }}" class="card-img-top" alt="{{ $post->title }}" loading="lazy">
                        </a>
@endif
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ route('frontend.blog.posts.show', $post) }}" title="Czytaj dalej">{{ $post->title }}</a></h4>
                            <p class="card-text">{!! $post->intro !!}</p>
                            <p class="card-text"><small class="text-muted"><time datetime="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</time></small></p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('frontend.blog.posts.show', $post) }}" title="Cały wpis">
                                Czytaj dalej <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
