<?php
include_once('partials/header.php');
?> 
        <main>
             
              <section class="container">
                <?php
                    $portfolio_object = new Portfolio();
                    $portfolio_single = $portfolio_object->select_single();

                    echo '<h2>'.$portfolio_single->name.'</h2>';
                    echo '<img src="'.$portfolio_single->image.'" width="600"/>';
                    echo '<br><br>';
                    echo '<p>'.$portfolio_single->text.'</p>';
              
                ?>
            </section>   

        </main>
<?php
  include_once('partials/footer.php')
?> 