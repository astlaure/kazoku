require('./bootstrap');
require('./alpine');

window.toggleNavbarMenu = function () {
    const navbarMenus = document.getElementById('navbar-menus');
    navbarMenus.classList.toggle('visible');
}
