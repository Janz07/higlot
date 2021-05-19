<?php

    include_once 'config.php';
    include_once 'connect.php';
    include_once 'user.php';
    include_once 'repositoryUser.php';
    include_once 'confirmRegistration.php';

    Connect::openConn();

    $validator = new ValidatorRegistration($_POST['name'], $_POST['email'], htmlspecialchars($_POST['pass']), htmlspecialchars($_POST['pass2']), Connect::getConn());

    if ($validator->validRegistration()) {
        $user = new User('', $validator->getName(), $validator->getEmail(), password_hash($validator->getPass(), PASSWORD_DEFAULT), '1');

        $insertUser = RepoUser::insertUser(Connect::getConn(), $user);

        if ($insertUser) {
            echo 'Usuario satisfactoriamente registrado';
        }
        else{
            echo 'No hemos podido insertar tu usuario';
        }

    }
    else{

        $error = array(
            'errorName' => $validator->getErrorName(),
            'errorEmail' => $validator->getErrorEmail(),
            'errorPass' => $validator->getErrorPass(),
            'errorPass2' => $validator->getErrorPass2()
        );

        echo json_encode($error);

    }

    Connect::closeConn();
?>