<?php
$login = "admin";
//setcookie('login',$login,time()+36000,'/');
echo "<pre>";
print_r($_COOKIE);
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

<form method="post">
    <input type="text" name="login">
    <input type="submit">
</form>

</body>
</html>