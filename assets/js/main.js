document.addEventListener("DOMContentLoaded", function () {
    var menuButton = document.querySelector(".menu-burger"); 
    var navMenu = document.querySelector("nav"); 

    if (menuButton && navMenu) {
        menuButton.addEventListener("click", function () {
            
            navMenu.classList.toggle("active");

            
            if (navMenu.classList.contains("active")) {
                menuButton.innerHTML = "✖"; 
            } else {
                menuButton.innerHTML = "☰"; 
            }
        });
    } else {
        console.error("❌ error");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    let index = 0;
    const slides = document.querySelectorAll('.slide');
    const slider = document.getElementById('slider');
    const totalSlides = slides.length;
    const slidesPerView = 3; 
    const step = 3; 
    const slideWidth = slides[0].offsetWidth + 20; 

    function moveSlide(direction) {
        index += direction * step;

        if (index < 0) {
            index = 0;
        } else if (index > totalSlides - slidesPerView) {
            index = totalSlides - slidesPerView;
        }

        slider.style.transform = `translateX(-${index * slideWidth}px)`;
    }

    document.querySelector(".prev").addEventListener("click", () => moveSlide(-1));
    document.querySelector(".next").addEventListener("click", () => moveSlide(1));
});

