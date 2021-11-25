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
    
    <link rel="stylesheet" href="assets/styles/logged/profile/personal.css">
    <link rel="stylesheet" href="assets/styles/logged/profile/language.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
</head>
<body>

<?php

    require 'partials/header_logged.php';


?>

    <div class="profile_info">
        <div class="container">
            <div class="profile_info_in">
                <div class="personal_info">
                    <img src="assets/img/selfie2.png" alt="" class="img_profile">
                    <h3 class="profile_name">Andrés Quintero</h3>
                    <h3 class="profile_email">andresqp@gmail.com</h3>
                    <h3 class="suscription">Suscripción:</h3>
                    <h3 class="profile_start_sus">10/07/2021</h3>
                    <h3 class="profile_end_sus">10/01/2022</h3></br>
                    <a href="">Editar datos de tarjeta</a>
                </div>

                <div class="language_info">
                    <h2>Mis gustos</h2>
                    <div class="likes_out">
                        <div class="likes a">Real Madrid</div>
                        <div class="likes b">Rock</div>
                        <div class="likes a">Trending</div>
                        <div class="likes c">Sports</div>
                        <div class="likes b">Netflix</div>
                        <div class="likes c">Scare</div>
                    </div>
                    <h2>Medallas</h2>
                    <div class="medals_out">
                        <div class="medal">
                            <h4>Killer</h4>
                            <img src="assets/img/rpg-game.png" alt="">
                        </div>
                        <div class="medal">
                            <h4>Makinola</h4>
                            <img src="assets/img/makinola.png" alt="">
                        </div>
                        <div class="medal">
                            <h4>Perfeccionista</h4>
                            <img src="assets/img/glasses.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="level">
                <h2>Nivel: 1. Un nuevo comienzo</h2>
                <div class="progress">
                    <div class="progress_bar">
                    
                    </div>
                </div>
            </div>
            

        </div>
    </div>


    <?php
        include_once 'partials/footer.php';
    ?>
    
    <script src="assets/js/option_user.js"></script>
</body>
</html>