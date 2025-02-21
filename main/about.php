<?php include("../partials/header.php"); ?>

<main class=about>
    <video controls >
        <source src="/src/video/minisoleil.mov" type="video/webm" />
        Votre navigateur ne supporte pas la lecture de vidéos.
    </video>

    <h2><?php echo $langs['about']; ?></h2>
    <p><?php echo $langs['description']; ?></p></main>

    <script src="<?php echo BASE_URL . '/assets/js/script.js'; ?>"></script>
 
<?php include("../partials/footer.php"); ?>
