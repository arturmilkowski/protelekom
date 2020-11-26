            <footer class="row mt-2">
                <div class="col-sm">
@if (App::environment() == 'local' || App::environment() == 'testing')
                        env: <strong>{{ App::environment() }}</strong> &bull;
                        action: <strong>{{ Route::currentRouteAction() }}</strong> &bull; route name: <strong>{{ Route::currentRouteName() }}</strong>
@auth
                        &bull; user: <strong>{{ Auth::user()->name }}</strong> &bull; uprawnienia: <strong>{{ Auth::user()->role->display_name }}</strong>
@endauth
@else
                    2000 &mdash; {{ date("Y") }} &mdash;&mdash; {{ config('settings.company_name') }}
@endif
                </div>
            </footer>
