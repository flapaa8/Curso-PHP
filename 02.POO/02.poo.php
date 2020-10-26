<?php

class Automovil{

    public $marca;
    public $modelo;

    public function mostrar (){

        echo "<p> Hola Soy un $this->marca, modelo $this->modelo</p>";

    }

}

$a = new Automovil();
$a-> marca = "Toyota";
$a-> modelo = "Corolla";
$a->mostrar();

$b =  new Automovil();
$b-> marca = "Hyundai";
$b-> modelo = "Accent Vision";
$b->mostrar();

$c =  new Automovil();
$c-> marca = "Mazda";
$c-> modelo = "2";
$c->mostrar();



?>