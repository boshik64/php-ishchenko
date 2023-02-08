<?php
include "auth.php";

if (is_null($userName)) {
    header("Location: /");
    die();
}

if (isset($_POST['text'])) {
    $task = strip_tags($_POST['text']);
    $_SESSION['shop'][] = $task;
    header('Location: shop.php');
    die();
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $key = $_GET['key'];
    unset($_SESSION['shop'][$key]);
    header('Location: shop.php');
    die();
}

$shop = $_SESSION['shop'] ?? null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include "menu.php"; ?>
<a href="/">Главная</a><br>
<h2>Ваши покупки</h2>
<form method="POST">
    <input type="text" name="text" placeholder="Добавить покупку">
    <input type="submit" value="Добавить">
</form>
<br>
<?php if (!empty($shop)): ?>
    <?php foreach ($shop as $key => $text): ?>
        <ul>
            <li><?= $text ?> <a href="?action=delete&key=<?= $key ?>">[X]</a></li>
        </ul>
    <?php endforeach; ?>
<?php else: ?>
    Нет покупок
<?php endif; ?>

</body>
</html>