const menu = document.querySelector(".menu");
const menuBtn = document.querySelector(".menu-btn");
const dropdown = document.querySelector(".b-dropdown");
let menuOpen = false;

menu.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        dropdown.classList.add('visible');
        dropdown.classList.add('open');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open')
        dropdown.classList.remove('visible');
        dropdown.classList.remove('open');
        menuOpen = false;
    }
})