<?php
    $nombres = ["Fabian","Juan","Ana","Bastian","Camilungus"];
    echo "<pre>";
    print_r($nombres);
    echo "</pre>";

    //agregar items
    $nombre[]= "Pedro";
    echo "<pre>";
    print_r($nombres);
    echo "</pre>";

    // Mostrar total de elementos

    echo "El numero total de nombres es: ". count($nombres). '<br>';

    //Accede por los indices

    echo $nombres[2]. '<br>';

    //Determinar ultimo del array
    
    echo end ($nombres);

    //Ordenar alfabeticamente

    sort ($nombres);
    echo "<pre>";
    print_r($nombres);
    echo "</pre>";

    //Eliminar elementos

    array_pop($nombres);
    echo "<pre>";
    print_r($nombres);
    echo "</pre>";

    //Eliminar indices

    unset($nombres[0]);
    echo "<pre>";
    print_r($nombres);
    echo "</pre>";










?>
