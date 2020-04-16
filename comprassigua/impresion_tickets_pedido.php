<?php
require('Conection/conec.php');
date_default_timezone_set("America/Chihuahua");
 $codigo=$_POST['codigo'];
 $cantidad=$_POST['cantidad'];
 $preciou=$_POST['preciou'];
 $descripcion=strtoupper($_POST['descripcion']);
  $hora= date("h:i:s");
  $fecha= date ("j/n/Y");
  $monto=$_POST['monto'];
  $total=$_POST['total'];
  $numero_factura=$_POST['numero_fact'];
  $proveedor=$_POST['proveedor'];
  $impuesto=$_POST['impuesto'];
  $descuento=$_POST['descuento'];
  $yapuso=$_POST['yapuso'];
  $nombre_p=$_POST['nombre_p'];

   if($yapuso=="0"){
  $ar=fopen("ticket.txt","w") or die("Problemas en la creacion...");
  fputs($ar,"      Empresa   "."\n");
  fputs($ar,"Siguatepeque, Comayagua   "."\n");
  fputs($ar,"Tel:1234-5678"."\n");
  // fputs($ar,"CAI:001-001-01"."\n");
  // fputs($ar,"00000001 al 001-"."\n");
  // fputs($ar,"001-01-00000250."."\n");
  fputs($ar,"Fecha: ".$fecha."\n");
  fputs($ar,"Hora: " .$hora."\n");
  fputs($ar,"Pedido: ".$numero_factura."\n");
  fputs($ar,"Proveedor: ".$nombre_p."\n");
  fputs($ar,"---------------------"."\n");
  fputs($ar,"impuesto  : ".$impuesto."\n");
  fputs($ar,"Descuento : ".$descuento."\n");
  fputs($ar,"Total     : ".$total."\n");
  fputs($ar,"     Lo atendio:    "."\n");
  fputs($ar," ".$_SESSION['nombre']."\n");
  fputs($ar,"---------------------"."\n");
  fputs($ar,"Cant. Art.  Monto"."\n");
  fputs($ar,"---------------------"."\n");
  fputs($ar,$cantidad."|".substr($descripcion,0,18)."\n");
  fputs($ar,"           ".$monto."\n");
  fclose($ar);
    }else{
  $ar=fopen("ticket.txt","a") or die("Problemas en la apertura del archivo");
  fputs($ar,$cantidad."|".substr($descripcion,0,18)."\n");
  fputs($ar,"           ".$monto."\n");
  fclose($ar);
  }
 ?>
 