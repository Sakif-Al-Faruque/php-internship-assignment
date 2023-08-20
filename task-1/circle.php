<?php 
     require_once("./shape.php");

    class Circle extends Shape{
        private $radius;

        public function set_radius($radius){
            $this->radius = $radius;
        }
        public function shape_area(){
            return $this->radius*$this->radius*M_PI;
        }

    }

?>