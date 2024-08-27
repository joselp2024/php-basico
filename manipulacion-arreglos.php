<?php

$edades = [8,22,40,34];

//count 
echo count($edades);
echo "\n";

//array_push

array_push($edades,45);
echo count($edades);
echo "\n";

//explode
//$lista_de_frutas = "fresa,cereza,manzana";
//$lista_de_frutas_array = explode(",", $lista_de_frutas);


$lista_de_frutas_array = ["fresa","cereza","manzana"];
$lista_de_frutas = implode(",", $lista_de_frutas_array);

var_dump($lista_de_frutas);
echo "\n";