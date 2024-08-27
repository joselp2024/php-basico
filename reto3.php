<?php

function obtener_hora(){

    $horaActual = date("H:i:s");
    return $horaActual;

};

echo "podria proporcionar la hora acutal \n";
echo "la hora es ".obtener_hora();

echo "\n";

