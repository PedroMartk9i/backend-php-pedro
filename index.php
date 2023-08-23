
<?php
require_once 'Persona.php';
require_once 'Empleado.php';
echo "<h1> Programación Orientada a Objetos </h1>";
echo "<h2> Instancia de persona </h2>";

$persona = new Persona ("Ana",25,"Femenino");

echo "Nombre: " .$persona -> getNombre(). ", Edad". $persona->getEdad(). ", Genero" .$persona -> getGenero();
echo "<h2>  </h2>";
$empleado = new empleado ("Fabian",24,"Masculino","E001",500000000);
echo "Numero: ". $empleado ->getNumeroEmpleado();
echo $Empleado-> mostrarInformacion();
?>
