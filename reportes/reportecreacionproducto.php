<?php

include('../Conection/conexion.php');
require("../Conection/config.php");
require('../Conection/conec.php');
//Requiero la carpeta de la función
include 'plantilla.php';
define('Lps',chr(76));
//Recibo los valores POST
$factura= $_GET['fechacreacion'];
$pdf= new PDF('P','mm', array(80,250));
$pdf->AddPage(); 
$pdf->Cell(60,4,utf8_decode('Reporte de creación de artículos'),0,1,'C');
$pdf->SetFont('Helvetica', 'B', 7);

$pdf->Cell(10, 10, utf8_decode('Fecha: '.$factura), 0);
$pdf->Ln(8);
$registros=$base->query("SELECT * FROM  activossigua WHERE  fecha_ingreso='$factura' ")->fetchAll(PDO::FETCH_OBJ);

//endforeach;endforeach;
//columnas
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Cell(10, 10, utf8_decode('Código'), 0);
$pdf->Cell(18, 10, utf8_decode('Artículo'), 0);
$pdf->Cell(5, 10, '',0,0,'R');
$pdf->Cell(10, 10, 'Costo',0,0,'R');
$pdf->Cell(15, 10, 'Precio',0,0,'R');
$pdf->Ln(8);
$pdf->Cell(60,0,'','T');
$pdf->Ln(0);
$totalcosto=0;
$totalvalor=0;

foreach($registros as $fechaproveedor ):
  $fechaproveedor1= $fechaproveedor->codigo;
  $codigo_produc=$fechaproveedor->codigo;  
  $descripcion=$fechaproveedor->descripcion;
  $costoU=$fechaproveedor->costo;
  $sub=$fechaproveedor->valor;
  $totalcosto=$totalcosto + $costoU;
  $totalvalor=$totalvalor+$sub;
  /*foreach($registros as $factura_pendiente2 ):
  $factura_pendiente3= $factura_pendiente2->codigo_pedido;
  $pendientes=$base->query("SELECT DISTINCT * FROM  tempventas WHERE estado='Procesado' AND codigo_pedido= $factura_pendiente3  ")->fetchAll(PDO::FETCH_OBJ);
  foreach($pendientes as $posibles):
  
  
  $cantidad=$posibles->cantidad;


*/
 $pdf->SetFont('Helvetica', '', 7);
$pdf->MultiCell(10,4,$codigo_produc,0,'L'); 
$pdf->Cell(30, -5,$descripcion,0,0,'R');

$pdf->Cell(15, -5, number_format(round($costoU), 2, '.', ' ').Lps,0,0,'R');
$pdf->Cell(15, -5, number_format(round($sub), 2, '.', ' ').Lps,0,0,'R');
$pdf->Ln(2);
/*$pdf->Cell(3, -5,$cantidad,0,0,'R');endforeach;*/endforeach;

// SUMATORIO DE LOS PRODUCTOS Y EL IVA




$pdf->Ln(6);
$pdf->Cell(60,0,'','T');
$pdf->Ln(2);    
$pdf->Ln(3);    
$pdf->Cell(25, 10, 'TOTAL', 0);    
$pdf->Cell(8, 10, '', 0);
$pdf->Cell(15, 10, number_format(round($totalcosto), 2, '.', ' ').Lps,0,0,'R');


$pdf->Cell(15, 10, number_format(round($totalvalor), 2, '.', ' ').Lps,0,0,'R');
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