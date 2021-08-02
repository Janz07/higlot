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

<table class="default" cellspacing=0>
       <thead>
           <tr>
               <th>Español</th>
               <th>Inglés</th>
               <th>Pronunciación Inglés</th>
               <th>Audio</th>
           </tr>
       </thead>
       <tbody>
           <?php 
                $search = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=1006205761.Higlot") or die("Otra f");
                $result = "SELECT id, letter_es, letter_en, pronunciation FROM abc";

                $resu = pg_query($search, $result);


                    
                    while($row = pg_fetch_assoc($resu)){
                        echo 
                        '<tr class="tr">
                            <td>'.$row['letter_es'].'</td>
                            <td>'.$row['letter_en'].'</td>
                            <td>'.$row['pronunciation'].'</td>
                            <td></td>
                        </tr>';
                    }
            ?>
       </tbody>
    </table>


    
    



    <script src="../assets/js/option_user.js"></script>
    <script src="../assets/js/solution.js"></script>
</body>
</html>