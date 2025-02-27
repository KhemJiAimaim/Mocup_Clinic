
document.addEventListener("DOMContentLoaded", function () {
    let dateInput = document.getElementById("datepicker");

    let options = {
        dateFormat: window.innerWidth <= 768 ? "d M Y" : "D, d M Y",  // ปรับตามขนาดจอ
        altInput: true,
        altFormat: window.innerWidth <= 768 ? "d/m/y" : "D, d M Y", // แสดงผลลัพธ์ที่แตกต่าง
        disableMobile: true,
        enableTime: false,
        theme: "light"
    };

    let fp = flatpickr(dateInput, options);

    // เปลี่ยน dateFormat ตามขนาดหน้าจอเมื่อ resize
    window.addEventListener("resize", function () {
        let newFormat = window.innerWidth <= 768 ? "d M Y" : "D, d M Y";
        let newAltFormat = window.innerWidth <= 768 ? "d/m/y" : "D, d M Y";

        fp.set("dateFormat", newFormat);
        fp.set("altFormat", newAltFormat);
    });
});

document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#datepicker-time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i", 
        time_24hr: true,
        disableMobile: true,
    });
});