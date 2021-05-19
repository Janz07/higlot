<?php

$id_quest = $_GET['id_quest'];
$next_quest =$id_quest + 1;

echo $id_quest;

header('Location: ../../anb/q'.$next_quest.'.php');

?>