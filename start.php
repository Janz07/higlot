<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Higlot</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/font">
    <link rel="stylesheet" href="assets/styles/fontello.css">

    <link rel="stylesheet" href="assets/styles/body.css">

</head>
<body>

    <?php
        include_once 'config/config.php';
        include_once 'config/connect.php';
        include_once 'config/loginUser.php';
        
       
        include 'partials/header_logged.php';

    ?>

    <h3>
        <?php echo $_SESSION['email'];?>
    </h3>



    <script src="assets/js/option_user.js"></script>
</body>
</html>