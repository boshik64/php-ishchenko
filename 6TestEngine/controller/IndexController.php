<?php

require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
session_start();

$pageHeader = 'Добро пожаловать';

$username = null;
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}





include "view/index.php";