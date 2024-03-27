<?php
include('partials/header.php');
?> 
<main>
      <?php include('partials/banner.php');?>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h2>Ďakujeme za vyplnenie formulára</h2>
              <?php

                //print_r($_POST);
                 $contact_object = new Contact();
                 $contact_object->insert();
              ?>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 