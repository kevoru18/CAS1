<?php
include('../Conection/conexion.php');

require("../Conection/config.php");



/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$registros=$base->query("SELECT DISTINCT codigo_pedido FROM  temp WHERE estado='Pendiente' AND codigo_pedido=$ide ")->fetchAll(PDO::FETCH_OBJ);

echo '
<table id="tabla_articulos" class="table table-sm">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Descripción</th>
<th scope="col">Cantidad</th>
<th scope="col">Precio Unitario</th>
<th scope="col">Monto</th>

</tr>
</thead>
<tbody>
<tr>';



foreach($registros as $factura_pendiente2 ):
$factura_pendiente3= $factura_pendiente2->codigo_pedido;
$pendientes=$base->query("SELECT DISTINCT * FROM  temp WHERE estado='Pendiente' AND codigo_pedido= $factura_pendiente3 ORDER BY $factura_pendiente3 ")->fetchAll(PDO::FETCH_OBJ);
foreach($pendientes as $posibles):


?>
<th scope="row"><?php echo $posibles->codigo_producto?></th>
<td><?php echo $posibles->descripcion_producto?></td>
<td><input type="number" class='form-control pull-center' style='min-width: 80px;' id='cantidad-prod' value=<?php echo $posibles->cantidad?> onkeyup='calcula_monto();' onclick='calcula_monto();'></td>
<td><?php echo $posibles->costoU?></td>
<td><input type='text' style='min-width: 80px;' class='form-control pull-center product-subtotal' id='monto' name='product-subtotal' value=<?php echo $posibles->costo_total?> disabled></td>


<tr>

<?php endforeach;endforeach;?>
<tr id='tr2'>
<td></td>
<td></td>
<td></td>
<td style='font-size: 15px; font-weight: bold; text-align: center;'>Total</td>
<td><input type='text' class='form-control pull-center' id='total' disabled></td>
</tr>
</tr>
</tr>
<tr>
</tr>
</tbody>
</table>
<?php 


?>