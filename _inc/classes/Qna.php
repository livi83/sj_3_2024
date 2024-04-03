<?php

    class Qna extends Database{
        
        private $db;

        public function __construct(){
            $this->db = $this->db_connection();        
        }

        public function select(){
            try{
                $db_query = "SELECT * FROM qna";
                $query =  $this->db->query($db_query);
                $qna = $query->fetchAll();
                return $qna;

            }catch(PDOException $e){
                echo($e->getMessage());
            }   
        }

        public function get_qna(){
            $qna = $this->select();
            $result = '';
            for ($i=0;$i<count($qna);$i++){
                $result .=  '<div class="accordion">';
                $result .=  '<div class="question">'.$qna[$i]->question.'</div>';
                $result .=  '<div class="answer">'.$qna[$i]->answer.'</div>';
                $result .=  '</div>';
              }
            return $result;
        }

        
    }
?>