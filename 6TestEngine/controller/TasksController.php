<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
session_start();

$username = null;


if (!isset($_GET['action'])) {
    $_GET['action'] = 'index';

}


if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();

}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    session_destroy();

}
//AddTask
if (isset($_GET['action']) && $_GET['action'] === 'addtask') {
    if (empty($_POST['taskname']) || empty($_POST['taskdescription'])) {
        die('Одно или более из полей пустое');
    }
    $newtask = new Task($_POST['taskname'], $_POST['taskdescription']);
    (new TaskProvider())->addTask($newtask);
    header("Location: ?controller=tasks");
}

//DelTask
if (isset($_GET['action']) && $_GET['action'] === 'deltask' && isset($_GET['id'])) {
    $id = $_GET['id'];
    (new TaskProvider())->delTask($id);
    header("Location: ?controller=tasks");

}
//UpdateTask
if (isset($_GET['action']) && $_GET['action'] === 'updatetask' && isset($_GET['id']) && isset($_GET['taskStatus'])) {
    $id = $_GET['id'];
    $params = ['taskstatus' => $_GET['taskStatus'] == 1 ? true : false];
    (new TaskProvider())->updateTask($id, $params);
    header("Location: ?controller=tasks");

}




if ($_GET['action'] == 'index') {
    $activeTasks = (new TaskProvider())->getTasks();
    $inactiveTasks = (new TaskProvider())->getUndoneList();
    include "view/tasks.php";
}







