<?php

header("Cache-Control: no-store, no-cache, must-revalidate");

require_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <title>authcoroner</title>
    <link type="text/css" rel="stylesheet" href="lk.css">
    <link rel="stylesheet" href="/css/main1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">


        <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Lato&family=Nanum+Gothic&family=PT+Sans:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<style>
    form{
        width: 500px;
    }

    body{
        background-color: #232a3a;
    }
    
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

    <?php
        if($_COOKIE['user'] == ''):
    ?>

<div style="width: 100%; height: 60vh">

    <div style="margin-top: 15%" class="container">
        <div style="width:600px ;margin-left: auto; margin-right: auto;">
            <h1 style="color: white;">Форма авторизации</h1>
            <h5 style="color: white; padding-bottom: 20px;" >Вам нужно войти в аккаунт, чтобы использовать базу данных.</h5>
            <form action="/php/auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-primary" type="submit">Войти в аккаунт</button>
            </form>
        </div>
    </div>

</div>

<?php else: ?>

    <div class="position-relative" style="width: 100%px; height: 100px; margin: 0 auto; padding-bottom: 50px; background-color: #1d5b91" class="">
    </div> 

    <div class="position-relative" style="width: 70%; height: 1500px; margin: 0 auto; padding-bottom: 50px; background-color: white;" class="">

    <div class="lk-sotrdiv position-relative">

    <div style="height: 400px; width: 400px;">

    <p style="top: 5%!important; padding-left: 250px" class="position-absolute fs-5"><strong><?=$_COOKIE['user']?></strong></p>

    <?php

    $mysqli = new mysqli("localhost", "root", "", "coroner");

    $query_user = $_COOKIE['user'];

    $result_post = $mysqli->query("SELECT post, department, avatar, joincheck FROM users WHERE name LIKE '$query_user'");

    while($row = mysqli_fetch_array($result_post)){
        $post=$row['post'];
        $department=$row['department'];
        $avatar=$row['avatar'];
        $joincheck=$row['joincheck'];
    }

    ?>

    <p class="position-absolute" style="padding-left: 250px; top: 12%!important">Сотрудник WCME</p>
    <p class="position-absolute" style="padding-left: 250px; top: 22%!important"><strong>Отдел:</strong></p>
    <p class="position-absolute" style="padding-left: 250px; top: 28%!important">- <?php echo $department ?></p>
    <p class="position-absolute" style="padding-left: 250px; top: 34%!important"><strong>Должность:</strong></p>
    <p class="position-absolute" style="padding-left: 250px; top: 40%!important">- <?php echo $post ?></p>
    <?php if($joincheck == 'on' ){ ?>
    <a href="/php/reg.php" class="position-absolute" style="padding-left: 250px; top: 47%!important">
    <button type="button" class="btn btn-secondary btn-sm">Вернуться в ЛК</button>
    </a>
    <? } ?>

    <div style="top: 5%!important;left: 5%!important;height: 264px; border: 2px solid grey; width: 204px;" class="position-relative">
    <img alt="image" width="200" height="260" src="<?php echo $avatar ?>">
    </div>
    
    </div>

    <p class="position-absolute" style="left: 73%!important; top: 2%!important; color: black;"> Добро пожаловать в личный 
    кабинет! <a style="border-bottom: 0.06cm solid black; color: grey; 
    text-decoration: none;" class="fs-6" href="/php/exit.php">Выход</a></p>

    </div>

    <div class="k-reg-maindiv">

        <div style="text-align: center;" class="k-ms-programtitle-text">Просмотр заявок на вступление в коронеры</div>

        <?php


        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }

        $results_per_page = 10;
        $page_first_result = ($page-1) * $results_per_page;


        $mysqli = new mysqli("localhost", "root", "", "coroner");

        $result = $mysqli->query("SELECT name, discord, about, gohome FROM joinus LIMIT 
        " . $page_first_result . ',' . $results_per_page);
        
       $querypag = "select *from joinus";

       $conn = mysqli_connect('localhost', 'root', '');  
        if (! $conn) {  
        die("Connection failed" . mysqli_connect_error());  
        }  
        else {  
        mysqli_select_db($conn, 'coroner');  
        }  

        $resultpag = mysqli_query($conn, "SELECT name, discord, about, gohome FROM joinus");  
        $number_of_result = mysqli_num_rows($resultpag);
        $number_of_page = ceil ($number_of_result / $results_per_page);  

    ?>

    <style>
        #k-container {
        display: grid;
        grid: repeat(3, 270px) / auto-flow 507px;
        width: 100%;
        margin-top: 50px;
        }

        #k-container > div {
        background-color: grey;
        width: 400px;
        height: 250px;
        margin-left: auto;
        margin-right: auto;
        }
    </style>

    <div id="k-container">

    <?

        while($row = mysqli_fetch_array($result)){
            $name=$row['name'];
            $discord=$row['discord'];
            $about=$row['about'];
            $gohome=$row['gohome'];

    ?>

    

        <div>
        <?= $name ?>
        </div>



    <? } ?>
    </div>
    </div>

    
<?php endif; ?>

</body>
</html>