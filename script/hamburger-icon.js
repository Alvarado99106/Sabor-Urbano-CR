
function toggleMenu() {
    const menu = document.getElementById("nav-menu");
    const hamburger = document.querySelector('.hamburger-icon');
    menu.classList.toggle("active");
    hamburger.classList.toggle("active");
}

document.querySelector('.hamburger-icon').addEventListener('click', toggleMenu);
