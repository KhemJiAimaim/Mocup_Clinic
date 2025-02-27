//Popup video
document.addEventListener("DOMContentLoaded", function () {
    const videoOpen = document.getElementById("video-open"); // ปุ่มเปิดวิดีโอ
    const videoModal = document.getElementById("video-modal"); // Popup
    const videoClose = document.getElementById("video-close"); // ปุ่มปิด
    const videoFrame = document.getElementById("video-frame"); // iframe วิดีโอ


    const videoID = "hmfBTUFHN_g"; 
    const videoURL = `https://www.youtube.com/embed/${videoID}?autoplay=1&rel=0&modestbranding=1&playsinline=1`;

    // เปิด Popup และกำหนด URL ให้ iframe
    videoOpen.addEventListener("click", function () {
        videoFrame.src = videoURL; // กำหนด src ของ iframe
        videoModal.classList.remove("hidden");
    });

    // ปิด Popup และหยุดวิดีโอ
    videoClose.addEventListener("click", function () {
        videoModal.classList.add("hidden");
        videoFrame.src = ""; // รีเซ็ต src เพื่อหยุดวิดีโอ
    });

    // ปิด popup เมื่อคลิกนอกกรอบ
    videoModal.addEventListener("click", function (event) {
        if (event.target === videoModal) {
            videoModal.classList.add("hidden");
            videoFrame.src = ""; // รีเซ็ต src เพื่อหยุดวิดีโอ
        }
    });
});
