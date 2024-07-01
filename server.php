<?php
header("content_type: application/json");
// recupero dati in json 
$rawListaTodO = file_get_contents("./db/todoList.json");
// decodifico i dati 
$listaTodo = json_decode($rawListaTodO, true);
// se stato è settato allora filtro
if ($_GET["stato"] === "") {
    $listaTodo = json_decode($rawListaTodO, true);
} else {
    $listaTodo = array_filter($listaTodo, fn($element) => $element["stato"] === $_GET["stato"]);
}

$jsonFiltredList = json_encode($listaTodo);

file_put_contents("./db/listaFiltrata.json",$jsonFiltredList);
// codifico in json 
echo file_get_contents("./db/listaFiltrata.json");
?>