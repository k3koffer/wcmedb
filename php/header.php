<?php

?>

    <header style="background-color: #1d5b91; margin: 0 auto; width: 100%; height: 100px;" class="k-indexmain">

      <div style="left: 15%; width: 280px; height: 200px" href="/" class="position-absolute">
        
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>

        <div style="width: 50px; height: 50px; margin-right: 30px; margin-bottom: 50px;" class="position-absolute text-center">
          <img style="width: 50px; height: 50px;" src="/image/logo.png" class="rounded" alt="...">
        </div>


        <p style="color: #e6e6e6; margin-left: 60px;" class="position-absolute fs-4">Coroner Database</p>
      </div>

      <?php

      if (!isset ($_COOKIE['user']) ) {  
        $page_lk = 'Войти';  
      } else {  
        $page_lk = 'Личный кабинет';  
      }

      ?>

      <div class="container position-absolute" style="width: auto; right: 200px; top: 20px;">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav menu">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="search.php">Поиск</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reg.php"><?php echo $page_lk ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="joinus.php">Стать коронером</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      </div>

    </header>

<?php

?>