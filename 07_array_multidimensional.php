<?php
$calificacicones= [
    "Ana" => [
        "Matematicas"=>3,
        "Historia"=>4,
        "Ingles"=>1
    ],

    "Miguel" => [
        "Matematicas"=>3.5,
        "Historia"=>4.5,
        "Ingles"=>2
    ],


    "Pedro" => [
        "Matematicas"=>5,
        "Historia"=>5,
        "Ingles"=>5
    ],


];

//count
echo "Total de calificaciones " .count($calificacicones). '<br>';
echo "Total de calificaciones " .count($calificacicones,COUNT_RECURSIVE). '<br>';





?>