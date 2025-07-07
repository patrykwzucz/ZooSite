<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('animals.index') }}">Animals</a>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ticket.index') }}">Ticket types</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('reservation.index') }}">Reservations</a>
          </li>
          @auth
          <li class="nav-item">
              <a class="nav-link" href="{{ route('panel.index') }}">Your Panel</a>
          </li>
          @endauth
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">{{ Auth::user()->name }}, log out </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
