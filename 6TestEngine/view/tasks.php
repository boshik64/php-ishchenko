<head xmlns="http://www.w3.org/1999/html">
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<?php include "menu.php" ?>
<?php if ($username == null): ?>
    <h3><a style="color: white ; background: #0d6efd;padding: 2px;border-radius: 5px;text-decoration: none;"
           href="/?controller=security">Войти</a>, чтобы посмотреть задачи.</h3>
<?php else: ?>
    <h3><p><?= $username ?><a
                    style="margin-left:5px;color: white ; background: firebrick;padding: 2px;border-radius: 5px;text-decoration: none;"
                    href="?controller=security&action=logout">Выход</a></p></h3>
    <br>

    <form action="?controller=tasks&action=addtask" method="post">
        <input type="text" name="taskname" placeholder="Задача">
        <input type="text" name="taskdescription" placeholder="Описание">
        <input type="submit" value="Добавить">
    </form>
    <?php if (!isset($inactiveTasks) || empty($inactiveTasks)) : ?>
        <h2>Тут будут отображаться ваши не выполненные задачи:</h2>
    <?php else: ?>
        <h2>Ваши не выполненные задачи:</h2>
        <ul title="Список задач:">
            <?php foreach ($inactiveTasks as $inactiveTask): ?>
                <li>
                    <div>Задача: <?= $inactiveTask->getTaskname() ?></div>
                    <div>Описание: <?= $inactiveTask->getTaskdescription() ?></div>
                    <?php if ($inactiveTask->getTaskStatus() === false): ?>
                        <a style="color: crimson;font-weight: bold"
                           href="?controller=tasks&action=updatetask&taskStatus=1&id=<?= $inactiveTask->getTaskID() ?>">Не
                            выполнено</a>
                    <?php else: ?>
                        <a style="color: chartreuse;font-weight: bold"
                           href="?controller=tasks&action=updatetask&taskStatus=0&id=<?= $inactiveTask->getTaskID() ?>">Выполнено</a>
                    <?php endif; ?>
                    <a href="?controller=tasks&action=deltask&id=<?= $inactiveTask->getTaskID() ?>">Удалить</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <hr>
    <?php if (!isset($activeTasks) || empty($activeTasks)) : ?>
        <h2>Тут будут отображаться ваши выполненные задачи:</h2>
    <?php else: ?>
        <h2>Ваши выполненные задачи:</h2>
        <ul title="Список задач:">
            <?php foreach ($activeTasks as $activeTask): ?>
                <li>
                    <div>Задача: <?= $activeTask->getTaskname() ?></div>
                    <div>Описание: <?= $activeTask->getTaskdescription() ?></div>
                    <?php if ($activeTask->getTaskStatus() === false): ?>
                        <a style="color: crimson;font-weight: bold"
                           href="?controller=tasks&action=updatetask&taskStatus=1&id=<?= $activeTask->getTaskID() ?>">Не
                            выполнено</a>
                    <?php else: ?>
                        <a style="color: chartreuse;font-weight: bold"
                           href="?controller=tasks&action=updatetask&taskStatus=0&id=<?= $activeTask->getTaskID() ?>">Выполнено</a>
                    <?php endif; ?>
                    <a href="?controller=tasks&action=deltask&id=<?= $activeTask->getTaskID() ?>">Удалить</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<?php endif; ?>
</body>

