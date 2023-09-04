<?php
    $numero1=20;    
    try {
        $numero3=$numero1+"f";
        echo $numero3;
    } catch (\Throwable $th) {
        echo "Error controlado";
    }
?>