<?php
include("../Conection/conexion.php");

$Id=$_GET['Id'];
$base->query("UPDATE user SET Status='Inactivo' WHERE Id=$Id");
header("location:users.php");



?>