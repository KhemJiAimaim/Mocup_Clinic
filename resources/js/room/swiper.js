


//OTHER ROOM
// var swiper1 = new Swiper(".swiper2", {
//     slidesPerView: 1,
//     // spaceBetween: 10,
//     loop: true,
//     navigation: {
//         nextEl: ".swiper-button-next2",
//         prevEl: ".swiper-button-prev2",
//     },
//     pagination: {
//         el: ".swiper-pagination",
//     },
//     grabCursor: "true",
//     breakpoints: {
//         340: {
//             slidesPerView: 1,
//             // spaceBetween: 5,
//             centerSlide: true,
//         },
//         640: {
//             slidesPerView: 2,
//             // spaceBetween: 5,
//             centerSlide: true,
//         },
//         768: {
//             slidesPerView: 2,
//             // spaceBetween: 10,
//             centerSlide: true,
//         },
//         1024: {
//             slidesPerView: 2,
//             // spaceBetween: 10,
//             centerSlide: true,
//         },
//         1280: {
//             slidesPerView: 3,
//             // spaceBetween: 10,
//             centerSlide: true,
//         },
//         1539: {
//             slidesPerView: 3,
//             // spaceBetween: 15,
//             centerSlide: true,
//         },
//         1600: {
//             slidesPerView: 3,
//             centerSlide: true,
//         },
//     },
// });



document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.querySelectorAll(".slider-container .slider");
    
    sliders.forEach((slider) => {
        const sliderContent = slider.querySelector(".slider-content");
        const prevBtn = slider.querySelector(".prev-btn");
        const nextBtn = slider.querySelector(".next-btn");
        const images = sliderContent.querySelectorAll("img");
        let index = 0;

        if (images.length <= 1) {
            prevBtn.style.display = "none";
            nextBtn.style.display = "none";
        }

        function updateSlider() {
            sliderContent.style.transform = `translateX(-${index * 100}%)`;
        }

        nextBtn.addEventListener("click", function () {
            // เช็คว่า index ถึงสุดท้ายแล้วหรือยัง
            if (index < sliderContent.children.length - 1) {
                index++;
                updateSlider();
            }
        });

        prevBtn.addEventListener("click", function () {
            // เช็คว่า index ถึงแรกสุดแล้วหรือยัง
            if (index > 0) {
                index--;
                updateSlider();
            }
        });
    });
});