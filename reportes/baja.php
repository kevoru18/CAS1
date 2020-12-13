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
$factura= $_GET['fechacompra'];
$bodega=$_GET['sucur'];
//$capitalentregado=$_GET['capitalentregado']; 
//$cambioefectivo=$_GET['cambioefectivo']; 
$pdf= new PDF();
$pdf->AddPage('PORTRAIT', 'letter'); 
$x=130;
$y=115;

//Recibo los valores POST
$pdf->Ln(3);
$pdf->SetX(90);
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Cell(60,4,utf8_decode('Reporte de Activos dados de baja'),0,1,'C');
$pdf->Ln(3);
$registros=$base->query("SELECT * FROM  activossigua WHERE estado='Inactivo' AND oficina='$bodega' AND cantidad>0 ")->fetchAll(PDO::FETCH_OBJ);
$pdf->SetY(55);
$pdf->SetFont('Courier', 'B', 14);
$pdf->Write(5,utf8_decode('En la presente se desglosa los artículos dados de baja en inventario de esta sucursal con fecha '.$factura ));
$pdf->Ln(8);
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Cell(10, 10, utf8_decode('Fecha: '.$factura), 0);
$pdf->Ln(8);
//endforeach;endforeach;
//columnas
$pdf->SetY(85);
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Cell(35, 10, utf8_decode('Código'), 0);
$pdf->Cell(60, 10, utf8_decode('Artículo'), 0);
$pdf->Cell(20, 10, 'Cantidad',0,0,'R');
$pdf->Cell(34, 10, 'Precio',0,0,'R');
$pdf->Cell(25, 10, 'Total',0,0,'R');
$pdf->Ln(8);
$pdf->Cell(180,0,'','T');
$pdf->Ln(5);

$a=50;
$b=96;
$x=115;
$y=96;
$totalentrada=0;
  $totalentradacantidad=0;
  
foreach($registros as $fechaproveedor ):
    
  $codigo_produc=$fechaproveedor->Id;  
  $costoU=$fechaproveedor->cantidad; 
  $descripcion=$fechaproveedor->descripcion;
  $valor=$fechaproveedor->valor_actual;
  $total=$valor*$costoU;

    $pdf->Ln(10);
    $pdf->SetX($a);
    $pdf->SetY($b);
 $pdf->SetFont('Helvetica', '', 14);
 $pdf->Cell(70,4,$codigo_produc."                     ".$descripcion."  ",0,'L'); 
 $pdf->Ln(4);
 
    $pdf->SetY($y);
    $pdf->SetX($x);
    $y=$y+8;
    $b=$b+8;
    $pdf->Cell(20, 5, $costoU,10,'R');
    $pdf->Cell(40, 5, $valor,10,'R');
    $pdf->Cell(20, 5, $total,10,'R');
    $totalentrada=$totalentrada+$total;
    $totalentradacantidad=$totalentradacantidad+$costoU;
endforeach;


    // SUMATORIO DE LOS PRODUCTOS Y EL IVA




$pdf->Ln(6);
$pdf->Cell(180,0,'','T');
$pdf->Ln(2);    
$pdf->Ln(3);    
$pdf->Cell(25, 10, '', 0);    
$pdf->Cell(8, 10, '', 0);



$pdf->Ln(6);
$pdf->Ln(6);
$pdf->Cell(180,0,'','T');
$pdf->Ln(2);    
$pdf->Ln(3);    
$pdf->Cell(95, 10, 'TOTAL:::::::::::::::::::::::::::::::::::::::::::::::::::::', 0);    
$pdf->Cell(15, 10, number_format(round($totalentradacantidad), 0, '.', ' '),0,0,'R');
$pdf->Cell(60, 10, '', 0);

$pdf->Cell(15, 10, number_format(round($totalentrada), 2, '.', ' ').Lps,0,0,'R');
$pdf->Ln(6);






// PIE DE PAGINA
     
    $pdf->Output('ticket.pdf','i');




?>