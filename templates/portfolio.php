<?php
include('partials/header.php');
?> 
        <main>
             <?php include('partials/banner.php');?>
              <section class="container">
                <?php
                    //generate_portfolio(2,4);
                    $portfolio_object = new Portfolio();
                    echo($portfolio_object->get_portfolio());
                ?>
               
            </section>   

        </main>
<?php
  include_once('partials/footer.php')
?> 