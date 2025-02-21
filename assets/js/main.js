document.addEventListener("DOMContentLoaded", function () {
    var menuButton = document.querySelector(".menu-burger"); // زر القائمة
    var navMenu = document.querySelector("nav"); // عنصر القائمة

    if (menuButton && navMenu) {
        menuButton.addEventListener("click", function () {
            // إضافة/إزالة الكلاس "active" لإظهار/إخفاء القائمة
            navMenu.classList.toggle("active");

            // تغيير شكل الأيقونة عند فتح القائمة
            if (navMenu.classList.contains("active")) {
                menuButton.innerHTML = "✖"; // أيقونة الإغلاق
            } else {
                menuButton.innerHTML = "☰"; // أيقونة القائمة
            }
        });
    } else {
        console.error("❌ لم يتم العثور على زر القائمة أو عنصر القائمة.");
    }
});
