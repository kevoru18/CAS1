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
$pdf->Ln(4);
$pdf->AddPage('PORTRAIT', 'letter'); 
$pdf->SetX(90);
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Cell(60,4,utf8_decode('Reporte de compra '),0,1,'C');
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(10, 10, utf8_decode('Fecha: '.$factura), 0);

$pdf->Ln(5);
$pdf->Cell(10, 10, utf8_decode('Compras de la sucursal '.$bodega), 0);
$pdf->Ln(8);
$registros=$base->query("SELECT * FROM  temp WHERE  fecha_creacion_factura='$factura' AND oficina='$bodega' ")->fetchAll(PDO::FETCH_OBJ);

//endforeach;endforeach;
//columnas
//$pdf->SetY(65);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(35, 10, utf8_decode('Código'), 0);
$pdf->Cell(60, 10, utf8_decode('Artículo'), 0);

$pdf->Cell(20, 10, 'Costo',0,0,'R');
$pdf->Cell(34, 10, 'Cantidad',0,0,'R');
$pdf->Cell(20, 10, 'Total',0,0,'R');
$pdf->Ln(8);
$pdf->Cell(180,0,'','T');
$pdf->Ln(5);
$totalcosto=0;
$totalvalor=0;
$totalvalortotal=0;
foreach($registros as $fechaproveedor ):
  $fechaproveedor1= $fechaproveedor->codigo_producto;
  $codigo_produc=$fechaproveedor->codigo_producto;  
  $descripcion=$fechaproveedor->descripcion_producto;
  $costoU=$fechaproveedor->costoU;
  $sub=$fechaproveedor->cantidad;
  $costototal=$fechaproveedor->costo_total;
  $totalcosto=$totalcosto + $costoU;
  $totalvalor=$totalvalor+$sub;
  $totalvalortotal=$totalvalortotal+$costototal;
  /*foreach($registros as $factura_pendiente2 ):
  $factura_pendiente3= $factura_pendiente2->codigo_pedido;
  $pendientes=$base->query("SELECT DISTINCT * FROM  tempventas WHERE estado='Procesado' AND codigo_pedido= $factura_pendiente3  ")->fetchAll(PDO::FETCH_OBJ);
  foreach($pendientes as $posibles):
  
  
  $cantidad=$posibles->cantidad;


*/
$pdf->setX(20);
 $pdf->SetFont('Helvetica', '', 14);
$pdf->MultiCell(40,4,$codigo_produc,0,'L'); 
$pdf->Cell(75, -5,$descripcion,0,0,'R');

$pdf->Cell(45, -5, number_format(round($costoU), 2, '.', ' ').Lps,0,0,'R');
$pdf->Cell(20, -5, number_format(round($sub), 0, '.', ' '),0,0,'R');
$pdf->Cell(40, -5, number_format(round($costototal), 2, '.', ' ').Lps,0,0,'R');
$pdf->Ln(2);
/*$pdf->Cell(3, -5,$cantidad,0,0,'R');endforeach;*/endforeach;

// SUMATORIO DE LOS PRODUCTOS Y EL IVA




$pdf->Ln(6);
$pdf->Cell(180,0,'','T');
$pdf->Ln(2);    
$pdf->Ln(3);    
$pdf->Cell(25, 10, 'TOTAL', 0);    
$pdf->Cell(88, 10, '', 0);
$pdf->Cell(8, 10, number_format(round($totalcosto), 2, '.', ' ').Lps,0,0,'R');


$pdf->Cell(22, 10, number_format(round($totalvalor), 0, '.', ' '),0,0,'R');
$pdf->Cell(32, 10, number_format(round($totalvalortotal), 0, '.', ' ').Lps,0,0,'R');
/* 

$pdf->Ln(2);    
$pdf->Ln(3);    
$pdf->Cell(25, 10, 'Su Cambio:', 0);    
$pdf->Cell(20, 10, '', 0);
$pdf->Cell(15, 10, number_format(round($cambioefectivo), 2, '.', ' ').Lps,0,0,'R');
 */



// PIE DE PAGINA
     
    $pdf->Output('ticket.pdf','i');




?>