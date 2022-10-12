'use strict'
const menuGet = document.querySelector('.menu');
const buttonMobile = document.querySelector('.button-mobile');
const buttonLink = document.querySelector('.button-link');
const hamburger = document.querySelector('.hamburger');
const linksGet = document.querySelectorAll('.menu-link');

const setActive = function () {
    if (menuGet.classList.contains('active')) {
        menuGet.classList.remove('active');
        hamburger.classList.remove('active');
        buttonLink.classList.remove('active');
    } else {
        menuGet.classList.add('active');
        hamburger.classList.add('active');
        buttonLink.classList.add('active');
    }
};

document.addEventListener('click', function (e) {
    if (!e.composedPath().includes(menuGet) && !e.composedPath().includes(buttonMobile)) {
        menuGet.classList.remove('active');
        hamburger.classList.remove('active');
        buttonLink.classList.remove('active');
    };
});

document.addEventListener('keydown', function (e) {
    if (e.key == "Escape") {
        menuGet.classList.remove('active');
        hamburger.classList.remove('active');
        buttonLink.classList.remove('active');
    }
});

buttonMobile.addEventListener('click', setActive);
linksGet.forEach(item => {
    item.addEventListener('click', setActive);
});