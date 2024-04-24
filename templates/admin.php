<?php
include('partials/header.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Admin rozhranie</h1>

                <?php
                    include('partials/admin-kontakt.php');
                    include('partials/admin-qna.php');

                ?>
                
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>

