<?php
require('config/config.php');
/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";




$num_factura=(isset($_POST['num_fact'])) ? $_POST['num_fact'] : "";
$codigo=$_POST['codigo'];
$cantidad=$_POST['cantidad'];
$costou=$_POST['costou'];
$usuario=$_SESSION['usuario'];

$update=mysqli_query($db,"Update detalle_pedido set estado='no_procesado', cantidad='$cantidad', subtotal=('$cantidad'*'$costou'), fecha_modificacion=now(), hora_modificacion=now(), modifico='$usuario' where num_factura='$num_factura' and id_producto='$codigo'");
?>
