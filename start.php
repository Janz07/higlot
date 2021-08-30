<?php


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
    <link rel="stylesheet" href="assets/styles/footer.css">

    <link rel="stylesheet" href="assets/styles/logged/start.css">

</head>
<body>

    <?php
        include_once 'config/config.php';
        include_once 'config/connect.php';
        include_once 'config/loginUser.php';
        include_once 'config/getData/getPersonalData.php';
        
       
        include 'partials/header_logged.php';

    ?>


    <h1>¡Hola <?php echo $nameSe?>!</h1>


    <h3>
        Sabemos lo genial que puede ser aprender un idioma, por eso Higlot está hecho para ti, ¡dinos por cuál estás interesado!
    </h3>

    <div class="container">
        <section>
            <div class="info_sec">
                <div class="info_txt">
                    <h2 class="title_sec">Inglés</h2>
                    <p>Tan cool como necesario, el inglés es considerado como el idioma el idioma universal, indudablemente te ayudará a comuncarte con 
                        gran parte del planeta, aumentará tus posibilidades de conseguir un empleo y te abrirá muchas puertas.
                    </p>
                </div>
                <div class="parallax" id="sec_en">
                    <div class="button_ch">
                        <a href="#" class="choose">
                            Escoger
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="info_sec">
                <div class="parallax" id="sec_fr">
                <div class="button_ch">
                        <a href="#" class="choose">
                            Escoger
                        </a>
                    </div>
                </div>
                <div class="info_txt">
                    <h2 class="title_sec">Francés</h2>
                    <p>Uh la la, qué elegancia la de Francia, el idioma del amor, el cual hablan en más de 7 países de Europa.
                        El tercer idioma más hablado en la tierra, de seguro te permitirá conectarte con la cultura Europea y Africana 
                        de la mejor manera.
                    </p>
                    
                </div>
            </div>
        </section>

        




    </div>

    <?php
        include_once 'partials/footer.php';
    ?>



    <script src="assets/js/option_user.js"></script>
</body>
</html>