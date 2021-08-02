
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Higlot</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/font">
    <link rel="stylesheet" href="../assets/styles/fontello.css">

    <link rel="stylesheet" href="../assets/styles/body.css">
    <link rel="stylesheet" href="../assets/styles/logged/qStyle.css">
</head>
<body>

    <?php

        include '../partials/header_logged2.php';
        include_once '../config/config.php';
        include_once '../config/connect.php';

    ?>

    <div class="question">
        <div class="container">
        
            <?php

                Connect::openConn();

                $conn = Connect::getConn();

                
                $id_quest = '1';


                include_once '../config/questions/getQuestion.php';


            ?>
            <h2>
                <?php
                    echo '1. '.$question;
                ?>
            </h2>
            <form action="q1.php" method="POST" name="form">
            
                    <input type="hidden" name="id_quest" value="1">
                    <label for="a1">
                        <input type="radio" name="option_anb" value="Adiós" id="a1">
                        <span>Adiós</span>
                    </label>
                    <label for="a2">
                        <input type="radio" name="option_anb" value="Hola" id="a2">
                        <span>Hola</span>
                    </label>

                    <label for="a3">
                        <input type="radio" name="option_anb" value="Me gusta" id="a3">
                        <span>Me gusta</span>
                    </label>

                    <label for="a4">
                        <input type="radio" name="option_anb" value="Perfecto" id="a4">
                        <span>Perfecto</span>
                    </label>

                    <div class="check_ans_out" id="check_ans_out">
                        <button type="submit" class="check_answers" id="check_answers">Verificar</button>
                    </div>
                    
            </form>
                
            <div class="btn_continue" id="btn_continue">
                <form action="../config/questions/nextQuestion.php">
                    <input type="hidden" name="id_quest" value="<?php echo $id_quest?>">
                    <button class="continue">Continuar</button>
                </form>
            </div>

            <?php

                include_once '../config/questions/confirmAnswer.php';

            ?>



            

            


            <div class="solution">
                <div class="correct" id="id_correct">
                    <h1>¡Perfecto! Continúa con la siguiente pregunta</h1>
                </div>

                <div class="wrong" id="id_wrong">
                    <h1>¡Espera! Revisa tu respuesta</h1>
                </div>        
            </div>

            <script>
                var show_correct = document.getElementById('id_correct');
                var show_wrong = document.getElementById('id_wrong');
                var show_continue = document.getElementById('btn_continue');
                var show_verifie = document.getElementById('check_ans_out');
                var $ans = "<?= $answer ?>";
                console.log($ans);
                if ( $ans == 'c') {
                    console.log($ans);
                    show_correct.classList.add("correct_on");
                    show_continue.classList.add("work");
                    show_verifie.classList.add("off");

                }
                else if( $ans == 'w'){
                    console.log($ans);
                    show_wrong.classList.add("wrong_on");
                }

            </script>

            

            
        </div>
    </div>

                

    <script src="../assets/js/option_user.js"></script>
    <script src="../assets/js/solution.js"></script>
</body>
</html>