<?php
session_start();
$userName = null;

if (isset($_POST['username'])) {
    $userName = $_POST['username'];
    $pass = $_POST['pass'] ?? null;
    if ($userName == 'admin' && $pass == 123) {
        $_SESSION['username'] = $userName;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    } else {
        die('ошибка валидации');
    }
}

if (isset($_SESSION['username'])) {
    $userName = $_SESSION['username'];
}
if (isset($_REQUEST['logout'])) {
    unset($_SESSION['username']);
    session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}