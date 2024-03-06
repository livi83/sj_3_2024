<?php
  include_once('partials/header.php');
?>
        <main>
            <section class="banner">
                <div class="container text-white">
                    <h1>Portfólio</h1>
                </div>
            </section>
              <section class="container">
                <?php
                    $n_rows = 2;
                    $n_cols = 4;
                    $n_portfolio = 1;
                    for($i = 0; $i<$n_rows;$i++){
                        echo('<div class="row">');
                        //sem pôjde cyklus po stĺpcoch
                        for($j = 0; $j<$n_cols;$j++){
                            echo('<div class="col-25 portfolio text-white text-center" id="portfolio-'.$n_portfolio.'">');
                            echo('Web stránka '.$n_portfolio);
                            $n_portfolio++;
                            echo('</div>');
                        }
                        echo('</div>');
                    }
                ?>
             
            </section>   

        </main>
  <?php
    include_once('partials/footer.php');
  ?>  