<?php


date_default_timezone_set("America/Tegucigalpa");
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}

$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];
$permiso=  $_SESSION["permits"];

include('../Conection/conexion.php');
require("../Conection/config.php");
require('../Conection/conec.php');
//Requiero la carpeta de la función
include 'plantilla.php';
define('Lps',chr(76));
//Recibo los valores POST
$factura= $_GET['refact'];
//$totalpagorecibido=$_GET['totalpago'];
//$capitalentregado=$_GET['capitalentregado']; 
//$cambioefectivo=$_GET['cambioefectivo']; 
$pdf= new PDF();
$pdf->AddPage('PORTRAIT', 'letter'); 
$x=130;
$y=115;


$registros=$base->query("SELECT DISTINCT codigo_pedido FROM  tempsalidas WHERE estado='Procesado' AND codigo_pedido=$factura ")->fetchAll(PDO::FETCH_OBJ);
foreach($registros as $fechaproveedor ):
  $totalentrada=0;
  $totalentradacantidad=0;
  
  $fechaproveedor1= $fechaproveedor->codigo_pedido;
  $fechapendientes1=$base->query("SELECT DISTINCT fecha_creacion_factura, codigo_pedido, nombre_proveedor FROM  tempsalidas WHERE estado='Procesado' AND codigo_pedido= $fechaproveedor1 ")->fetchAll(PDO::FETCH_OBJ);

foreach($fechapendientes1 as $fechaproveedor1 ):
    $fecha= $fechaproveedor1->fecha_creacion_factura;
    $codigo_factura=$fechaproveedor1->codigo_pedido;
    $proveedor1= $fechaproveedor1->nombre_proveedor;
    $pdf->SetY(55);
    
    $pdf->SetFont('Courier', 'B', 14);
    $pdf->Write(5,utf8_decode('En la presente se desglosa los artículos que estan Saliendo al inventario de esta sucursal con orden de salida No.'. $codigo_factura.'. Con fecha '.$fecha.'.'));
    $pdf->SetY(75);
    $pdf->SetFont('Helvetica', 'B', 12);
    $pdf->Cell(30, 10, utf8_decode('Orden de Salida # '.$codigo_factura), 0);
    $pdf->Ln(6);
    $pdf->SetFont('Helvetica', 'B', 12);
    $pdf->Cell(30, 10, utf8_decode('Fecha: '.$fecha), 0);
    $pdf->Ln(6);
    $pdf->SetFont('Helvetica', 'B', 12);
    $pdf->Cell(30, 10, utf8_decode('Descripción: '.$proveedor1), 0);
    $pdf->Ln(10);    
endforeach;endforeach;
//columnas
$pdf->SetY(95);
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Cell(35, 10, utf8_decode('Código'), 0);
$pdf->Cell(60, 10, utf8_decode('Artículo'), 0);
$pdf->Cell(20, 10, 'Cantidad',0,0,'R');
$pdf->Cell(34, 10, 'Precio',0,0,'R');
$pdf->Cell(25, 10, 'Total',0,0,'R');
$pdf->Ln(8);
$pdf->Cell(180,0,'','T');
$pdf->Ln(5);

foreach($registros as $factura_pendiente2 ):
  $factura_pendiente3= $factura_pendiente2->codigo_pedido;
  $pendientes=$base->query("SELECT DISTINCT * FROM  tempsalidas WHERE estado='Procesado' AND codigo_pedido= $factura_pendiente3  ")->fetchAll(PDO::FETCH_OBJ);
  foreach($pendientes as $posibles):
  $codigo_produc=$posibles->codigo_producto;
  $descripcion=$posibles->descripcion_producto;
  $cantidad=$posibles->cantidad;
  $costoU=$posibles->costoU;
  $sub=$posibles->costo_total;


 $pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(50,4,$codigo_produc."                     ".$descripcion."  ",0,'L'); 
$pdf->Ln(4);
for ($i=0; $i < 15; $i++) { 
  # code...
  
  $pdf->SetX($x);
  $pdf->SetX($y);
  $pdf->SetFont('Helvetica', '', 14);
  $pdf->Cell(3, -5,$cantidad,0,0,'R');
  
  $pdf->SetX($x);
  $pdf->SetX($y+40);
  $pdf->Cell(10, -5, number_format(round($costoU), 2, '.', ' ').Lps,0,0,'R');
  $x=$x+$i;

}

$pdf->Cell(30, -5, number_format(round($sub), 2, '.', ' ').Lps,0,0,'R');
$pdf->Ln(2);
$totalentrada=$totalentrada+$sub;
$totalentradacantidad=$totalentradacantidad+$cantidad;
endforeach;endforeach;

// SUMATORIO DE LOS PRODUCTOS Y EL IVA



$pdf->Ln(6);
$pdf->Ln(6);
$pdf->Cell(180,0,'','T');
$pdf->Ln(2);    
$pdf->Ln(3);    
$pdf->Cell(95, 10, 'TOTAL::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::', 0);    
$pdf->Cell(15, 10, number_format(round($totalentradacantidad), 0, '.', ' '),0,0,'R');
$pdf->Cell(60, 10, '', 0);

$pdf->Cell(15, 10, number_format(round($totalentrada), 2, '.', ' ').Lps,0,0,'R');
$pdf->Ln(6);





// PIE DE PAGINA

$pdf->Ln(15);
$pdf->SetX(50);
$pdf->SetFont('Courier', '', 14);
$dia=date("d",strtotime($fecha));

$mes=date("m",strtotime($fecha));
if ($mes==1) {
  # code...
  $mestexto="Enero";
}elseif ($mes==2) {
  # code...
  $mestexto="Febrero";
}elseif ($mes==3) {
  # code...
  $mestexto="Marzo";
}elseif ($mes==4) {
  # code...
  $mestexto="Abril";
}elseif ($mes==5) {
  # code...
  $mestexto="Mayo";
}elseif ($mes==6) {
  # code...
  $mestexto="Junio";
}
elseif ($mes==7) {
  # code...
  $mestexto="Julio";
}elseif ($mes==8) {
  # code...
  $mestexto="Agosto";
}elseif ($mes==9) {
  # code...
  $mestexto="Septiembre";
}
elseif ($mes==10) {
  # code...
  $mestexto="Octubre";
}
elseif ($mes==11) {
  # code...
  $mestexto="Noviembre";
}elseif ($mes==12) {
  # code...
  $mestexto="Diciembre";
}




$anio=date("Y",strtotime($fecha));
$pdf->Write(5,utf8_decode($oficina.', '.$dia.' de '.$mestexto.' del '. $anio));




$pdf->Ln(30);
$pdf->setX(25);
$pdf->Cell(50,0,'','T');

$pdf->setX(125);
$pdf->Cell(50,0,'','T');
$pdf->Ln(5);
$pdf->SetFont('Courier', '', 14);
$pdf->setX(25);
$pdf->Write(5,utf8_decode('Elaborado'));
$pdf->setX(125);
$pdf->Write(5,utf8_decode('Recibe'));
$pdf->Ln(25);
$pdf->setX(73);
$pdf->Cell(50,0,'','T');
$pdf->Ln(5);
$pdf->setX(73);
$pdf->Write(5,utf8_decode('Autorizado'));



    $pdf->Output('ticket.pdf','i');




?>