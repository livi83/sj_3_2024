
<?php
  require('../_inc/config.php');
  //echo($_SESSION['logged_in']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 'Moj web | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
    <?php
      //add_stylesheet();
      $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
      $page_object = new Page();
      $page_object->set_page_name($page_name);
      echo($page_object->add_stylesheet());
    ?>
</head>
<body>
    <header class="container main-header">
        <div>
          <a href="home.php">
            <img src="../assets/img/logo.png" height="40">
          </a>
        </div>
      <nav class="main-nav">
      <ul class="main-menu" id="main-menu">
        <?php
           $pages = array('Domov'=>'home.php',
                'Portfólio'=>'portfolio.php',
                'Q&A'=>'qna.php',
                'Kontakt'=>'kontakt.php'  
           );
           //echo(generate_menu($pages));
           if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
              $pages['Odhlasiť'] = 'logout.php';
           }

           $menu_object  = new Menu($pages);
           echo($menu_object->generate_menu());

        ?>
       
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
