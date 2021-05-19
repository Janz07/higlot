
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

                
                $id = '1';


                include_once '../config/questions/getQuestion.php';


            ?>
            <h2>
                <?php
                    echo '1. '.$question;
                ?>
            </h2>
            <form action="q1.php" method="POST" name="form">
            
                <input type="hidden" name="id" value="1">
                <div class="option">
                    <label for="">
                        <input type="radio" name="option_anb" value="Adiós">
                        <span>Adiós</span>
                    </label>
                </div>
                <div class="option">
                    <label for="">
                        <input type="radio" name="option_anb" value="Hola">
                        <span>Hola</span>
                    </label>
                </div>
                <div class="option">
                    <label for="">
                        <input type="radio" name="option_anb" value="Me gusta">
                        <span>Me gusta</span>
                    </label>
                </div>
                <div class="option">
                    <label for="">
                        <input type="radio" name="option_anb" value="Perfecto">
                        <span>Perfecto</span>
                    </label>
                </div>

                <button type="submit">Enviar</button>
            </form>

            <?php

                include_once '../config/questions/confirmAnswer.php';

            ?>


            <h1>

                <?php
                    if (isset($answer)) {
                        echo  $answer;
                    }
                ?>
            </h1>

            


            <div class="solution">
                <div class="correct" id="id_correct">
                    <h1>Buenaaaardo</h1>
                </div>
                <div class="wrong" id="id_wrong">
                    <h1>Maaaaaal</h1>
                </div>        
            </div>

            <script>
                var show_correct = document.getElementById('id_correct');
                var show_wrong = document.getElementById('id_wrong');
                var $ans = "<?= $answer ?>";
                console.log($ans);
                if ( $ans == 'c') {
                    console.log($ans);
                    show_correct.classList.add("correct_on");
                }
                else if( $ans == 'w'){
                    console.log($ans);
                    show_wrong.classList.add("wrong_on");
                }

            </script>

            

            <h1>
            <? $answer ?>
            </h1>
        </div>
    </div>

    <script src="../assets/js/option_user.js"></script>
    <script src="../assets/js/solution.js"></script>

</body>
</html>