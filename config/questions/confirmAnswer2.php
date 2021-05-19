<?php

    // include_once '../config.php';
    // include_once '../connect.php';

    Connect::openConn();
    $conn = Connect::getConn();



    if (empty($id)) {
        $id = "";
    }
    elseif(isset($_POST['id']))
    {
        $id = $_POST['id'];
        // echo $id;
    
    
        $stmt = $conn->query("SELECT * FROM anb_a WHERE id_question = '$id'");
        while($row = $stmt->fetch()){
            $ans = $row['id_answer'];
            echo '<br>' .$ans;
        }
    }
    
    
    // echo $_POST['option_anb'];

    if (!isset($_POST['option_anb'])) {
        $answer = "";
    }
    else {
        if ($_POST['option_anb'] ===  $ans) {
            echo 'Ta bien';
            $answer = 'c';
        }   
        else {
            echo 'La cagates';
            $answer = "w";
        }
    }
?>