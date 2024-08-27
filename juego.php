<?php

function clear(){
    //cono php os accedemos  acomandos del sistema en este aso de windos
    if(PHP_OS === "WINNT"){
        system("cls");
    }else {
        system("clear"); //clear sirver para linux y macOS
    }
};

//definimos las palabras del juego
$possible_words= [
    "hola",
    "adios",
    "uno",
    "dos",
    "tres",
    "todo",
];

//definimos la cantidad maximas de attemps y la definimos como constante
define("MAX_ATTEMPS",6);

echo"bienvenido \n \n";

//escogemos una palabra al azar
$chosen_word = $possible_words[rand(0,4)];

// ponemos todo en minusculas para evitar errores con strtolower
$chosen_word = strtolower($chosen_word);
//definimos ahora el lengh de la palabra escogida
$word_length = strlen($chosen_word);
$discovered_letter = str_pad("",$word_length, "_");
$attemps = 0;

do{
    echo "palabra de $word_length letras \n\n";
    echo $discovered_letter. "\n \n";

    //pedimos al usuario escriba

    $player_letter = readline("escriba una letra: ");
    $player_letter = strtolower($player_letter);

    if( str_contains($chosen_word,$player_letter)){
        //verificar o cunatas veces aparece esa letra en la palabras
        $offset = 0;
        while( 
            ($letter_position = strpos($chosen_word,$player_letter, $offset)) !== false ){
            $discovered_letter[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        };
    }else{
        clear();
        $attemps++;
        echo"letra incorrecta, te quedan ".(MAX_ATTEMPS - $attemps)." intentos";
        sleep(1);
    }
    clear();
}while($attemps<MAX_ATTEMPS && $discovered_letter != $chosen_word);

clear();

if($attemps < MAX_ATTEMPS){
    echo "win \n \n";
}else{
    echo "lose \n \n";
}

echo "la palabra es: ". $chosen_word."\n \n"; 
echo "descubriste: ". $discovered_letter."\n \n";

echo"\n";