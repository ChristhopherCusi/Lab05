<?php
 $cant_gaseosa = $_GET['cant_gaseosa'];
 $precio_gaseosa = $_GET['precio_gaseosa'];
 
$Nuevo_precio = $precio_gaseosa * 0.95;
$Imp_compra = $cant_gaseosa * $Nuevo_precio;
$Imp_descuento = $Imp_compra * 0.07 ;
$Imp_pagar =  $Imp_compra - $Imp_descuento;
$obsequio = 2 * ($cant_gaseosa); 

 echo "Nuevo precio : " . $Nuevo_precio . "<br>";
 echo "Improte de compra : " . $Imp_compra . "<br>";
 echo "Importe de descuento : " . $Imp_descuento . "<br>";
 echo "Importe a pagar : " . $Imp_pagar . "<br>";
 echo "Galletas : " . $obsequio;
?>