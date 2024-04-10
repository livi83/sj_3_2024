<?php

    class User extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function login($username, $password){
            //$username a $password došli z $_POST 
            try{
                $data = array(
                    'user_email'=>$username,
                    'user_password'=>$password,
                );
                
                $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                $n_rows = $query_run->rowCount();
                if($n_rows == 1) {
                    // login je uspesny
                    return true;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                    echo $e->getMessage();
            }
        }
    }


?>