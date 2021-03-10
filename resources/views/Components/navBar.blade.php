<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light  navbar__menu">
    <div class="container-fluid" id="header">
      <x-logo />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">OVERVIEW</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categoryAlbum', 'Editorial') }}">EDITORIAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categoryAlbum', 'More') }}">MORE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">STORE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
          </li>


        @if(Auth::user())
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
            </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
        @endif
            
            
          <li class="nav-item1">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>
      </div>
    </div>
</nav>