<?php
include('partials/header.php');
?> 
  <main>
    <?php include('partials/banner.php');?>
        <section class="container">
      <div class="row">
        <div class="col-50"> 
          <h3>Máte otázky?</h3>
          <p>Incididunt mollit quis eiusmod tempor voluptate duis eu enim amet excepteur cupidatat magna velit. </p> 
          <p>Velit id ad laborum velit commodo.</p>
          <p>Consectetur laborum aliqua nulla anim cupidatat consectetur est veniam cupidatat.</p>
        </div>
        <div class="col-50 text-right">
          <h3>Napíšte nám</h3>
          <form id="contact" action="thankyou.php" method="POST">
            <input type="text" placeholder="Vaše meno" name="name" required><br>
            <input type="email" placeholder="Váš email" name="email" required><br>
            <textarea placeholder="Vaša správa" name="message"></textarea><br>
            <input type="checkbox" name="acceptance" value="1" required>
            <label> Súhlasím so spracovaním osobných údajov.</label><br>
            <input type="submit" name="contact_submitted"value="Odoslať" >
          </form>
        </div>
      </div>
    </section>
  </main>
  <?php
    include_once('partials/footer.php')
  ?> 