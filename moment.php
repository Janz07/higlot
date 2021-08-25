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
    <link rel="stylesheet" href="assets/styles/logged/moment/moment.css">


</head>
<body>
    <?php

        require 'partials/header_logged.php';


    ?>

    <div class="moments">
        <div class="container">
            <div class="moment_list">
                <h1>¡Estos son tus momentos!</h1>
                <div class="moment_item unblocked a">
                    <h2>Un nuevo comienzo</h2>
                    <div class="item_info">
                        <ul class="item_description">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nulla, delectus quisquam est necessitatibus autem. </li>
                            <li>Non repudiandae, quibusdam aperiam ea cumque excepturi explicabo, commodi libero reprehenderit quis sequi? </li>
                            <li>Perferendis, obcaecati.</li>
                        </ul>
                        <img src="assets/img/start.jpg" alt="">
                    </div>
                </div>
                <div class="moment_item unblocked b">
                    <h2>Tierra a la vista</h2>
                    <div class="item_info">
                        <ul class="item_description">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nulla, delectus quisquam est necessitatibus autem. </li>
                            <li>Non repudiandae, quibusdam aperiam ea cumque excepturi explicabo, commodi libero reprehenderit quis sequi? </li>
                            <li>Perferendis, obcaecati.</li>
                        </ul>
                        <img src="assets/img/intermediate.jpg" alt="">
                    </div>
                </div>
                <div class="moment_item unblocked c">
                    <h2>Sin miedo</h2>
                    <div class="item_info">
                        <ul class="item_description">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nulla, delectus quisquam est necessitatibus autem. </li>
                            <li>Non repudiandae, quibusdam aperiam ea cumque excepturi explicabo, commodi libero reprehenderit quis sequi? </li>
                            <li>Perferendis, obcaecati.</li>
                        </ul>
                        <img src="assets/img/intermediate_advance.jpg" alt="">
                    </div>
                </div>
                <div class="moment_item blocked d">
                    <h2>Todo un crack</h2>
                    <div class="item_info">
                        <ul class="item_description">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nulla, delectus quisquam est necessitatibus autem. </li>
                            <li>Non repudiandae, quibusdam aperiam ea cumque excepturi explicabo, commodi libero reprehenderit quis sequi? </li>
                            <li>Perferendis, obcaecati.</li>
                        </ul>
                        <img src="assets/img/advance.jpg" alt="">
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