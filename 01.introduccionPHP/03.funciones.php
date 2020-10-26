<?php
#Funciones sin parametros
function saludo(){
    echo "hola<br>";
}
saludo();

#Funciones con parametros
function despedida($adios){

    echo $adios."<br";

}

despedida("adios");

#Funciones con retorno

function retorno($retornar){
    return $retornar;
}

echo retorno("retornar");





?>