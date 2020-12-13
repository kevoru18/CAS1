<?php

include('../Conection/conexion.php');
require("../Conection/config.php");
require('../Conection/conec.php');
//Requiero la carpeta de la función
include 'plantilla.php';
define('Lps',chr(76));
//Recibo los valores POST
$factura= $_GET['fechacompra'];

$pdf= new PDF('P','mm', array(80,250));
$pdf->AddPage(); 
$pdf->Cell(60,4,utf8_decode('Reporte de Facturación diaria'),0,1,'C');
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Cell(10, 10, utf8_decode('Fecha: '.$factura), 0);
$pdf->Ln(8);
/**SELECT DISTINC numero de factura y solo la sumatoria de lo vendido */
$registros=$base->query("SELECT DISTINCT codigo_pedido FROM  tempventas WHERE  fecha_creacion_factura='$factura' ")->fetchAll(PDO::FETCH_OBJ);


//endforeach;endforeach;
//columnas
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Cell(10, 10, utf8_decode('No. Fáctura'), 0);
$pdf->Cell(18, 10, utf8_decode(''), 0);

$pdf->Cell(10, 10, '',0,0,'R');
$pdf->Cell(15, 10, '',0,0,'R');
$pdf->Cell(8, 10, 'Total',0,0,'R');
$pdf->Ln(8);
$pdf->Cell(60,0,'','T');
$pdf->Ln(0);
$totalcosto=0;
$totalvalor=0;
$totalvalortotal=0;
$total=0;
foreach($registros as $fechaproveedor ):
  $fechaproveedor1= $fechaproveedor->codigo_pedido;


  $codigo_produc=$fechaproveedor->codigo_pedido;  
  /*$descripcion=$fechaproveedor->descripcion_producto;
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
 $pdf->SetFont('Helvetica', '', 7);
$pdf->MultiCell(25,4,$codigo_produc,0,'L'); 
$resto=$base->query("SELECT * FROM  tempventas WHERE  codigo_pedido='$codigo_produc' AND fecha_creacion_factura='$factura' ")->fetchAll(PDO::FETCH_OBJ);
$sumtotal=0;

foreach($resto as $restoregistros ):
  $costototal=$restoregistros->costo_total;
  $sumtotal=$sumtotal+$costototal;
  

/*$pdf->Cell(3, -5,$cantidad,0,0,'R');*/endforeach;
$pdf->Cell(30, -5,"",0,0,'R');

$pdf->Cell(5, -5,"",0,0,'R');
$pdf->Cell(5, -5,"",0,0,'R');

$pdf->Cell(15, -5, number_format(round($sumtotal), 2, '.', ' ').Lps,0,0,'R');
$total=$total+$sumtotal;
$pdf->Ln(2);endforeach;


// SUMATORIO DE LOS PRODUCTOS Y EL IVA




$pdf->Ln(6);
$pdf->Cell(60,0,'','T');
$pdf->Ln(2);    
$pdf->Ln(3);    
$pdf->Cell(25, 10, 'TOTAL', 0);    
$pdf->Cell(8, 10, '', 0);
$pdf->Cell(23, 10, number_format(round($total), 2, '.', ' ').Lps,0,0,'R');

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