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
    <a href="/php/applications.php" class="position-absolute" style="padding-left: 250px; top: 47%!important">
    <button type="button" class="btn btn-secondary btn-sm">Заявки</button>
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

        <div style="text-align: center;" class="k-ms-programtitle-text">Добавление записей в базу данных</div>

        <ul style="margin-top: 4%;" class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li style="margin-left: auto;" class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-dobav-tab" data-bs-toggle="pill" data-bs-target="#pills-dobav" 
                type="button" role="tab" aria-controls="pills-dobav" aria-selected="true">Добавление записи</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-udal-tab" data-bs-toggle="pill" data-bs-target="#pills-udal" 
                type="button" role="tab" aria-controls="pills-udal" aria-selected="false">Удаление записи</button>
            </li>
                    <li style="margin-right: auto;" class="nav-item" role="presentation">
                <button class="nav-link" id="pills-izmen-tab" data-bs-toggle="pill" data-bs-target="#pills-izmen" 
                type="button" role="tab" aria-controls="pills-izmen" aria-selected="false">Изменение записи</button>
            </li>
        </ul>
        

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-izmen" role="tabpanel" aria-labelledby="pills-izmen-tab">
                
                <form style="margin-left: auto; margin-right:auto;">
                    <div class="mb-3">
                        <label for="izmen1" class="form-label">Номер случая</label>
                        <input type="text" class="form-control" id="izmen1" aria-describedby="izmenHelp" name="izmenid">
                    </div>
                    <div class="mb-3">
                        <label for="izmen2" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="izmen2" name="izmenname">
                    </div>
                    <div class="mb-3">
                        <label for="izmen2" class="form-label">Возраст</label>
                        <input type="text" class="form-control" id="izmen2" name="izmenage">
                    </div>
                    <div class="mb-3">
                        <label for="izmen2" class="form-label">Место смерти</label>
                        <input type="text" class="form-control" id="izmen2" name="izmenplace">
                    </div>

                    <button type="submit" class="disabled btn btn-primary">Временно не работает</button>
                </form>

            </div>

            <div class="tab-pane fade" id="pills-udal" role="tabpanel" aria-labelledby="pills-udal-tab">
                
                <form method="POST" action="" style="margin-left: auto; margin-right:auto;">
                    <div class="mb-3">
                        <label for="udal1" class="form-label">Номер случая</label>
                        <input type="text" class="form-control" id="udal1" aria-describedby="udalHelp" name="udalenieid">
                        <div id="udalHelp" class="form-text">Номер случая, который указан в таблице.</div>
                        </div>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </form>

            </div>

            <div class="tab-pane fade show active" id="pills-dobav" role="tabpanel" aria-labelledby="pills-dobav-tab">
                
                <form action="" method="POST" style="margin-left: auto; margin-right:auto;">

                    <div style="margin-left: 370px; width: 70px;" class="position-absolute mb-3">
                            <label for="dobav3" class="form-label">Возраст</label>
                            <input type="text" class="form-control" id="dobav3" name="dobav_age" aria-describedby="ageHelp">
                            <div id="agehelp" class="form-text">число</div>
                    </div>

                    <div style="width: 350px;" class="mb-3">
                            <label for="dobav1" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="dobav1" aria-describedby="dobavHelp" name="dobav_name">
                    </div>

                        <div class="mb-3">
                            <label for="dobav2" class="form-label">Место смерти</label>
                            <input type="text" class="form-control" id="dobav2" name="dobav_place">
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                </form>

            </div>
        </div>

    </div>

    <?php

        // Переменные с формы
        $dobav_age = $_POST['dobav_age'];
        $dobav_name = $_POST['dobav_name'];
        $dobav_place = $_POST['dobav_place'];

        $udalenieid = $_POST['udalenieid'];

        $izmenid = $_POST['izmenid'];
        $izmenname = $_POST['izmenname'];
        $izmenage = $_POST['izmenage'];
        $izmenplace = $_POST['izmenplace'];

        // Удаление из базы данных
      
        $udalquery = $mysqli->query("DELETE FROM entry WHERE id = '$udalenieid'");

        // Добавление в базу данных

        $insert_dobav = $mysqli->query("INSERT INTO entry (name, place, age) VALUES ('$dobav_name', '$dobav_place', $dobav_age)");

        // Изменения в базе данных


    ?>
    
<?php endif; ?>

</body>
</html>