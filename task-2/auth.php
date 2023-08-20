<?php 
    require("./Logging.php");

    class Authentication implements Logging{
        const USERNAME="john";
        const PASSWORD="1234";
        const TOKEN = "john888888888*******1234";

        private $logValue;
        private $username;
        private $password;


        public function login($username, $password){
            $this->username = $username;
            $this->password = $password;
        }

        public function generate_token(){
            return $this->username."888888888*******".$this->password;
        }
        
        public function authorization($token){
            if($token == Authentication::TOKEN){
                return "ACCESS GRANTED";
            }
            return "ACCESS RESTRICTED";
        }


    }



?>