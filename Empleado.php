<?php
require_once'Persona.php';
require_once 'info.php';

class empleado extends Persona implements Info{
    private $numeroEmpleado;
    private $salario;

    public function __construct($nombre,$edad,$genero,$numeroEmpleado,$salario)
    {
        
        parent:: __construct($nombre,$edad,$genero);
        $this-> numeroEmpleado= $numeroEmpleado;
        $this->salario=$salario;
    }


    /**
     * Get the value of numeroEmpleado
     */ 
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    /**
     * Set the value of numeroEmpleado
     *
     * @return  self
     */ 
    public function setNumeroEmpleado($numeroEmpleado)
    {
        $this->numeroEmpleado = $numeroEmpleado;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function getInformacion(){
        return "Empleado: ". $this ->getNombre(). '<br>' . "Numero de empleado: " .$this-> getNumeroEmpleado();
        
    }
    
    public function mostrarInformacion(){
        echo $this -> getInformacion();
       
    }


}


?>
