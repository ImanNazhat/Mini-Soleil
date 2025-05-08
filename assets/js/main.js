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


// const swiper = new Swiper(".mySwiper", {
//     slidesPerView: 3,
//     spaceBetween: 20,
//     loop: true,
//     grabCursor: true,
//     breakpoints: {
//       480: { slidesPerView: 1 },
//       768: { slidesPerView: 3 }
//     }
//   });


    const swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      grabCursor: true,
      simulateTouch: true,
      touchRatio: 1,
      slidesPerView: 1,
      spaceBetween: 10,
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  


    let path = window.location.pathname;

    if (path.includes("contact")) {
        console.log("You're on the contact page");
    } else if (path.includes("about")) {
        console.log("You're on the about page");
    } else {
        console.log("You're on the home page");
    }
});