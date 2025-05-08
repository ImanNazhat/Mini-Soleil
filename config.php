<?php
session_start([
    'use_strict_mode' => true,
    'cookie_httponly' => true,
    'cookie_secure' => isset($_SERVER['HTTPS']),
    'cookie_samesite' => 'Strict'
]);

$allowedLangs = ['en', 'ar'];

if (isset($_GET['lang']) && in_array($_GET['lang'], $allowedLangs)) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

$lang = $_SESSION['lang'];
$langFile = __DIR__ . "/lang/$lang.php";

if (file_exists($langFile)) {
    include $langFile;
} else {
    die("⚠ خطأ: ملف الترجمة غير موجود!");
}
?>