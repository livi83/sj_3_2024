<?php

    class Contact extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function insert(){
            //$conn = db_connection();
            if($this->db){
            if(isset($_POST['contact_submitted'])){
                $data = array('contact_name'=>$_POST['name'],
                'contact_email'=>$_POST['email'],
                'contact_message'=>$_POST['message'],
                'contact_acceptance'=>$_POST['acceptance'],
            );

            try{

                $query = "INSERT INTO contact (name, email, message, acceptance) 
                VALUES (:contact_name, :contact_email, :contact_message, :contact_acceptance)";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);

            }catch(PDOException $e){
                
                echo $e->getMessage();
            }

            }
            }else{
            echo 'Nemáme spojenie';
            } 

        }

        public function select(){
            try{
                $sql = "SELECT * FROM contact";
                $query =  $this->db->query($sql);
                $contacts = $query->fetchAll();
                return $contacts;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>