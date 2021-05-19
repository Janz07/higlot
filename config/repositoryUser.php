<?php

class RepoUser {

    public static function insertUser($conn, $user){

        $userInserted = false;

        if (isset($conn)) {

            try {

                $sql = "INSERT INTO users(us_name, user_email, user_pass, user_state) values (:name, :email, :pass, :state)";

                $sentence = $conn->prepare($sql);

                $usu_name = $user->getName();
                $email = $user->getEmail();
                $pass = $user->getPass();
                $usu_state = $user->getState();

                $sentence->bindParam(':name', $usu_name, PDO::PARAM_STR);
                $sentence->bindParam(':email', $email, PDO::PARAM_STR);
                $sentence->bindParam(':pass', $pass, PDO::PARAM_STR);
                $sentence->bindParam(':state', $usu_state, PDO::PARAM_STR);

                $userInserted = $sentence->execute();

                $userInserted = true;

                  
            } catch (PDOException $e) {
                print "ERROR". $e->getMessage();
            }

        } return $userInserted; //true or false
          
    }

    public function getUserByEmail($email, $conn){

        $user = null;

        if (isset($conn)) {
            
            try {

                include_once 'user.php';

                $sql = "SELECT * FROM users WHERE user_email = :email";

                $sentence = $conn->prepare($sql);
                $sentence->bindParam(':email', $email, PDO::PARAM_STR);
                $sentence->execute();

                $resu = $sentence -> fetch();

                if (!empty($resu)) {
                    
                    $user = new User( $resu['user_id'], $resu['us_name'], $resu['user_email'], $resu['user_pass'], $resu['user_state'] );

                }

                  
            } catch (PDOException $e) {
                print "ERROR". $e->getMessage();
                die();
            }

        }

        return $user;

    }

    public static function emailExists($conn, $email){

        $emailExists = true;
        if (isset($conn)) {
            
            try {
                $sql = "SELECT * FROM users where user_email = :email";
                $sentence = $conn->prepare($sql);
                $sentence->bindParam(':email', $email, PDO::PARAM_STR);
                $sentence->execute();
                $res = $sentence->fetchAll();
                
                if (count($res)) {
                    $emailExists = true;
                }
                else{
                    $emailExists = false;
                }

            } catch (PDOException $e) {
                print "ERROR". $e->getMessage();
            }

        }

        return $emailExists;
    }

}

?>