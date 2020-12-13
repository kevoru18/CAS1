<?php
date_default_timezone_set("America/Tegucigalpa");
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}

/*Recepción de información*/

$codinuevafactura=$_POST["codinuevafactura"];
$estado=$_POST["estado"];
$codigoproducto =$_POST["codigoproducto"];
$descripcionactivo = $_POST["descripcionactivo"];
$nombreprov =$_POST["codiproveedor"];
$costo = $_POST["costo"];
$cantidadpro = $_POST["cantidadpro"];
$totalcosto= $costo*$cantidadpro;

$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];

$fecha=date("Y-m-d");

try{

$base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO tempsalidas(codigo_pedido, codigo_producto, descripcion_producto, costoU, cantidad,
 costo_total, estado, fecha_creacion_factura, usuario, nombre_proveedor, oficina) 
VALUES (:mycodigopedido, :mycodigoproducto, :mydescripcionactivo, :mycosto,
:mycantidadpro, :mytotalcosto, :myestado, :mydate, :myusuario, :mynombreprov, :mioficina)";

$resultado = $base->prepare($sql);

$resultado->execute(array("mycodigopedido"=>$codinuevafactura, ":mycodigoproducto"=>$codigoproducto, 
":mydescripcionactivo"=>$descripcionactivo,
 ":mycosto"=>$costo, ":mycantidadpro"=>$cantidadpro,
":mytotalcosto"=>$totalcosto, "myestado"=>$estado, "mydate"=>$fecha, ":myusuario"=> $usuario,
  ":mynombreprov"=> $nombreprov, ":mioficina"=>$oficina));

 
}catch(Exception $e){
die("Error: " . $e->getMessage());

}




?>