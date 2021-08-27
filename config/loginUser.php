<?php


include_once 'config.php';
include_once 'connect.php';
include_once 'user.php';
include_once 'repositoryUser.php';
include_once 'confirmLogin.php';

Connect::openConn();

$validator = new ConfirmLogin($_POST['email'], $_POST['pass'], Connect::getConn());

if ($validator->getError() === "" && !is_null($validator->getUser())) {
    //echo 'Sesión iniciada con éxito!';
 
    session_start();

    $_SESSION['email'] = $_POST['email'];
   
}
else {
    echo $validator->getError();
}


Connect::closeConn();

?>