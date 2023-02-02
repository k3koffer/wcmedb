<?php

error_reporting(0);

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."c0r0n3r");

$mysql = new mysqli('localhost', 'root', '', 'coroner');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>authcoroner</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <style>
    
    .notfound{
        font-family: 'Roboto', sans-serif;
        margin: 0;
    }

    .notfounddiv{
        width: 650px;
        margin-left: auto;
        margin-right: auto;
    }

    .notfoundwrap{
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
    }

    </style>

    <div class="notfoundwrap">

        <div class="notfounddiv" >

            <h1 class="notfound" style="margin-bottom:0px;">Такой пользователь не найден</h1>
            <h6 class="notfound" style="margin-bottom: 30px;">Возможно, вам стоит попробовать еще раз или уточнить данные для входа</h6>
            <a href="reg.php" ><button class="btn btn-success" type="submit">Вернуться</button></a>




        </div>

    </div>

    <?php
    exit();
}

setcookie('user', $user['name'], time() + 3600 * 24, "/");

$mysql->close();

header("Location: http://coroner/php/reg.php"); /* Перенаправление браузера */

/* Убедиться, что код ниже не выполнится после перенаправления .*/
exit;

?>    