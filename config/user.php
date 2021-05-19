<?php

class User {

    private $id;
    private $name;
    private $email;
    private $pass;
    private $state;

    public function __construct ($id, $name, $email, $pass, $state){

        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->state = $state;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPass(){
        return $this->pass;
    }

    public function getState(){
        return $this->state;
    }


}


?>