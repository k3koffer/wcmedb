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

<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Поиск</title>
        <link type="text/css" rel="stylesheet" href="/css/main1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Lato&family=Nanum+Gothic&family=PT+Sans:wght@700&display=swap" rel="stylesheet">
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <script src="https://unpkg.com/headroom.js"></script> 
    </head>
    <body>

    <div class="position-relative" style="width: 100%px; height: 100px; margin: 0 auto; padding-bottom: 50px; background-color: #1d5b91" class="">
    </div>

    <div class="position-relative" style="width: 100%px; height: 100px; margin: 0 auto; padding-bottom: 50px; background-color: #232a3a;" class="">
    <div style="right: 46%!important; top: 25%!important" class="position-absolute">   
        <p class="fs-2"><strong style="color: #e6e6e6;">Case Search</strong></p>
    </div>
    </div>

    <div class="position-relative" style="width: 100%px; height: 200px; margin: 0 auto; padding-bottom: 50px; background-color: #283c51;" class="">
        <form class="position-absolute" style="margin-top: 20px ;right: 43%!important; width: 300px;" method="GET" action="search.php">
        <div class="mb-3">  
            <label for="exampleInputEmail1" class="form-label"><strong style="color: #e6e6e6;">Введите имя человека</strong></label>
            <input type="text" class="form-control" name="query">
        </div>
        <button style="left: 25%!important; width: 150px;" type="submit" class="position-absolute btn btn-outline-light">Найти</button>
        </form>
    </div>

<div class="container" style="margin-top: 100px; width: 1000px; height:fit-content;">

    <?php


        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }

        $results_per_page = 10;
        $page_first_result = ($page-1) * $results_per_page;

/* $kekoffer_loh = '?query='$query'&page='$page
echo $kekoffer_loh

?query=aboba&page=2
*/


        $query = $_GET['query'];
        $mysqli = new mysqli("localhost", "root", "", "coroner");

        $result = $mysqli->query("SELECT name, id, place, age FROM entry WHERE name LIKE '%$query%' LIMIT 
        " . $page_first_result . ',' . $results_per_page);
        
       $querypag = "select *from entry";

        /* $querypag = "select name, id, place, age from entry where name LIKE '%$query%' LIMIT " . 
        $page_first_result . ',' . $results_per_page; */

        $resultpag = mysqli_query($conn, "SELECT name, id, place, age FROM entry WHERE name LIKE '%$query%'");  
        $number_of_result = mysqli_num_rows($resultpag);
        $number_of_page = ceil ($number_of_result / $results_per_page);  

        while($row = mysqli_fetch_array($result)){
            $name=$row['name'];
            $cased=$row['id'];
            $place=$row['place'];
            $age=$row['age'];

?>

    <table style="margin-left: auto; margin-right: auto;">

        <div class="k-tablediv position-relative">
            <div class="position-absolute top-0" style="text-align:left; width: 250px; margin-left: 5px;">
                <p style="" class="tdpadding"><strong> <?= $name ?></strong></p>
            </div>
            <div class="tdpadding position-absolute top-50" style="text-align:left; width: 150px; margin-top:10px; margin-left: 5px;">
                <p><strong>Case #:</strong> 2022-<?= $cased ?></p>
            </div>
            <div class="tdpadding position-absolute top-0 end-50" style="right: 40%!important;text-align:center; width: 220px; margin-left: 10px;">
                <p ><strong>Place Of Death:</strong> <?= $place ?></p>
            </div>
            <div class="tdpadding position-absolute top-0 end-0" style="text-align:right; width: 150px; margin-right: 10px;">
                <p><strong>Age:</strong> <?= $age ?> <strong>years</strong></p>
            </div>
        </div>

        <?php
        }

        ?>

    </table>

    

    <div style="margin-top: 100px; margin-bottom: 50px" align="center">
        <?php
                    //display the link of the pages in URL  
/*            for($page = 1; $page<= $number_of_page; $page++) {  
                echo '<a href = "search.php?page=' . $page . '"><button style="margin-left: 10px" ">' . $page . ' </button></a>';
            }  */
            for($page = 1; $page<= $number_of_page; $page++) {  
                echo '<a href = "search.php' . '?page=' . $page . '&query=' . $query . '"><button style="margin-left:10px; margin-right:10px;" ">' . $page . ' </button></a>';
            }
        ?>

        </div>

        <?php

require_once 'footer.php';
require_once 'headroom.php';
?>

    </div>

    </body>
</html>