<?php
/*
$segundos = readline("ingresar tiempo en segundos: ");


$horas = (int) ($segundos/ 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos/60);
$segundos = (int) ($segundos % 60);

echo "son $horas horas $minutos minutos $segundos segundos ";
*/
echo "\n>";


$horas = readline("horas: ");
$minutos = readline("minutos: ");
$segundos = readline("segundos: ");

$tempohoras = $horas * 3600;
$tempominutos = $minutos * 60;
$totalsegundos = $tempohoras + $tempominutos + $segundos;

echo "son un total de $totalsegundos ";

echo "\n>";