<?php 
    require_once "./animal.php";

    class Cow extends Animal{
        public function produce_sound(){
            echo "hamba";
        }
    }


?>