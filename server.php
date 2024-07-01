<?php 
// header("content-type: application/json");
$rawListaTodO = file_get_contents("./db/todoList.json");
$listaTodo = json_decode($rawListaTodO, true);
var_dump($listaTodo)
?>