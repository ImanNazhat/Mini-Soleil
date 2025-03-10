<?php
session_start([
    'use_strict_mode' => true,
    'cookie_httponly' => true,
    'cookie_secure' => isset($_SERVER['HTTPS']),
    'cookie_samesite' => 'Strict'
]);



if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en"; 
}

$allowedLangs = ['en', 'ar'];
$lang = isset($_GET['lang']) && in_array($_GET['lang'], $allowedLangs) ? $_GET['lang'] : ($_SESSION['lang'] ?? 'en');
$_SESSION['lang'] = $lang;

$langFile = __DIR__ . "/lang/$lang.php";
if (file_exists($langFile)) {
    include $langFile;
} else {
    die("⚠ خطأ: ملف الترجمة غير موجود!");
}