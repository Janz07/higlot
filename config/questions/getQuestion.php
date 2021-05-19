<?php

    Connect::openConn();

    $conn = Connect::getConn();

    $id_new = $id_quest;

    // echo $id;

    

    $stmt = $conn->query("SELECT * FROM anb WHERE id_question = $id_quest");
    while($row = $stmt->fetch()){
        $question = $row['text_question'];
    }

?>