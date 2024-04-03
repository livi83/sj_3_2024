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

        function get_portfolio(){
            $portfolio = $this->select();
            $result = '';
            for ($i=0;$i<count($portfolio);$i++){
                $temp_i = $i+1;
                if($temp_i%4==1){
                    $result .= '<div class="row">';
                    $result .= '<div class="col-25 portfolio text-white textcenter" style = "background-image: url(\''.$portfolio[$i]->image.'\');"'.'>';
                    //$result .= '<a href = "">'.$portfolio[$i]->name.'</a>';
                    $result .= '<a href="../templates/portfolio-single.php?id='.$portfolio[$i]->id.'">'.$portfolio[$i]->name.'</a>';
                    $result .= '</div>';
                }
                else{
                    $result .= '<div class="col-25 portfolio text-white textcenter" style = "background-image: url(\''.$portfolio[$i]->image.'\');"'.'>';
                    //$result .= '<a href = "">'.$portfolio[$i]->name.'</a>';
                    $result .= '<a href="../templates/portfolio-single.php?id='.$portfolio[$i]->id.'">'.$portfolio[$i]->name.'</a>';
                    $result .= '</div>';
                    $result .= '</div>';
                }
             
            }
            return $result;
        }




    }
?>