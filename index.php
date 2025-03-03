<?php include("partials/header.php"); ?>

<main>
    <div class="slider-container">
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="slider-wrapper">
            <div class="slider" id="slider">
                <img src="src/img/IMG_9816.png" alt="MiniSoleil" class="slide">
                <img src="src/img/IMG_9830.png" alt="MiniSoleil" class="slide">
                <img src="src/img/IMG_9819.png" alt="MiniSoleil" class="slide">
                <img src="src/img/IMG_8628.jpg" alt="MiniSoleil" class="slide">
                <img src="src/img/IMG_8626.jpg" alt="MiniSoleil" class="slide">
                <img src="src/img/image.jpg" alt="MiniSoleil" class="slide">
                <img src="src/img/IMG_8629.png" alt="MiniSoleil" class="slide">
                <img src="src/img/IMG_8611.jpg" alt="MiniSoleil" class="slide">
                <img src="src/img/IMG_9817.jpg" alt="MiniSoleil" class="slide">
            </div>
        </div>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <h2><?php echo $langs['welcome']; ?></h2>
    <p><?php echo $langs['description']; ?></p>
</main>

  

<?php include("partials/footer.php"); ?>