<?php

    class Portfolio extends Database{

        private $db;

        public function __construct(){
            $this->db = $this->db_connection();        
        }

        public function select(){
            try{
                $db_query = "SELECT * FROM portfolio";
                $query =  $this->db->query($db_query);
                $portfolio = $query->fetchAll();
                return $portfolio;

            }catch(PDOException $e){
                echo($e->getMessage());
            }   
        }

    }
?>