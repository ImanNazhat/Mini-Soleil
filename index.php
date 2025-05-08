<?php include("partials/header.php"); ?>

<main class="home">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="src/img/IMG_9107.jpg" alt="Slide 1"></div>
      <div class="swiper-slide"><img src="src/img/IMG_9830.png" alt="Slide 2"></div>
      <div class="swiper-slide"><img src="src/img/IMG_9819.png" alt="Slide 3"></div>
      <div class="swiper-slide"><img src="src/img/IMG_8628.jpg" alt="Slide 4"></div>
      <div class="swiper-slide"><img src="src/img/IMG_8626.jpg" alt="Slide 5"></div>
      <div class="swiper-slide"><img src="src/img/image.jpg" alt="Slide 6"></div>
      <div class="swiper-slide"><img src="src/img/IMG_8629.png" alt="Slide 7"></div>
      <div class="swiper-slide"><img src="src/img/IMG_8611.jpg" alt="Slide 8"></div>
      <div class="swiper-slide"><img src="src/img/IMG_9817.jpg" alt="Slide 9"></div>
    </div>
  </div>

    <h2><?php echo htmlspecialchars($langs['welcome'], ENT_QUOTES, 'UTF-8'); ?></h2>
    <p><?php echo strip_tags($langs['description'], '<br>'); ?></p>
</main>

  

<?php include("partials/footer.php"); ?>