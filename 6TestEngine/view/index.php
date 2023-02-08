<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<?php include "menu.php" ?>
<?php if ($username == null): ?>
    <h2><?= $pageHeader ?>, гость!</h2>
    <h3><a style="color: white ; background: #0d6efd;padding: 2px;border-radius: 5px;text-decoration: none;"
           href="/?controller=security">Войти</a></h3>
<?php else: ?>
    <h3><p>Рады вас приветствовать, <?= $username ?><a
                    style="margin-left:5px;color: white ; background: firebrick;padding: 2px;border-radius: 5px;text-decoration: none;"
                    href="?controller=security&action=logout">Выход</a></p></h3>
<?php endif; ?>
</body>