<?php include_once __DIR__ . '/../config.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($langs['meta_description'], ENT_NOQUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="index, follow">
    <title><?php echo htmlspecialchars($langs['title'], ENT_QUOTES, 'UTF-8') . ' | MiniSoleil'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
</head>
<body>
<header>
    <div>
        <button class="menu-burger">☰</button>
        <nav>
            <ul>
                <li><a href="/"><?php echo htmlspecialchars($langs['home'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <li><a href="/contact"><?php echo htmlspecialchars($langs['contact'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <li><a href="/about"><?php echo htmlspecialchars($langs['about'], ENT_QUOTES, 'UTF-8'); ?></a></li>
            </ul>
        </nav>

        <figure>
            <img src="/src/img/Logo.png" alt="logoMiniSoleil" class="logo">
        </figure>

        <div class="language-switcher">
            <a href="?lang=ar">ar</a> | 
            <a href="?lang=en">en</a>
        </div>
    </div>
</header>
