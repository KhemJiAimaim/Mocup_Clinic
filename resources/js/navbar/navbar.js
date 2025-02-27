
// ปุ่มเพื่อเปิด/ปิดเมนูภาษา
document.addEventListener("DOMContentLoaded", function () {
    const langButton = document.getElementById("open-submenu"); // ปุ่มเปิด/ปิดเมนู
    const langMenu = document.getElementById("submenu"); // เมนูภาษาที่จะเปิด/ปิด
    const arrowIcon = document.getElementById("arrow-up"); // ไอคอนลูกศร

    langButton.addEventListener("click", function (event) {
        event.stopPropagation();
        langMenu.classList.toggle("hidden"); // ซ่อน/แสดงเมนู
        langMenu.classList.toggle("scale-100"); // ขยายเมนู
        arrowIcon.classList.toggle("rotate-180"); // หมุนลูกศร
    });

    document.addEventListener("click", function (event) {
        if (!langButton.contains(event.target) && !langMenu.contains(event.target)) {
            langMenu.classList.add("hidden");
            langMenu.classList.remove("scale-100");
            arrowIcon.classList.remove("rotate-180");
        }
    });
});


const navbar = document.getElementById("navbar");

let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    if (window.scrollY > 0.1) {
        navbar.classList.add("fixed", "top-0", "left-0", "w-full", "shadow-md");
    } else {
        navbar.classList.remove("fixed", "shadow-md");
    }
});
