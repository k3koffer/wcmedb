<?php

header("Cache-Control: no-store, no-cache, must-revalidate");

require_once 'header.php';

$conn = mysqli_connect('localhost', 'root', '');  
if (! $conn) {  
die("Connection failed" . mysqli_connect_error());  
}  
else {  
mysqli_select_db($conn, 'coroner');  
}  

?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Главная</title>
        <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="/css/main1.css">

        <!-- font settings !-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Lato&family=Nanum+Gothic&family=PT+Sans:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="/css/custom.css">
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/headroom.js"></script> 

    </head>
  <body>
  <div class="position-relative" style="width: 100%px; height: 100px; margin: 0 auto; padding-bottom: 50px; background-color: #1d5b91" class="">
    </div>


    <div style="margin: 0 auto; margin-top: 60px; width: 1200px; height: 2500px;" class="k-indexmain">

    <div style="width: 90%; height:700px; margin: 0;" class="container">
      <h1 class="k-font">Быть коронером - когда <span class="k-joinusmainyfont">наука</span> на страже <span class="k-joinusmainyfont">закона</span></h1>

      <div class="k-joinus-image"><!-- *тут картинка* !--></div>

      <div class="k-joinus-subtext">Наш офис предоставляет возможность обучиться на основные полевые должности. 
        Такими должностями являются коронер, криминалист-техник, полевой сотрудник криминалистической службы. 
        Мы также предлагаем карьерный рост: после получения специального образования наши сотрудники становятся 
        полноценными экспертами и допускаются до работы не только в поле, но и в лаборатории.
      </div>
    </div>

    <div class="k-joinus-mainsection">
      <div class="k-joinus-mstitle">Академия судмедэкспертизы 

          <a style="margin-left: 100px;" href="#k-joinus-crim" class="k-joinus-ms-select k-joinus-ms-transition">Криминалистика</a>
          <a style="text-decoration: none; color: black;" class="k-joinus-ms-select"> /</a>
          <a href="#k-joinus-coroner" class="k-joinus-ms-select k-joinus-ms-transition">Коронерская служба</a>
          
      </div>

      <div class="k-joinus-ms-mainpage">

          <div id="k-joinus-coroner" class="k-joinus-ms-joboffer">
            <a style="text-decoration: none;" href="#joinus-form">
              <h3 class="k-joboffer-title">Коронер-стажёр</h3>
              <p class="k-joboffer-category">Медицинский отдел</p>
              <p class="k-joboffer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Proin vitae quam sed sapien mattis finibus ac et mi. Aliquam erat volutpat. 
                Maecenas mollis metus eget odio placerat ultricies. Duis tellus elit, rhoncus eu volutpat in, 
                volutpat eu augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Aenean a lectus at urna mattis iaculis eget id velit. 
                Suspendisse sagittis dui leo, mollis faucibus dui faucibus sit amet. 
                Nullam vestibulum tempus eros, eu viverra lorem tristique in. 
                Vestibulum viverra vitae nunc at malesuada. Fusce a sapien nunc. 
                Morbi interdum ipsum et vehicula dapibus.
              </p>
            </a>
          </div>

          <div id="k-joinus-crim" class="k-joinus-ms-joboffer">
            <a style="text-decoration: none;" href="#joinus-form">
              <h3 class="k-joboffer-title">Криминалист-стажёр</h3>
              <p class="k-joboffer-category">Отдел криминалистики судебной медицинской экспертизы округа Уэйн.</p>
              <p class="k-joboffer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Proin vitae quam sed sapien mattis finibus ac et mi. Aliquam erat volutpat. 
                Maecenas mollis metus eget odio placerat ultricies. Duis tellus elit, rhoncus eu volutpat in, 
                volutpat eu augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Aenean a lectus at urna mattis iaculis eget id velit. 
                Suspendisse sagittis dui leo, mollis faucibus dui faucibus sit amet. 
                Nullam vestibulum tempus eros, eu viverra lorem tristique in. 
                Vestibulum viverra vitae nunc at malesuada. Fusce a sapien nunc. 
                Morbi interdum ipsum et vehicula dapibus.
              </p>
            </a>
          </div>

        <div class="k-ms-programtitle">
          <h3 class="k-ms-programtitle-text">Программа "Возвращение домой"</h3>
          <p class="k-joboffer-category">Офис допускает возвращение отставных сотрудников с сохранением привилегий 
            и званий. Программа подразумевает прохождение повторной аттестации, после которой сотруднику будут 
            возвращены прежние льготы и гарантии.</p>
          <p class="k-joboffer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Proin vitae quam sed sapien mattis finibus ac et mi. Aliquam erat volutpat. 
            Maecenas mollis metus eget odio placerat ultricies. Duis tellus elit, rhoncus eu volutpat in, 
            volutpat eu augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
            Aenean a lectus at urna mattis iaculis eget id velit. 
            Suspendisse sagittis dui leo, mollis faucibus dui faucibus sit amet. 
            Nullam vestibulum tempus eros, eu viverra lorem tristique in. 
            Vestibulum viverra vitae nunc at malesuada. Fusce a sapien nunc. 
            Morbi interdum ipsum et vehicula dapibus.
          </p>
        </div>

        <div class="k-ms-programtitle">

          <hr></hr>

          <h3 class="k-joinus-mstitle">Откликнуться на вакансию</h3>
          <p class="k-joboffer-category">Заполните форму и нажмите "Отправить".</p>

          <form id="joinus-form" method="POST" action="send.php" style="margin-top: 25px;">

            <div class="mb-3">
              <label for="nameandsurname" class="form-label">Имя и Фамилия</label>
              <input name="name" type="text" class="form-control" id="nameandsurname" aria-describedby="nameandsurnamehelp" required>
              <div id="nameandsurnamehelp" class="form-text">Напишите тут своё IC имя и фамилию</div>
            </div>

            <div class="mb-3">
              <label for="discordform" class="form-label">Discord</label>
              <input name="discord" type="text" class="form-control" id="discordform" required>
            </div>

            <div class="mb-3">
              <label for="aboutyourself" class="form-label">О себе</label>
              <textarea name="aboutyourself" style="max-height: 170px;" class="form-control" id="aboutyourself" rows="3" aria-describedby="aboutyourselfhelp"></textarea>
              <div id="aboutyourselfhelp" class="form-text">Развернуто расскажите о себе.</div>
            </div>

            <div class="mb-3 form-check">
              <input name="gohomecheck" type="checkbox" class="form-check-input" id="gohomecheck">
              <label class="form-check-label" for="gohomecheck">Я хочу участвовать в программе "Возвращение домой"</label>
            </div>

            <button type="submit" class="btn btn-warning">Отправить</button>
          </form>

          <?php
          
          $joinname = $_POST['name'];
          $joindiscord = $_POST['discord'];
          $joinabout = $_POST['aboutyourself'];
          $joingohome = $_POST['gohomecheck'];

          $mysqli = new mysqli("localhost", "root", "", "coroner");

          if (!isset ($_POST['name']) ) {  

          } else {  
            $joinadd = $mysqli->query("INSERT INTO joinus (name, discord, about, gohome) VALUES ('$joinname', '$joindiscord', '$joinabout', '$joingohome')");
          }

          ?>

          <p class="k-joboffer-category">- Через некоторое время после подачи заявки с вами свяжется команда подбора.</p>

        </div>

      </div>

    </div>

    </div>
    
    <?php 
    require_once 'headroom.php'
    ?>

  </body>
</html>

<?php
require_once 'footer.php'
?>