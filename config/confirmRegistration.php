<?php

include_once 'repositoryUser.php';

class ValidatorRegistration{

    private $name;
    private $email;
    private $pass;

    private $errorName;
    private $errorEmail;
    private $errorPass;
    private $errorPass2;

    public function __construct($name, $email, $pass, $pass2, $conn){

        $this->name="";
        $this->email="";
        $this->pass="";

        $this->errorName = $this->verifyName($name, $conn);
        $this->errorEmail = $this->verifyEmail($email, $conn);
        $this->errorPass = $this->verifyPass($pass);
        $this->errorPass2 = $this->verifyPass2($pass, $pass2);

        if ($this->errorPass === "" && $this->errorPass2 === "") {
            $this->pass = $pass;
        }

    }

    private function startedVariable($variable){
        if (isset($variable) && !empty($variable)) {
            return true;
        }else{
            return false;
        }
    }

    private function verifyName($name, $conn){

        if (!$this->startedVariable($name)) {
            return "Ingrese un nombre de usuario, por favor";
        }
        else{
            $this->name = $name; 
        }

        if (strlen($name)<1) {
            return "El nombre del usuario debe ser de al menos 1 caracteres";

        }
        
        if (strlen($name)>20) {
            return "El nombre del usuario debe ser de máximo 20 caracteres";
        }

        return "";

    }

    private function verifyEmail($email, $conn){

        if (!$this->startedVariable($email, $conn)) {
            return "Ingresa tu correo";
        }

        else{
            $this->email = $email; 
        }

        if (RepoUser::emailExists($conn, $email)) {
            return "El correo que escribiste ya se encuentra en registrado en Higlot, prueba con otro";
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
            return "Ingresa un correo válido, ejemplo: ejemplo@gmail.com";
        }

        return "";
    }

    private function verifyPass($pass){

        if (!$this->startedVariable($pass)) {
            return "Ingrese su contraseña antes de continuar";
        }

        if (strlen($pass)<1) {
            return "Por tu seguridad la contraseña debe contener al menos 1 caracteres";
        }

        return "";

    }

    private function verifyPass2($pass, $pass2){

        if (!$this->startedVariable($pass)) {
            return "Ingrsa primero tu contraseña";
        }

        if (!$this->startedVariable($pass2)) {
            return "Te faltó repetir tu contraseña!";
        }

        if ($pass!==$pass2) {
            return "Las contraseñas no coinciden, intenta de nuevo!";
        }

        return "";

    }

    //GETTERS VARIABLES

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPass(){
        return $this->pass;
    }

    //GETTERS ERRORS

    public function getErrorName(){
        return $this->errorName;
    }

    public function getErrorEmail(){
        return $this->errorEmail;
    }

    public function getErrorPass(){
        return $this->errorPass;
    }

    public function getErrorPass2(){
        return $this->errorPass2;
    }

    public function validRegistration(){
        if ($this->errorName==="" && $this->errorEmail==="" && $this->errorPass==="" && $this->errorPass2==="") {
            return true;
        }
        else{
            return false;
        }
    }

}

?>