<?php
include('../Conection/conexion.php');

require("../Conection/config.php");
echo "Estas a punto de modificar un archivo";
/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$phone = (isset($_POST['phone'])) ? $_POST['phone'] : "";
$position = (isset($_POST['position'])) ? $_POST['position'] : "";
$office = (isset($_POST['office'])) ? $_POST['office'] : "";
$permits = (isset($_POST['permits'])) ? $_POST['permits'] : "";
$status = (isset($_POST['status'])) ? $_POST['status'] : "";
$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
echo ($ide);
$sql="UPDATE user SET Name=:myname, Phone=:myphone, Position=:myposition, Office=:myoffice, 
Acces_permits=:mypermits, Status=:mystatus, User_Name=:myuser, Password=:mypass, Email=:myemail WHERE Id=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide, ":myname"=>$nombre,":myphone"=>$phone,":myposition"=>$position,
    ":myoffice"=>$office,":mypermits"=>$permits,":mystatus"=>$status,":myuser"=>$user,
    ":mypass"=>$pass,":myemail"=>$email));
header("location:users.php");

?>