<?php 
interface Logging{
    public function login($username, $password);
    public function generate_token();
    public function authorization($token);
}



?>