        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('frontend.pages.index') }}" title="Strona główna">
                <img src="{{ asset('storage/img/protelekom.png') }}" weight="240" height="18" alt="Protelekom">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @if($currentRouteName == 'frontend.pages.index') active @endif">
                        <a class="nav-link" href="{{ route('frontend.pages.index') }}" title="Strona główna">Strona główna @if($currentRouteName == 'frontend.pages.index')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                    <li class="nav-item @if($currentRouteName == 'frontend.product') active @endif">
                        <a class="nav-link" href="{{ route('frontend.product.index') }}" title="Kategorie produków">Produkty @if($currentRouteName == 'frontend.product')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                    <li class="nav-item @if($currentRouteName == 'frontend.blog') active @endif">
                        <a class="nav-link" href="{{ route('frontend.blog.posts.index') }}" title="Aktualne informacje">Informacje @if($currentRouteName == 'frontend.blog')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                    <li class="nav-item @if($currentRouteName == 'frontend.pages.service') active @endif">
                        <a class="nav-link" href="{{ route('frontend.pages.service') }}" title="Serwis">Serwis @if($currentRouteName == 'frontend.pages.service')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                    {{--
                    <li class="nav-item @if($currentRouteName == 'frontend.pages.question') active @endif">
                        <a class="nav-link" href="{{ route('frontend.pages.question') }}" title="najczęściej zadawane pytania i odpowiedzi">pytania @if($currentRouteName == 'frontend.pages.question')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                    <li class="nav-item @if($currentRouteName == 'frontend.pages.delivery') active @endif">
                        <a class="nav-link" href="{{ route('frontend.pages.delivery') }}" title="koszty i sposoby dostawy">dostawa @if($currentRouteName == 'frontend.pages.delivery')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                    <li class="nav-item @if($currentRouteName == 'frontend.pages.term_condition') active @endif">
                        <a class="nav-link" href="{{ route('frontend.pages.term_condition') }}" title="regulamin sklepu">regulamin @if($currentRouteName == 'frontend.pages.term_condition')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                    --}}
                    <li class="nav-item @if($currentRouteName == 'frontend.pages.contacts') active @endif">
                        <a class="nav-link" href="{{ route('frontend.pages.contacts.create') }}" title="Kontakt">Kontakt @if($currentRouteName == 'frontend.pages.contacts')<span class="sr-only">(current)</span>@endif</a>
                    </li>
                </ul>
@auth
                <a class="btn btn-sm btn-outline-secondary mr-1" href="{{ route('home') }}" role="button" title="Konto">Konto <i class="fas fa-user-cog"></i></a>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}" role="button" title="Wylogowanie" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Wyloguj <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" class="form-inline" action="{{ route('logout') }}" method="POST" style="display: none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
@else
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('frontend.login_register.index') }}" role="button" title="Zaloguj się lub załóż konto">Zaloguj <i class="fas fa-sign-in-alt"></i></a>
@endauth
            </div>
        </nav>
