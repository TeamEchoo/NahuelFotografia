<div class="nav-header">

<div class="main-mobile-container">
  <div class="nav-header-logo">
    <x-logo />
  </div>

  <div class="main-menu-button">
    <div class="main-menu-bar main-menu-bar-one"></div>
    <div class="main-menu-bar main-menu-bar-two"></div>
    <div class="main-menu-bar main-menu-bar-three"></div>
  </div>
</div>


<nav class="main-nav">
  <ul class="main-nav-list">

    @auth
      <li class="main-nav-list-item"><a class="main-link main-list-link" 
        href="{{ route('album') }}">BACK TO DASHBOARD</a></li>
    @endauth

    <li class="main-nav-list-item"><a class="main-link main-list-link" 
    href="{{ route('home') }}">OVERVIEW</a></li>

    <li class="main-nav-list-item"><a class="main-link main-list-link" 
    href="{{ route('editorial') }}">EDITORIAL</a></li>

    <li class="main-nav-list-item"><a class="main-link main-list-link" 
    href="{{ route('more') }}">MORE</a></li>

    <li class="main-nav-list-item"><a class="main-link main-list-link" href="https://www.etsy.com/es/shop/NahuelMartinezphoto">STORE</a></li>

    <li class="main-nav-list-item"><a class="main-link main-list-link" 
    href="{{ route('contact') }}">CONTACT</a></li>

    @auth
      <li class="main-nav-list-item"><a class="main-link main-list-link" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">LOGOUT</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf</form>
      </li>
    @endauth

    
    
  </ul>
</nav>
</div>


<script src="{{asset('js/navBarBurguer.js')}}"></script>