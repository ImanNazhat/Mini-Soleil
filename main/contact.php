<?php include("../partials/header.php"); ?>

<main class=contact>
    <video controls controlsList="nodownload">
        <source src="..\src\video\minisoleilvideo.mov" type="video/webm" />
        Votre navigateur ne supporte pas la lecture de vidéos.
    </video>

    <h2><?php echo htmlspecialchars($langs['contact'], ENT_QUOTES, 'UTF-8'); ?></h2>
    <p><a href="https://form.jotform.com/240373720867359"><?php echo htmlspecialchars($langs['contact_form'], ENT_QUOTES, 'UTF-8'); ?></a></p>

</main>

<?php include("../partials/footer.php"); ?>