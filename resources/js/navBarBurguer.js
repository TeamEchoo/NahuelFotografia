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