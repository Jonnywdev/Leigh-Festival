var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 5,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        prevEl: ".swiper-button-next",
        nextEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        575: {
            slidesPerView: 2,
        },
        767: {
            slidesPerView: 3,
        },
        1050: {
            slidesPerView: 4,
        },
    },
});


