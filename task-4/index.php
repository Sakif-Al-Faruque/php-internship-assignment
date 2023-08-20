<?php 
    require "./cow.php";
    require "./tiger.php";

    $tiger = new Tiger();
    $cow = new Cow();

    $tiger->produce_sound();
    echo "<br>";
    $cow->produce_sound();

?>