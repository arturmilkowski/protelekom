            <div class="row">
                <div class="col-sm">
                    <hr>
                    <small>
@if (App::environment() == 'local' || App::environment() == 'testing')
                        env: <strong>{{ App::environment() }}</strong> &bull;
                        action: <strong>{{ Route::currentRouteAction() }}</strong> &bull; route name: <strong>{{ Route::currentRouteName() }}</strong>
@auth
                        &bull; user: <strong>{{ Auth::user()->name }}</strong> &bull; uprawnienia: <strong>{{ Auth::user()->role->display_name }}</strong>
                        &bull; laravel {{ Illuminate\Foundation\Application::VERSION }} 
                        &bull; php {{ PHP_VERSION }}
@endauth
@else
                        <div class="float-left text-black-50">2000 &mdash; {{ date("Y") }} {{ config('settings.company_name') }}</div>
                        <div class="float-right text-black-50">l.{{ Illuminate\Foundation\Application::VERSION }} p.{{ PHP_VERSION }}</div>
@endif
                    </small>
                </div>
            </div>
