<?php
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/

$factura= (isset($_POST['cod_fact'])) ? $_POST['cod_fact'] : "";
$codigo= (isset($_POST['producto'])) ? $_POST['producto'] : "";
$cantidad= (isset($_POST['canti'])) ? $_POST['canti'] : "";
$precio=(isset($_POST['precio'])) ? $_POST['precio'] : ""; 

echo $factura; echo $codigo ; echo $cantidad;echo $precio; 
$actualizada="UPDATE temp SET cantidad= :cantidad, costo_total= :sub, estado='Procesado'
 WHERE codigo_pedido=:factura AND codigo_producto=:codigo";

$actualizo=$base->prepare($actualizada);
$actualizo->execute(array(":cantidad"=>$cantidad,":sub"=>$precio, ":factura"=>$factura, ":codigo"=>$codigo));



?>
