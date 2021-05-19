<?php

class Connect{
    private static $conn;
    public static function openConn(){
        if (!isset(self::$conn)) {
            
            try {
                include_once 'config.php';

                self::$conn = new PDO('pgsql:host='.NAME_SERVER.'; dbname='.DATABASE, NAME_USER, PASSWORD);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->exec("SET NAMES 'UTF8'");
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage(). "<br>";
            }
        }

    }

    public static function closeConn(){
        if (isset(self::$conn)) {
            self::$conn = null;
        }

    }

    public static function getConn(){

        if (isset(self::$conn)) {
            // echo 'Conn establecida, melo';
            return self::$conn;
        } else {
            echo 'No se pudo realizar una con con la base de datos';
        }

        // return self::$conn;
    }

}

Connect::openConn();

Connect::getConn();

?>