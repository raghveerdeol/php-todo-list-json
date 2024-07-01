<?php
header("content_type: application/json");
// recupero dati in json 
$rawListaTodO = file_get_contents("./db/todoList.json");
// decodifico i dati 
$listaTodo = json_decode($rawListaTodO, true);
echo json_encode($listaTodo);
?>