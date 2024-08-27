<?php

//encontrar las maneras de llegar de un punto a otro con 9 tipos de puntos
//siempre partimos desde el punto1

//2 > 1
//3 > 2
//4 > 3
//5 > 5
//6 > 8
//7 > 13
//8 > 21
//9 > 34


$numeroTienda = (int) readline("di el numero de tienda: ");

$anterios = 0;
$actual =1;

for($i = 2; $i<= $numeroTienda; $i++){
    
    $temporal = $actual;
    $actual += $anterios;
    $anterios = $temporal;

    echo"$actual \n";
}


