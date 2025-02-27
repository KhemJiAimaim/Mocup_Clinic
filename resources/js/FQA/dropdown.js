const openQDetails = document.querySelectorAll(".open_q_detail");
const qDetails = document.querySelectorAll(".q_detail");
const arrowIcons = document.querySelectorAll(".arrow-icon");

openQDetails.forEach((openQDetail, index) => {
    openQDetail.addEventListener("click", function () {
        const qDetail = qDetails[index];
        const arrowIcon = arrowIcons[index];

        if (qDetail.style.maxHeight) {
            qDetail.style.maxHeight = null;
            qDetail.style.opacity = 0;

            arrowIcon.src = "/images/icon/ic_baseline-plus.png"; // เปลี่ยนกลับเป็นไอคอนเดิม
        } else {
            qDetail.style.maxHeight = qDetail.scrollHeight + "px";
            qDetail.style.opacity = 1;

            arrowIcon.src = "/images/icon/Group 164.png"; // เปลี่ยนเป็นไอคอน minus
        }
    });
});
