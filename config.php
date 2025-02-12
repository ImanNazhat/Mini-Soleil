<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en"; 
}


if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} else {
    $lang = $_SESSION['lang'];
}


$langFile = __DIR__ . "/lang/$lang.php";
if (file_exists($langFile)) {
    include $langFile;
} else {
    die("⚠ خطأ: ملف الترجمة غير موجود!");
}
?>
