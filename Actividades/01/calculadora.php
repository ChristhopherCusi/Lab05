<?php
 $total_vendido = $_GET['total_vendido'];
 $cant_hijos = $_GET['cant_hijos'];
 $sueldo_basico = $_GET['sueldo_basico'];
 
$sueldo_final = 0.89 * ($sueldo_basico + 0.0075 * $total_vendido + 50 * $cant_hijos);

 echo "El sueldo final es : ".$sueldo_final;
?>