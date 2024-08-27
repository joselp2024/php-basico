<?php

// function get_Numero ($randnuminit, $randnumfinal){

//     $numero_aleatorio = rand($randnuminit,$randnumfinal);

//     switch($numero_aleatorio){
//         case 0;
//             echo("0");
//             break;
//             case 1:
//                 echo("1");
//                 break;
//                 case 2:
//                     echo("2");
//                     break;
//                     case 3:
//                         echo("3");
//                         break;
//                         case 4:
//                             echo("4");
//                             break;
//                             case 5:
//                                 echo("5");
//                                 break;
//                                 case 6:
//                                     echo("6");
//                                     break;
//                                     case 7:
//                                         echo("7");
//                                         break;
//                                         case 8:
//                                             echo("8");
//                                             break;
//                                             case 9:
//                                                 echo("9");
//                                                 break;
//                                                 case 10:
//                                                     echo("A");
//                                                     break;
//                                                     case 11:
//                                                         echo("B");
//                                                         break;
//                                                         case 12:
//                                                             echo("C");
//                                                             break;
//                                                             case 13:
//                                                                 echo("D");
//                                                                 break;
//                                                                 case 14:
//                                                                     echo("E");
//                                                                     break;
//                                                                     case 15:
//                                                                         echo("F");
//                                                                         break;
//                                                                         default:
//                                                                         echo("solo llego a 15");

//     }
// };
// si no recibiera ningun parametro
//get_Numero();
echo"\n";
//get_Numero(9,12);
// echo"\n";



//----------------------------------------------

// function get_mayor ($edad){

//     if($edad>= 18){
//         echo"es mayor de edad";
//     }else{
//         echo "es menor de edad";
//     } 
// };

// //$edadactual= (int) readline("ingrese su edad actual: ");
// //get_mayor($edadactual);
// echo"\n";

// function suma($a=1,$b=1){
//     echo"la suma de $a + $b es: ".$a+$b."\n";
// };

/*
suma(2,3);
suma(2,43);
suma(2);
echo"\n";*/


//----------------------------------------------

/*$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];
$resultado = [...$arreglo1, ...$arreglo2];

var_dump($resultado);*/

// function sum($a,$b){
//     echo "la suma de $a + $b es: ".$a+$b."\n";
// };

// $numeros = [3,4];

// sum($numeros[0],$numeros[1]);
// //otramanera
// sum(...$numeros);

//----------------------------------------------

//esto seria para parametros infinitos
// function suma_infinita(...$params){
//     $total= 0;
//     foreach($params as $v){
//         $total+=$v;
//     };

//     echo"la sumatoria es: $total \n";
// };

// suma_infinita(1,2,3,345,24,26,2,624,52,2,462,46,2346,246,3);
// echo "\n";

//----------------------------------------------

function saludos() {

    $numran = rand(1,6);
    $saludo = "";
    switch ($numran) {
        case 1:
            $saludo= "buenos dias";
            break;
            case 2:
                $saludo= "good morning";
                break;
                case 3:
                    $saludo= "bom dia";
                    break;
                    case 4:
                        $saludo= "Bonjour";
                        break;
                        case 5:
                            $saludo= "Buongiorno";
                            break;
                            default: $saludo="Guten Morgen";
    };

    return $saludo;
};

echo saludos();
echo "\n";