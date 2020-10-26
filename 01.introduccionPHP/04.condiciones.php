<?php

#condiciones
$a = 5;
$b = 10;

if($a > $b){

echo "a es mayor que b";

}

else if($a == $b){

    echo "a es igual que b";

}

else{
    echo "a es menor que b";
}
echo "<br><br>";
#Switches

$dia = "sabado";
switch($dia){
    case 'sabado':
        echo "voy a estudiar PHP";
    break;
    case 'viernes':
        echo "voy a salir";
    break;
    case 'domingo':
        echo "voy a dormir";
    break;
    default: echo "voy a el instituto";
}
echo "<br><br>";
#ciclos
$n = 1;
while($n < 5){
    $n++;
echo $n;
}
echo "<br><br>";

#Ciclo do-while

$p = 1;
do{
    echo $p;
    $p++;



}
while($p <= 5);
echo "<br><br>";
#Ciclo for

for($i = 0; $i <= 5; $i++){
    echo $i;
}

?>