window.onscroll = () => {
    searchForm.classList.remove('active');

    if(window.scrollY > 90) {
        document.querySelector('.header-2').classList.add('active');
    } else {
        document.querySelector('.header-2').classList.remove('active');
    }
}

var swiper = new Swiper(".bikes-slider", {
    loop: true,
    centerSlides: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 1,
        },
    },
});

let searchForm = document.querySelector('.search-form');
let mobileMenu = document.querySelector('.mobile-menu');
let login = document.querySelector('.login-form-container');
let reg = document.querySelector('.reg-form-container');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

document.querySelector('#dropdown-icon').onclick = () => {
    mobileMenu.classList.toggle('active');
}

document.querySelector('#login-btn').onclick = () => {
    login.classList.toggle('active');
}

document.querySelector('#register').onclick = () => {
    login.classList.remove('active');
    reg.classList.toggle('active');
}

document.querySelector('#login').onclick = () => {
    reg.classList.remove('active');
    login.classList.toggle('active');
}

document.querySelector('.mobile-menu').onclick = () => {
    mobileMenu.classList.remove('active');
}

document.querySelector('#close-menu').onclick = () => {
    mobileMenu.classList.remove('active');
}

document.querySelector('#close-login').onclick = () => {
    login.classList.remove('active');
}

document.querySelector('#close-reg').onclick = () => {
    reg.classList.remove('active');
}