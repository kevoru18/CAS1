<?php
/*Recepción de información*/

$codinuevafactura=$_POST["codinuevafactura"];
$estado=$_POST["estado"];
$codigoproducto =$_POST["codigoproducto"];
$descripcionactivo = $_POST["descripcionactivo"];
$codiproveedor =$_POST["codiproveedor"];
$nombreprov = $_POST["nombreprov"];
$costo = $_POST["costo"];
$cantidadpro = $_POST["cantidadpro"];
$totalcosto= $costo*$cantidadpro;
$usuario=  "Kevin";






try{

$base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO temp(codigo_pedido, codigo_producto, descripcion_producto, costoU, cantidad,
 costo_total, estado, usuario, codigo_proveedor, nombre_proveedor) 
VALUES (:mycodigopedido, :mycodigoproducto, :mydescripcionactivo, :mycosto,
:mycantidadpro, :mytotalcosto, :myestado, :myusuario, :mycodiproveedor, :mynombreprov)";

$resultado = $base->prepare($sql);

$resultado->execute(array("mycodigopedido"=>$codinuevafactura, ":mycodigoproducto"=>$codigoproducto, 
":mydescripcionactivo"=>$descripcionactivo,
 ":mycosto"=>$costo, ":mycantidadpro"=>$cantidadpro,
":mytotalcosto"=>$totalcosto, "myestado"=>$estado, ":myusuario"=> $usuario,
 ":mycodiproveedor"=>$codiproveedor, ":mynombreprov"=> $nombreprov));



}catch(Exception $e){
die("Error: " . $e->getMessage());

}




?>