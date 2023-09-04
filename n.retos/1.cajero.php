<?php
/*
Vamos a crear una clase en PHP que tenga 3 funciones:

Función depositar: esta función permitirá aumentar el saldo.
Función retirar: esta función permitirá debitar el saldo.
Función mostrarSaldo: esta función mostrará el saldo actual.
Probar las funciones.
*/
$saldo=1000;
$saldo=depositar(300);
$saldo=retirar(100);
$saldo=depositar(120);
mostrarSaldo();//1320

function depositar($monto){
    global $saldo;
    $saldoActual=$saldo+$monto;
    return $saldoActual;
}
function retirar($monto){
    global $saldo;
    if ($monto<=$saldo){
        $saldoActual=$saldo-$monto;
    }else{
        $saldoActual=$saldo;
    }    
    return $saldoActual;
}
function mostrarSaldo(){
    global $saldo;
    echo "Saldo: $saldo";
}
?>