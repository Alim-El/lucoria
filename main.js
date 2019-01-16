let toggle = document.getElementsByClassName('header__toggle')[0],
    menuClose = document.getElementsByClassName('menu-close')[0],
    menu = document.getElementsByClassName('header__menu')[0];

toggle.onclick = function menuShow() {
  menu.style.right = 0;
}

menuClose.onclick = function menuShow() {
  menu.style.right = '-100%';
}

