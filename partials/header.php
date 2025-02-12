<?php include __DIR__ . '/../config.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $langs['title']; ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
   
</head>
<body>
    <header>
        <h1><?php echo $langs['title']; ?></h1>
        <div class="logo"><img src="src/img/logo-02.png" alt="logoMiniSoleil" class="logo"></div>
        <nav>
            <ul>
                <li><a href="/index.php"><?php echo $langs['home']; ?></a></li>
                <li><a href="/main/about.php"><?php echo $langs['about']; ?></a></li>
                <li><a href="/main/contact.php"><?php echo $langs['contact']; ?></a></li>
            </ul>
        </nav>
        <div class="language-switcher">
            <a href="?lang=ar">🇸🇦 العربية</a> | 
            <a href="?lang=en">🇬🇧 English</a>
        </div>
    </header>
