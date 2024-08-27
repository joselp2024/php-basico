<?php

for($i = 0; $i<3; $i++){
    echo". \n";

};

for($i = 0, $j = 0; $i<=9; $i++, $j +=2){
    echo"i = $i j=$j \n";

};

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24,
    "Recalentado" => 19,
);

foreach ($tiendita_de_cafes as $cafe => $price)
    

    if($cafe == "Recalentado"){
        echo "no es bueno, ya no vendemos";
    }else{
        echo "El café $cafe cuesta $$price USD \n";
    }


echo "\n";