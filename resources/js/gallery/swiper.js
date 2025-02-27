console.log("preview_img_gallery");

// preview_img
document.addEventListener("DOMContentLoaded", () => {
    const popup = document.getElementById("image-popup");
    const closePopup = document.getElementById("popup-close");
    const imageContainers = document.querySelectorAll(".image-container");

    // Swiper instance
    let swiper;

    // เปิด Popup เมื่อคลิกรูป
    imageContainers.forEach((container, index) => {
        container.addEventListener("click", () => {
            popup.classList.remove("hidden");

            // เริ่ม Swiper หรืออัปเดตไปยัง slide ที่เลือก
            if (!swiper) {
                swiper = new Swiper(".mySwiper_img", {
                    loop:true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                });
            }
            swiper.slideTo(index, 0); // เลื่อนไปยังรูปที่เลือก
        });
    });

    // ปิด Popup
    closePopup.addEventListener("click", () => {
        popup.classList.add("hidden");
    });

    // ปิด Popup เมื่อคลิกด้านนอก
    popup.addEventListener("click", (e) => {
        if (e.target === popup) {
            popup.classList.add("hidden");
        }
    });
});



//see more
document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".image-gallery .image-container");
    const toggleButton = document.getElementById("toggle-button").parentElement;
    let visibleRows = 2; 
    const imagesPerRow = 4;

    // ซ่อนปุ่มหากจำนวนข้อมูลน้อยกว่าหรือเท่ากับ 3 แถว
    if (images.length <= visibleRows * imagesPerRow) {
        toggleButton.classList.add("hidden");
        images.forEach((image) => {
            image.classList.remove("hidden"); // แสดงภาพทั้งหมด
        });
        return;
    } else {
        toggleButton.classList.remove("hidden"); // แสดงปุ่มถ้ามีข้อมูลมากกว่า 3 แถว
    }

    const updateGallery = () => {
        // ซ่อน/แสดงภาพตามจำนวนที่ต้องการ
        images.forEach((image, index) => {
            image.classList.toggle("hidden", index >= visibleRows * imagesPerRow);
        });

        // อัปเดตข้อความปุ่ม
        if (visibleRows * imagesPerRow >= images.length) {
            toggleButton.querySelector("button").textContent = "Show less";
        } else {
            toggleButton.querySelector("button").textContent = "See more";
        }
    };

    // คลิกปุ่มเพื่อแสดงผลเพิ่มเติมหรือย่อกลับ
    toggleButton.querySelector("button").addEventListener("click", () => {
        if (visibleRows * imagesPerRow >= images.length) {
            visibleRows = 2; // รีเซ็ตเป็นแถวเริ่มต้น
        } else {
            visibleRows += 1; // เพิ่มจำนวนแถว
        }
        updateGallery();
    });

    // เรียกใช้งานครั้งแรก
    updateGallery();
});
