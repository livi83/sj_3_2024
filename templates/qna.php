<?php
include('partials/header.php');
?> 
<main>
    <?php include('partials/banner.php');?>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
      <section class="container">
        <?php
          $qna = array('Otázka 1' => 'Odpoveď 1',
                       'Otázka 2' => 'Odpoveď 2',
                       'Otázka 3' => 'Odpoveď 3',
                       'Otázka 4' => 'Odpoveď 4',
                      );
          generate_qna($qna);
        ?>
      </section>
    </section>
  </div>
  </main>
  <?php
    include_once('partials/footer.php')
  ?> 