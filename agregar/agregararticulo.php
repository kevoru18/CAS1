<?php
date_default_timezone_set("America/Tegucigalpa");
/*Recepción de información*/

session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
$oficea=$_POST["officea"];

if ($oficea=="1") {
  # code...
  $porcentaje=0.05;
  $familia="Equipos de computo";
}elseif ($oficea=="2") {
  # code...
  $porcentaje=0.02;
  $familia="Mobiliario y Equipo";
}elseif ($oficea=="3"){
  # code...
  $porcentaje=0.03;
  $familia="Vehiculos terrestres";
}elseif ($oficea=="4"){
  # code...
  $porcentaje=0;
  $familia="Edificios";
}else{
  # code...
  $porcentaje=0;
  $familia="Terreno";
}

$nombre = $_POST["nombre"];
$phone =$_POST["phone"];
$position = $_POST["position"];
$email ="Activo";
$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];
$vidautil=$_POST["vidautil"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$serie = $_POST["serie"];
//$porcentaje=$_POST["porcentaje"];
$fecha=date('Y-m-d');
$valorresidual=(($phone*$porcentaje));
$depreciacionmensual=((($phone-$valorresidual)/$vidautil)/12);
$diasparabaja=date('Y-m-d');
$suma=date('Y-m-d', strtotime($diasparabaja.'+'.$vidautil.'year'));
$Estado="Activo";



try{

$base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO activossigua
(descripcion, fecha_ingreso,fecha_retiro, valor_libro,
 valor_actual, depresiacion_mensual, vida_util, familia,valor_residual, 
 ubicacion, tipo, id_user, oficina, tipo_activo, marca, modelo, serie, Estado) 
VALUES (:myname, :myfecha, :myretiro, :myphone,:myphone,
:mydepre, :myvida, :myfamily, :myvalor, :myposition, :myemail, :myuser, :myoffice, :myactivo, 
:mymarca, :mymodelo, :myserie, :myestado)";

$resultado = $base->prepare($sql);

$resultado->execute(array(":myemail"=>$email, ":myfecha"=>$fecha, ":myretiro"=>$suma, ":myname"=>$nombre,
 ":myphone"=>$phone,":mydepre"=>$depreciacionmensual, ":myposition"=>$position, ":myuser"=>$usuario,
  ":myvida"=>$vidautil, ":myfamily"=>$familia,":myvalor"=>$valorresidual,
 ":myoffice"=>$oficina,":myactivo"=>$porcentaje, 
 ":mymarca"=>$marca, ":mymodelo"=>$modelo, ":myserie"=>$serie, ":myestado"=>$Estado));



}catch(Exception $e){
die("Error: " . $e->getMessage());

}




?>