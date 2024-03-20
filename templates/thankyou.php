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
                 $conn = db_connection();
                 if($conn){
                  if(isset($_POST['contact_submitted'])){
                      $data = array('contact_name'=>$_POST['name'],
                      'contact_email'=>$_POST['email'],
                      'contact_message'=>$_POST['message'],
                      'contact_acceptance'=>$_POST['acceptance'],
                    );

                    try{

                      $query = "INSERT INTO contact (name, email, message, acceptance) 
                      VALUES (:contact_name, :contact_email, :contact_message, :contact_acceptance)";
                      $query_run = $conn->prepare($query);
                      $query_run->execute($data);

                    }catch(PDOException $e){
                     
                      echo $e->getMessage();
                    }

                  }
                 }else{
                  echo 'Nemáme spojenie';
                 } 

              ?>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 