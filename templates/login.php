<?php
include('partials/header.php');
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Prihlásenie</h1>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Vaše meno">
                    <br>
                    <input type="text" name="password" placeholder="Vaše heslo">
                    <br>
                    <input type="submit" value="Odoslať" name="user_login">
                </form>
                <?php
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password']; 

                        $user_object = new User();

                        $login_success = $user_object->login($email,$password);
                        //ak metóda vráti TRUE
                        if($login_success == true){
                            header('Location: admin.php');
                            die;
                        }else{
                            echo 'Nesprávne meno alebo heslo';
                        }

                    }
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>

