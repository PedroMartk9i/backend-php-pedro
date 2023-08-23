<?php
/*$edades = [
    'Ana'=>10,
    'Juan'=> 32,
    'Maria'=>25,
    'Carlos'=> 30,
    'Luis'=>22,

];*/

$edades = array (
    'Ana'=>10,
    'Juan'=> 32,
    'Maria'=>25,
    'Carlos'=> 30,
    'Luis'=>22,
    
);
echo "<pre>";
print_r($edades);
echo "</pre>";


    //Agregar items
    $edades ["Laura"]= 23;
    echo "<pre>";
    print_r($edades);
    echo "</pre>";

    //count
    echo "Cantidad de elementos: ".count ($edades), '<br>' ;

    //end
    echo "El ultimo elemento es ". end ($edades),'<br>';

    //arraypop
    array_pop($edades);
    echo "<pre>";
    print_r($edades);
    echo "</pre>";

    //eliminar un elemento
    unset($edades['Ana']);
    echo "<pre>";
    print_r($edades);
    echo "</pre>";
    





?>