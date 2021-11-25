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
    <link rel="stylesheet" href="../assets/styles/footer.css">

    
    <link rel="stylesheet" href="assets/styles/body.css">
    <link rel="stylesheet" href="assets/styles/banner.css">
    <link rel="stylesheet" href="assets/styles/us.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
 
</head>
<body>
    
    <?php
        require 'partials/header.php';

        if($_GET){
            echo "<script>alert('Perfecto, ya estás registrado, ya puedes iniciar sesión!');</script>";
        }else{
            echo "<script>alert('Lo siento, creo que ha ocurrido un error, inténtalo más tarde!');</script>";
        }
    ?>

    <div class="banner">
        <div class="container">
            <div class="banner_in">
                <form action="start.php" method="POST" autocomplete="on">
                    <h1>¡Inicia sesión!</h1>
                    <input type="text" name="email" id="" placeholder="Correo electrónico" required>
                    <input type="password" name="pass" id="" placeholder="Contraseña" required>
                    <button type="submit"class="btn_login">Entrar</button>
                    <h5>¿Olvidaste tu contraseña?</h5>
                    <a href="#" class="re_pa">Recordar contraseña</a>

                    <div class="btn_register"> <a href="signup.php" class="register" id="register">Registrarme</a> </div>  
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
                    Sabemos lo que conlleva aprender un idioma, con el pasar de los años todos nos hemos dado cuenta
                    que puede ser más que sólo repetir palabras... Sí, como un loro. En Higlot creemos aprender no 
                    es lo mismo que repetir, para aprender se debe estar realmente inmerso en una experiencia, encontrarle 
                    gusto a lo que hacemos, leemos, vemos y escuchamos! La educación convencional tiene muchas cosas a favor 
                    pero también muchas por mejorar.
                </div>
    
                <div class="info2">
                    Creemps que ya te dimos a entender más o menos a dónde vamos... En Higlot sabemos que cada persona es un 
                    mundo diferente, que la forma en que aprendes tal vez no es la misma que la que aprenden los demás 
                    o como está "estipulado" en la sociedad, para ello Higlot se enfoca en crear todo un plan de estudio basado en 
                    tus intereses ("sólo para ti"), ese tema del que no paras de hablar, esa serie, deporte, videojuego, aprenderás mucho más fácil 
                    con lo que te gusta, aprenderás mucho más fácil con Higlot. 
                </div>
            </div>
        </div>
    </section>

   
    <?php
        include_once 'partials/footer.php';
    ?>


</body>
</html>