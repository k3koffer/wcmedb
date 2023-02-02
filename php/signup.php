<?php
require_once 'header.php';
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
<body>

<style>
    form{
        width: 500px;
    }
</style>

<div class="container mt-4">

    <h1>Форма регистрации</h1>
    <form action="check.php" method="post">
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>

    <input type="text" class="form-control" name="post" id="post" placeholder="Введите пост"><br>
    <input type="text" class="form-control" name="department" id="department" placeholder="Введите департамент"><br>
    <input type="text" class="form-control" name="avatar" id="avatar" placeholder="Введите ссылку на аватар"><br>

    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <button class="btn btn-success" type="submit">Зарегистрироваться</button>
    </form>

    </body>
</html>