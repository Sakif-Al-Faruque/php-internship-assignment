<?php 
     require_once("./shape.php");

    class Rectangle extends Shape{
        private $height;
        private $width;

        public function set_height($height){
            $this->height = $height;
        }
        public function set_width($width){
            $this->width = $width;
        }

        public function shape_area(){
            return $this->height*$this->width;
        }

    }

?>