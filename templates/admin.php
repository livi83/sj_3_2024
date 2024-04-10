<?php
include('partials/header.php');
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Admin rozhranie</h1>
                <h2>Kontakty</h2>
                <?php
                    $contact_object = new Contact();
                    $contacts = $contact_object->select();
                    echo '<table class="admin-table">';
                    foreach($contacts as $c){
                        echo '<tr>';
                        echo '<td>'.$c->name;'</td>';
                        echo '<td>'.$c->email;'</td>';
                        echo '<td>'.$c->message;'</td>';
                        echo '<td>'.$c->acceptance;'</td>';
                        echo '</tr>';
                    }
                        
                    echo '</table>';
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>

