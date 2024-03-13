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
                   
                    generate_portfolio(2,4);
                ?>
             
            </section>   

        </main>
  <?php
    include_once('partials/footer.php');
  ?>  