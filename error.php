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
    <link rel="stylesheet" href="assets/styles/banner.css">
    <link rel="stylesheet" href="assets/styles/us.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
 
</head>
<body>
    
    <?php
        require 'partials/header.php';
    ?>

    <div class="container">
        <div class="error">
            <h2>El correo y/o la contraseña no coinciden, verifica nuevamente</h2>
        </div>
        <div class="login_form">
            <form action="config/loginUser.php" method="POST">
                <h1>¡Inicia sesión!</h1>
                <input type="text" name="email" id="" placeholder="Correo electrónico">
                <input type="password" name="pass" id="" placeholder="Contraseña">
                <button type="submit"class="btn_login">Entrar</button>
                <h5>¿Olvidaste tu contraseña?</h5>
                <a href="#" class="re_pa">Recordar contraseña</a>
        
                <div class="btn_register"> <a href="signup.php" class="register">Registrarme</a> </div>  
        
            </form>
        </div>
    </div>



</body>
</html>