<?php
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/

$facturarecibida[]= (isset($_POST['descripcion_art'])) ? $_POST['descripcion_art'] : "";
$codigorecibida[]= (isset($_POST['cod'])) ? $_POST['cod'] : "";
$cantidadrecibida[]= (isset($_POST['can'])) ? $_POST['can'] : "";
$preciorecibida[]=(isset($_POST['monto'])) ? $_POST['monto'] : ""; 
for($recorre=0; $recorre<=$factura; $recorre++){
    $factura=$facturarecibida[$recorre];
    $codigo=$codigorecibida[$recorre];
    $cantidad=$cantidadrecibida[$recorre];
    $precio=$preciorecibida[$recorre];


    $actualizar="UPDATE temp SET cantidad= :mycantidad, costo_total= :mysub
    WHERE codigo_pedido=:myfactura AND codigo_producto=:mycodigo";
   
   $actualizacion=$base->prepare($actualizar);
   $actualizacion->execute(array(":mycantidad"=>$cantidad,":mysub"=>$precio, ":myfactura"=>$factura, ":mycodigo"=>$codigo));


}




?>
