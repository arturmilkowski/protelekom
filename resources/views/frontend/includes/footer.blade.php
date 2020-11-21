            <footer class="row">
                <div class="col-sm">
@if (App::environment() == 'local' || App::environment() == 'testing')
                        env: <strong>{{ App::environment() }}</strong> &bull;
                        action: <strong>{{ Route::currentRouteAction() }}</strong> &bull; route name: <strong>{{ Route::currentRouteName() }}</strong>
@auth
                        &bull; user: <strong>{{ Auth::user()->name }}</strong> &bull; uprawnienia: <strong>{{ Auth::user()->role->display_name }}</strong>
@endauth
@else
                        2000 &mdash; 2020
                        &mdash;&mdash;
                        {{ config('settings.company_name') }}
                        &mdash;&mdash;
                        <a href="{{ route('frontend.pages.cookie') }}" title="Pliki cookie">Informacje o ciastkach</a>
                        &mdash;&mdash;
                        <a href="{{ route('frontend.pages.privacy_policy') }}" title="Polityka prywatności">Polityka prywatności</a>
                        &mdash;&mdash;
                        <a href="{{ route('frontend.pages.rodo') }}" title="Prawa przysługujące z tytułu rodo">RODO</a>
                        &mdash;&mdash;
                        <a href="{{ config('settings.facebook') }}" title="facebook"><i class="fab fa-facebook-f"></i> Polub nas na Facebooku</a>
@endif
                </div>
            </footer>
