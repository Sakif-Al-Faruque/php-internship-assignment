<?php 
 require("./rectangle.php");
 require("./circle.php");

 $rectangle = new Rectangle();
 $circle = new Circle();


 $rectangle->set_height(4);
 $rectangle->set_width(5);
 echo "Rectangle area: ".$rectangle->shape_area()."<br>";


 $circle->set_radius(4);
 echo "Circle area: ".$circle->shape_area()."<br>";
?>