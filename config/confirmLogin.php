<?php

class ConfirmLogin {

    private $user;
    private $error;

    public function __construct($email, $pass, $conn){
        
        $this->error = "";

        if (!$this->started_variable($email) || !$this->started_variable($pass)) {

            $this->user = null;
            $this->error = "Sus datos ingresados no son correctos";

        }
        else{
            $this->user = RepoUser::getUserByEmail($email, $conn);

            if (is_null($this->user) || !password_verify($pass, $this->user->getPass())) {
                
                $this->error = "¡Ups! datos incorrectos";
                $this->error = header('Location: ../error.php');
            }
        }
    }

    private function started_variable($variable){

        if (isset($variable) && empty($variable)) {
            return false;
        }
        else{
            return true;
        }

    }

    public function getUser(){
        return $this->user;
    }

    public function getError(){
        return $this->error;
    }

}


?>