<?php
include('../Conection/conexion.php');

require("../Conection/config.php");
echo "Estas a punto de modificar un archivo";
/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";

echo '<form id="mModificar">
<div class="modal-body">Detalle de Orden de compra.
<div class="modal-body">
<table class="table table-sm">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Descripción</th>
<th scope="col">Cantidad</th>
<th scope="col">Precio Unitario</th>
<th scope="col">Monto</th>
<th scope="col">Operación</th>
</tr>
</thead>
<tbody>
<tr>';


/*
foreach($registros as $factura_pendiente2 ):
$factura_pendiente3= $factura_pendiente2->codigo_pedido;
$pendientes=$base->query("SELECT DISTINCT * FROM  temp WHERE estado='Pendiente' AND codigo_pedido= $factura_pendiente3 ORDER BY $factura_pendiente3 ")->fetchAll(PDO::FETCH_OBJ);
foreach($pendientes as $posibles):


?>
<th scope="row"><?php echo $posibles-> codigo_pedido?></th>
<td><?php echo $posibles->descripcion_producto?></td>
<td><?php echo $posibles->cantidad?></td>
<td><?php echo $posibles->costoU?></td>
<td><?php echo $posibles->costo_total?></td>

<tr>
<?php endforeach;endforeach;?>
</tr>
</tr>
<tr>
</tr>
</tbody>
</table>
header("location:comprasigua.php");
*/
?>