<?php

require "./Models/Categorias.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON

$categorias = Categorias::getAll();

echo json_encode($categorias);
