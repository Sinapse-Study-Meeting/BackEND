<header class="navbar">
    <!-- ínicio header -->
    <a href="/" class="logo">
       <h1 class="logo__replacement">Sinapse</h1>
    </a>
    <img src="{{ asset('img/menu.svg') }}" class="navbar__trigger" alt="Menu" title="Menu">

    <nav class="navbar__menu">
        @guest
        <a href="/login"><i class="fas fa-graduation-cap fa-1x"></i> LOGIN</a>
        <a href="/register"><i class="fas fa-graduation-cap fa-1x"></i> CADASTRE-SE</a>
       @else
       <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
       <a href="#"><i class="fas fa-graduation-cap fa-1x"></i> PREMIUM</a>
       <a href="#"><i class="fas fa-graduation-cap fa-1x"></i> SOBRE</a>
    </nav>
 </header> <!-- fim do header -->