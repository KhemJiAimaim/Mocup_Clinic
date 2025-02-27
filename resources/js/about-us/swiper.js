//Doctor
var swiper1 = new Swiper(".swiper_Doctor", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".pagination_doctor",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    grabCursor: "true",
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
            centerSlide: true,
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 5,
            centerSlide: true,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
            centerSlide: true,
        },
        820: {
            slidesPerView: 3,
            spaceBetween: 10,
            centerSlide: true,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
            centerSlide: true,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 5,
            centerSlide: true,
        },
        1539: {
            slidesPerView: 4,
            spaceBetween: 10,
            centerSlide: true,
        },
        1600: {
            slidesPerView: 4,
            spaceBetween: 10,
            centerSlide: true,
        },
    },
});
