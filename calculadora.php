<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Super Calculadora PHP </h1>
    <form action="calculadora.php" method="post">
    <input type="number" name="Primernumero" id="01" placeholder="Ingrese el numero" required>

    <select name="Operadores" id="02">

        <option value="sumar">Suma</option>
        <option value="restar">Resta</option>
        <option value="dividir">División</option>
        <option value="multiplicar">Multiplicación</option>
        
    </select>
    <input type="number" name="Segundonumero" id="03" placeholder="Ingrese el numero" required>
    <input type="submit" name="Calcular" value="Calcular">
    </form>

    <?php
        if (isset($_POST['Calcular'])) {
            $primernumero= $_POST ['Primernumero'];
            $segundonumero= $_POST ['Segundonumero'];
            $operador=$_POST ['Operadores'];
            $resultado= '';

            switch ($operador) {
                case 'sumar':
                $resultado= $primernumero + $segundonumero;
                break;

                case 'restar':
                    $resultado=$primernumero-$segundonumero;
                    break;
                
                case 'dividir':
                    if ($segundonumero !=0) {
                        $resultado= $primernumero/$segundonumero;

                    } else {
                        $resultado= '¡ES IMPOSIBLE DIVIDIR POR 0!';
                    }
                    break;
                case 'multiplicar':
                    $resultado=$primernumero * $segundonumero;
                    break;

            }
            echo "El resultado es " , $resultado;

        }
    ?>
</body>
</html>