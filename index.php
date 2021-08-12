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

    <div class="banner">
        <div class="container">
            <div class="banner_in">
                <form action="config/loginUser.php" method="POST" autocomplete="off">
                    <h1>¡Inicia sesión!</h1>
                    <input type="text" name="email" id="" placeholder="Correo electrónico" required>
                    <input type="password" name="pass" id="" placeholder="Contraseña" required>
                    <button type="submit"class="btn_login">Entrar</button>
                    <h5>¿Olvidaste tu contraseña?</h5>
                    <a href="#" class="re_pa">Recordar contraseña</a>

                    <div class="btn_register"> <a href="signup.php" class="register">Registrarme</a> </div>  
                    <!-- <button class="btn_register" href="signup.php">Registrarme</button>   -->

                </form>

                <div class="banner_txt">
                    <img class="friends" src="assets/img/friends_sand.jpg" alt="">
                    <h2>Más idiomas, más vida</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="us">
        <div class="container">
            <div class="us_in">
                <div class="info1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Libero ipsum iusto quasi eos rem dignissimos iure id, similiqueLorem ipsum dolor sit 
                    amet consectetur adipisicing elit. 
                    Libero ipsum iusto quasi eos rem dignissimos iure id, similique 
                    amet unde molestias omnis, voluptatum quia veniam obcaecati quos ipsa facilis laboriosam?                
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Libero ipsum iusto quasi eos rem dignissimos iure id, similique 
                    amet unde molestias omnis, voluptatum quia veniam obcaecati quos ipsa facilis laboriosam?
                </div>
    
                <div class="info2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Libero ipsum iusto quasi eos rem dignissimos iure id, similique 
                    amet unde molestias omnis, voluptatum quia veniam obcaecati quos ipsa facilis laboriosam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Libero ipsum iusto quasi eos rem dignissimos iure id, similique 
                    amet unde molestias omnis, voluptatum quia veniam obcaecati quos ipsa facilis laboriosam?
                </div>
            </div>
        </div>
    </section>

   
    <?php
        include_once 'partials/footer.php';
    ?>


</body>
</html>