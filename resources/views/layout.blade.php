<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/layout.css">

    @yield('css')
    @yield('js')

    <title>
      @yield('titulo')
    </title>
  </head>
  <body>
    <div class="container">
      <header class="row bg-primary ">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
          <a class="navbar-brand text-white" href="/">Pet-Shop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="/productos">
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/categorias">
              Categorias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/marcas">
              Marcas
            </a>
          </li>
        @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link text-white" href="/productos/add/">
              Agregar Producto
            </a>
          </li>
        @endif

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if (Auth::check())
                {{-- <img src="/storage/{{Auth::user()->avatar}}" alt="" id="perfil"> --}}
                {{Auth::user()->name}}
              @else
                Usuarios
              @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @if (Auth::check())


                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              @else
                <a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesión</a>
                <a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>
              @endif
            </div>
          </li>

          @if (Auth::check())
          <li class="nav-item  text-white pt-2">
           {{-- Bienvenido {{Auth::user()->name}} --}}
             <img src="/storage/{{Auth::user()->avatar}}" alt="" id="perfil">
          </li>

          @endif


        </ul>
        <div class="carrito">
          <a href="#" class="text-white">
            Carrito
            <i class="fas fa-cart-plus"></i>
          </a>
        </div>
          </div>
        </nav>
      </header>
      <main>
        @yield('main')
      </main>
      <footer>

        <div class="row bg-primary justify-content-center text-white">
          <h6 class="mt-3">
            <i class="far fa-copyright"></i>
            2019 - PET SHOP - <strong>Todos los derechos reservados.</strong>
          </h6>
        </div>

      </footer>

    </div>
    <script src="https://kit.fontawesome.com/76186c1f83.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
