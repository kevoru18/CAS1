<?php
/*Recepción de información*/

$nombre = $_POST["nombre"];
$phone =$_POST["phone"];
$position = $_POST["position"];
$office = $_POST["office"];
$status = $_POST["status"];
$email = $_POST["email"];







try{

$base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO proveedores (rtn, nombre_p, direccion_p, telefono_p, empresa, estatus) 
VALUES (:myemail, :myname, :myposition, :myphone, :myoffice, :mystatus)";

$resultado = $base->prepare($sql);

$resultado->execute(array(":myemail"=>$email, ":myname"=>$nombre, ":myphone"=>$phone, ":myposition"=>$position,
":myoffice"=>$office, ":mystatus"=>$status));



}catch(Exception $e){
die("Error: " . $e->getMessage());

}




?>