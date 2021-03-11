
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

      <li class="main-nav-list-item"><a class="main-link main-list-link" 
      href="{{ route('home') }}">OVERVIEW</a></li>

      <li class="main-nav-list-item"><a class="main-link main-list-link" 
      href="{{ route('categoryAlbum', 'Editorial') }}">EDITORIAL</a></li>

      <li class="main-nav-list-item"><a class="main-link main-list-link" 
      href="{{ route('categoryAlbum', 'More') }}">MORE</a></li>

      <li class="main-nav-list-item"><a class="main-link main-list-link" href="#">STORE</a></li>
      
    </ul>
  </nav>
</div>

<script>
  let menuButton = document.querySelector(".main-menu-button");
  let navItems = document.querySelector(".main-nav");
  let barHide = document.querySelector(".main-menu-bar-two");
  let barLeft = document.querySelector(".main-menu-bar-one");
  let barRight = document.querySelector(".main-menu-bar-three");

  menuButton.onclick = openMenu;

  function openMenu() {
    navItems.classList.toggle("toggle-main-nav");
    barHide.classList.toggle("hide-bar-two");
    barLeft.classList.toggle("cross-bar-one");
    barRight.classList.toggle("cross-bar-three");
  }
</script>