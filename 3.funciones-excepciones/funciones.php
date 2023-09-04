<?php
//Llamadas a las funciones
holaMundo();
saludar("Juan Carlos");
//Llamando a la función sumar
$num3=sumar(10,15);
echo "Suma: $num3";
//Funciones
function holaMundo(){
    echo "Hola mundo";
    echo "<br>";
}

function saludar($nombre){
    echo "Hola, $nombre";
    echo "<br>";
}
function sumar($num1,$num2){
    $resultado=$num1+$num2;
    return $resultado;
}

?>