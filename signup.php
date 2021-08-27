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
    <link rel="stylesheet" href="assets/styles/footer.css">
  

    <link rel="stylesheet" href="assets/styles/body.css">
    <link rel="stylesheet" href="assets/styles/signup.css">

</head>
<body>

    <?php
        require 'partials/header.php';
    ?>

    <div class="signup_sec">
        <div class="container">
            <form action="config/userRegistration.php" method="POST" autocomplete=off>
                <h1>¿Listos?</h1>
                <input type="email" name="email" placeholder="Correo electrónico">
                <input type="text" name="name" placeholder="¿Cuál es tu nombre?">
                <input type="password" name="pass" placeholder="Contraseña">
                <input type="password" name="pass2" placeholder="Verifica tu contraseña"> 

                <button type="submit" class="btn-signup">Registrarme</button>
            </form>
        </div>
    </div>

    <?php
        include_once 'partials/footer.php';
    ?>

    
</body>
</html>