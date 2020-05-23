 <header class="navbar">
    <!-- ínicio header -->
    <a href="/" class="logo">
        <h1 class="logo__replacement">Sinapse</h1>
    </a>
    <img src="{{asset('img/menu.svg')}}" class="navbar__trigger" alt="Menu" title="Menu">

    <nav class="navbar__menu">
        @auth
        <div class="dropdown-nav">
            <a role="button" class="dropdown-nav__trigger navbar__menu__item" data-target="notifications">
                <i class='bx bxs-bell notification-bell notification-bell--active' aria-label="Sino de notificação"></i>
                <span class="only-sm">Notificações</span>
            </a>
            <nav class="dropdown-nav__menu notifications-menu" id="notifications">
                <a href="#" class="dropdown-nav__menu__item">
                    <i class='bx bxs-message-alt-error notification-warning' ></i>
                    Programação PP marcou um encontro
                </a>
                <a href="#" class="dropdown-nav__menu__item">
                    <i class='bx bxs-message-alt-error notification-warning'></i>
                    Programação PP marcou um encontro
                </a>
            </nav>
        </div>
        <a href="#" class="navbar__menu__item btn-primary toggle" data-target="grupoModal">
            <i class='bx bx-plus-circle left-button-icon' ></i>
            Grupo
        </a>
        <a href="#" class="navbar__menu__item ">
            <i class='bx bxs-chat left-button-icon'></i>
            Chat
        </a>
        <div class="dropdown-nav">
            <a role="button" class="dropdown-nav__trigger navbar__menu__item" data-target="user-options">
                <img src="{{asset('img/coruja-perfil.svg')}}" alt="Sua foto de perfil" class="profile-image-header left-button-icon">
                {{Auth::user()->name}}
                <i class='bx bx-chevron-down dropdown-icon'></i>
            </a>
            <nav class="dropdown-nav__menu" id="user-options">
                <a href="#" class="dropdown-nav__menu__item dropdown-nav__trigger" data-target="sub_meu_perfil">
                    <i class='bx bxs-user-rectangle left-button-icon user-options-icon' ></i>
                    Meu Perfil
                    <i class='bx bx-chevron-down dropdown-icon'></i>
                </a>
                <nav class="dropdown-nav__sub" id="sub_meu_perfil">
                    <a href="#" class="dropdown-nav__sub__item">Ver Meu Perfil</a>
                    <a href="{{route('interesses')}}" class="dropdown-nav__sub__item">Meus Interesses</a>
                    <a href="#" class="dropdown-nav__sub__item">PREMIUM GRÁTIS</a>
                </nav>
                <a href="#" class="dropdown-nav__menu__item">
                    <i class='bx bxs-message-alt-error left-button-icon user-options-icon'></i>
                    Amigos
                </a>
                <a href="{{route('logout')}}" class="dropdown-nav__menu__item"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class='bx bxs-exit left-button-icon user-options-icon'></i>
                    Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="{{route('register')}}" class="navbar__menu__item">
                    Cadastrar

                </a>
                <a href="{{route('login')}}" class="navbar__menu__item ">
                    Login
                </a>
                @endauth
            </nav>
        </div>
    </nav>
</header>

@include('layouts.modal')