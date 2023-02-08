<?php if ($userName): ?>
    Добро пожаловать <?= $userName ?> <a href="?logout">Exit</a>
<?php else: ?>
    <form method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pass" placeholder="password">
        <input type="submit">
    </form>
<?php endif; ?><br>