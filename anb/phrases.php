<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higlot</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/font">
    <link rel="stylesheet" href="../assets/styles/fontello.css">
    <link rel="stylesheet" href="../assets/styles/body.css">


</head>
<body>
    <?php

    include '../partials/header_logged2.php';
    include_once '../config/config.php';
    include_once '../config/connect.php';

    ?>

    <div class="container">
        <h1>Veamos algunas oraciones</h1>

        <?php
            $search = pg_connect("host=dbmainhiglot.c8jyywjwpyoj.us-east-1.rds.amazonaws.com port=5432 dbname=db_higlot user=dbmasterhiglot password=C8-09-A8-EA-05-D3") or die("Otra f");
            $result = "SELECT ph_id, txt_en, txt_es, pronu FROM anb.phrases"; 
             
             // $result = "SELECT id, letter_es, letter_en, pronunciation FROM abc";

             $resu = pg_query($search, $result);

             while($row = pg_fetch_assoc($resu)){
                echo 
                '<div class="phrase">
                    <div>'
                    .$row['txt_en'].
                    '</div>
                    <div>'
                    .$row['txt_es'].
                    '</div>
                    <td></td>
                </div>';
            }




        ?>
    </div>    
</body>
</html>