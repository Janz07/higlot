<?php


    $emailSe = $_SESSION['email'];

    // include_once '../config.php';
    // include_once '../connect.php';

    Connect::openConn();

    $conn = Connect::getConn();

    $stmt = $conn->query("SELECT * FROM users WHERE user_email = '{$emailSe}'");
    while($row = $stmt->fetch()){
        $nameSe = $row['us_name'];
    }


?>