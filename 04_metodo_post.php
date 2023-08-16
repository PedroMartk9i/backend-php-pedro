<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Digite información: </h1>
    <form action="04_metodo_post.php" method="post">
        Nombre:
        <input type="text" name="nombre" id="01">
        <br><br>
        Fecha:
        <input type="date" name="fecha" id="02">
        <br><br>
        Observación:
        <input type="text" name="obs" id="">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <h2>
        información enviada es:
        <?php

        print_r( $_GET);

        ?>
    </h2>
</body>

</html>