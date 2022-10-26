<style>
  nav.tam{
    height: 45px;
  }
  a.botonsanjorge{
    padding-left: 20px;
  }
</style>

<nav class="navbar navbar-expand-lg bg-light tam">
    <div class="container-fluid">
      <a class="navbar-brand botonsanjorge" href="#">San Jorge</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Inicio</a>
          </li>
        </ul>
          @auth
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name ??  auth()->user()->email }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                  @if ( Auth::user()->rol == 'admin' )
                    <li><a class="dropdown-item" href="/register">Registrar usuario</a></li>
              
                  
                  @endif

                    
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/logout">Salir</a></li>
                </ul>
                </li>
            </ul>
          @endauth
          
          @guest
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link" href="/login" id="navbarDropdown" role="button"  aria-expanded="false">
                    Iniciar Sesion
                </a>
            </ul>
          @endguest
      </div>
    </div>
  </nav>