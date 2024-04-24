<h2>QNA</h2>
<?php
    $qna_object = new Qna();
    $qna = $qna_object->select();
    if(isset($_POST['delete_qna'])){
        $qna_id = $_POST['delete_qna'];
        $qna_object->delete($qna_id);
        header('Location: admin.php');
        exit();
    }
    echo '<table class="admin-table">';
    echo '<tr><th>Question</th>
                <th>Answer</th>
                <th>Delete</th>
            </tr>';
    foreach($qna as $q){
        echo '<tr>';
        echo '<td>'.$q->question;'</td>';
        echo '<td>'.$q->answer;'</td>';
        echo '<td>
                <form action="" method="POST">
                    <button type="submit" name="delete_qna" value="'.$q->id.'"'.'>Vymazať</button>
                </form>
                </td>';
        echo '</tr>';
    }
    echo '</table>';
?>