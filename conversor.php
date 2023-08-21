<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SUPER CONVERSOR DE DIVISAS MUNDIAAAAAAAAL</h1>
    <form action="conversor.php" method="post">

    
    <label for="DivisaOrigen">Divisa a cambiar</label>
    <select name="Divisainicial" id="01">
        <option value="DolarEstadoUnidense"> Dolar USA</option>
        <option value="Euro">Euro</option>
        <option value="RupiaIndia">Rupia India</option>
    </select>

    <input type="number" name="inicial" id="02" placeholder="Ingresa una cantidad">

    <label for="inicial">Cantidad</label>
    
    <label for="DivisaFinal">Divisa final </label>
    <select name="Divisafinal" id="03">
        <option value="DolarEstadoUnidense"> Dolar USA</option>
        <option value="Euro">Euro</option>
        <option value="RupiaIndia">Rupia India</option>

    </select>

    <input type="submit" name="convertir" value="convertir">

    <?php

        if(isset($_POST ['convertir'])) {
            
            $divisainicial=$_POST ['Divisainicial'];
            $divisafinal=$_POST ['Divisafinal'];
            $inicial= $_POST ['inicial'];
            $euro=1.18;
            $conversion= '';

            
            /*Se intento realizar con estructuras If y Switch pero resulta mas practico usar Arrays multidimensionales 
            que pueden contener distintos arrays a la vez y facilitar la conversión
            */
            $tasas = [
                'DolarEstadoUnidense' => ['DolarEstadoUnidense' => 1, 'Euro' => 0.85, 'RupiaIndia' =>74.72],
                'Euro' => ['DolarEstadoUnidense' => 1.18, 'Euro' => 1, 'RupiaIndia' =>87.44],
                'RupiaIndia'=>  ['DolarEstadoUnidense' => 0.014, 'Euro' => 0.011, 'RupiaIndia' =>1]

            ];

            //Aqui valoramos si al momento de seleccionar las divisas estas son iguales y mandamos un mensaje de atencion

            if ($divisainicial != $divisafinal){
                $conversion= $inicial*$tasas[$divisainicial][$divisafinal];
                echo 'El resultado es ', $conversion, ' ' , $divisafinal,'s';

            }   else {
                echo'No podemos convertir 2 divisas iguales!';
            }
        }
    ?>
    </form>
</body>
</html>