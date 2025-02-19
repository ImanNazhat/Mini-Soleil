<?php include_once __DIR__ . '/../config.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $langs['title']; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/normalize.css">
   
</head>
<body>
<header>
    <div>
       
        <nav>
            <ul>
                <li><a href="<?php echo BASE_URL; ?>/index.php"><?php echo $langs['home']; ?></a></li>
                <li><a href="<?php echo BASE_URL; ?>/main/about.php"><?php echo $langs['about']; ?></a></li>
                <li><a href="<?php echo BASE_URL; ?>/main/contact.php"><?php echo $langs['contact']; ?></a></li>
            </ul>
        </nav>

        <figure>
            <img src="<?php echo BASE_URL; ?>/src/img/logo-02.png" alt="logoMiniSoleil" class="logo">
        </figure>
        
        <div class="language-switcher">
            <a href="?lang=ar">العربية</a> | 
            <a href="?lang=en">English</a>
        </div>
    </div>
</header>

