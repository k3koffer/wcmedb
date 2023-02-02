<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$post = filter_var(trim($_POST['post']),
FILTER_SANITIZE_STRING);
$department = filter_var(trim($_POST['department']),
FILTER_SANITIZE_STRING);
$avatar = filter_var(trim($_POST['avatar']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
}
if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit();
}
if(mb_strlen($pass) < 2 || mb_strlen($pass) > 24) {
    echo "Недопустимая длина пароля (от 2 до 24 символов)";
    exit();
}

    $pass = md5($pass."c0r0n3r");

    $mysql = new mysqli('localhost', 'root', '', 'coroner');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `post`, `department`, `avatar`)
    VALUES('$login', '$pass', '$name', '$post', '$department', '$avatar')");
    
    $mysql->close();

    header('Location: /');
?>