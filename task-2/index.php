<?php 
    require "./auth.php";

    $auth = new Authentication();

    $auth->login("john", "12354");
    $token = $auth->generate_token();
    echo $auth->authorization($token);


?>