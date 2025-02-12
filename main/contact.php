<?php include("../partials/header.php"); ?>

<main>
    <h2><?php echo $langs['contact']; ?></h2>
    <form>
        <label for="name">الاسم:</label>
        <input type="text" id="name" required>
        
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" required>
        
        <label for="message">رسالتك:</label>
        <textarea id="message" required></textarea>
        
        <button type="submit">إرسال</button>
    </form>
</main>

<?php include("../partials/footer.php"); ?>