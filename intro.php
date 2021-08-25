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
    
    <link rel="stylesheet" href="assets/styles/logged/intro/likes.css">

</head>
<body>

    <?php

        include 'partials/header_logged.php';

    ?>

    <div class="likes_out">
        <div class="container">
            <h1>Esto sólo es el comienzo</h1>
            <h2>¡Queremos conocerte! En base a lo que te gusta te enseñaremos tu idioma favorito.</h2>
            <form action="config/intro/get_likes.php" method="POST">
                <div class="likes_in">
                    <div class="like">
                        <h3>Deportes</h3>
                        <img src="assets/img/sports.jpg" alt="">
                        <div class="list_like">
                            <label for="s1" class="a">
                                <input type="checkbox" name="tag[]" id="s1" value="football">
                                <span class="item_like">Fútbol</span>
                            </label>
                            <label for="s2" class="b">
                                <input type="checkbox" name="tag[]" id="s2" value="basketball">
                                <span class="item_like">Baloncesto</span>
                            </label>
                            <label  for="s3" class="c">
                                <input type="checkbox" name="tag[]" id="s3" value="volley">
                                <span class="item_like">Volleyball</span>
                            </label>
    
                        </div>
                    </div>
                    <div class="like">
                        <h3>Videojuegos</h3>
                        <img src="assets/img/games2.jpg" alt="">
                        <div class="list_like">
                            <label for="vg1" class="d" >
                                <input type="checkbox" name="tag[]" id="vg1" value="shooting">
                                <span class="item_like">Shooting</span>
                            </label>
                            <label for="vg2" class="e" >
                                <input type="checkbox" name="tag[]" id="vg2" value="fornite">
                                <span class="item_like">Fornite</span>
                            </label>
                            <label  for="vg3" class="f" >
                                <input type="checkbox" name="tag[]" id="vg3" value="cars">
                                <span class="item_like">Cars</span>
                            </label>
                        </div>
                    </div>
                    <div class="like">
                        <h3>Música</h3>
                        <img src="assets/img/music.jpg" alt="">
                        <div class="list_like">
                            <label for="m1" class="e">
                                <input type="checkbox" name="tag[]" id="m1" value="rock">
                                <span class="item_like">Rock</span>
                            </label>
                            <label for="m2" class="b">
                                <input type="checkbox" name="tag[]" id="m2" value="reggae">
                                <span class="item_like">Regageton</span>
                            </label>
                            <label  for="m3" class="c">
                                <input type="checkbox" name="tag[]" id="m3" value="pop">
                                <span class="item_like">Pop</span>
                            </label>
                        </div>
                    </div>
                    <div class="like">
                        <h3>Literatura</h3>
                        <img src="assets/img/book.jpg" alt="">
                        <div class="list_like">
                            <label for="b1" class="c">
                                <input type="checkbox" name="tag[]" id="b1" value="aventure">
                                <span class="item_like">Aventura</span>
                            </label>
                            <label for="b2" class="d">
                                <input type="checkbox" name="tag[]" id="b2" value="GP">
                                <span class="item_like">Crecimiento personal</span>
                            </label>
                            <label  for="b3" class="f">
                                <input type="checkbox" name="tag[]" id="b3" value="drama">
                                <span class="item_like">Drama</span>
                            </label>
                        </div>
                    </div>
                    <div class="like">
                        <h3>Series</h3>
                        <img src="assets/img/series.png" alt="">
                        <div class="list_like">
                            <label for="series1" class="a">
                                <input type="checkbox" name="tag[]" id="series1" value="action">
                                <span class="item_like">Acción</span>
                            </label>
                            <label for="series2" class="e">
                                <input type="checkbox" name="tag[]" id="series2" value="comedy">
                                <span class="item_like">Comedia</span>
                            </label>
                            <label  for="series3" class="b">
                                <input type="checkbox" name="tag[]" id="series3" value="fantasy">
                                <span class="item_like">Fantasía</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="ready_in">
                    <h2>¿Listo? Aesgúrate de haber escogido tus opciones con sabiduria... Y comenzemos!</h2>
                    <button>Empezar</button>
                </div>
            </form>
        </div>  
    </div>

    <div class="ready">
        <div class="container">
            
        </div>
    </div>

    <?php
    
    include_once 'config/user.php';

    echo($id);

    include_once 'partials/footer.php';
    
    ?>


        <script src="assets/js/option_user.js"></script>
</body>
</html>