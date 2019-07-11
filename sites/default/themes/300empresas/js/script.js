const hamburger = document.querySelector('#header .hamburger');
const menu = document.querySelector('#header .menu');


function hamburgerActive() {
  if (hamburger.classList.contains('is-active')) {
    hamburger.classList.remove('is-active')
    menu.classList.remove('active')
  } else {
    hamburger.classList.add('is-active')
    menu.classList.add('active')
  }
}

hamburger.addEventListener("click", hamburgerActive);
