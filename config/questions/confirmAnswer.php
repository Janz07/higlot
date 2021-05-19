<?php

    // include_once '../config.php';
    // include_once '../connect.php';

    Connect::openConn();
    $conn = Connect::getConn();



    if (empty($id_quest)) {
        $id_quest = "";
    }
    elseif(isset($_POST['id_quest']))
    {
        $id_quest = $_POST['id_quest'];
        // echo $id;
    
    
        $stmt = $conn->query("SELECT * FROM anb_a WHERE id_question = '$id_quest'");
        while($row = $stmt->fetch()){
            $ans = $row['id_answer'];
            // echo '<br>' .$ans;
        }
    }
    
    
    // echo $_POST['option_anb'];

    if (!isset($_POST['option_anb'])) {
        $answer = "";
    }
    else {
        if ($_POST['option_anb'] ===  $ans) {
            $answer = 'c';
        }   
        else {
            $answer = "w";
        }
    }
?>