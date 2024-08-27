<?php

$precios = [23,43,28,12,45,32];

//ussort ordenara de mayor a menor lo que esta dentro, el primer parametro es donde tiene los valores, el segundo parametro es como decidira si es mayor o menor, para ello usamos una funcion en este caso la funcion anonima es por que no tiene nombre pero se ejecuta dentro, esta funcion encia dos parametros, la primera posicion y la segunda, 

//dentro de la funcion usamos la nave espacial, en este caso si es igual nos devuelve un o si es menor un -1 si es mayor un 1, esto le permite a usort poder decidir como ir ordenando la cadena de valores
usort( $precios, function($a,$b){
    return $a <=> $b;   
});

var_dump( $precios );