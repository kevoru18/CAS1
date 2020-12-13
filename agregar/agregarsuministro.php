<?php
date_default_timezone_set("America/Tegucigalpa");
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
/*Recepción de información*/

$nombre = $_POST["nombre"];
$phone =$_POST["phone"];
$position = $_POST["position"];
$email ="Suministro";
$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];


$fecha=date('Y-m-d');





try{

$base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO activossigua (descripcion, fecha_ingreso, valor_actual, ubicacion,tipo, id_user, oficina) 
VALUES (:myname, :myfecha, :myphone, :myposition,:myemail, :myuser, :myoffice)";

$resultado = $base->prepare($sql);

$resultado->execute(array(":myemail"=>$email, ":myfecha"=>$fecha, ":myname"=>$nombre,
 ":myphone"=>$phone, ":myposition"=>$position, ":myuser"=>$usuario, ":myoffice"=>$oficina));



}catch(Exception $e){
die("Error: " . $e->getMessage());

}




?>