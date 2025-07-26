<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
                <span>
                    Broko
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item {{ request()->is('v2/home') ? 'active' : '' }}">
                        <a class="nav-link" href="/v2/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ request()->is('v2/menu') ? 'active' : '' }}">
                        <a class="nav-link" href="/v2/menu">Menu</a>
                    </li>
                    <li class="nav-item {{ request()->is('v2/control') ? 'active' : '' }}">
                        <a class="nav-link" href="/v2/control">Control</a>
                    </li>
                    <li class="nav-item {{ request()->is('v2/contact') ? 'active' : '' }}">
                        <a class="nav-link" href="/v2/contact">Contacto</a>
                    </li>
                </ul>

                @auth
                <div class="user_option">
                    <form class="form-inline">
                        <a wire:click='logout' href="#" class="text-uppercase order_online">
                            Bienvenido, {{ Auth::user()->name }}
                        </a>
                    </form>
                </div>
                @endauth

                @guest
                <div class="user_option">
                    <form class="form-inline">
                        <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                            <!-- Puedes dejarlo vacío o poner un ícono si deseas -->
                        </button>
                    </form>
                    <a href="/v2/register" class="order_online">
                        Registrarse
                    </a>
                </div>
                @endguest
            </div>
        </nav>
    </div>
</header>