<?php
include('../Conection/conexion.php');

require("../Conection/config.php");



/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$registros=$base->query("SELECT DISTINCT codigo_pedido FROM  temp WHERE estado='Pendiente' AND codigo_pedido=$ide ")->fetchAll(PDO::FETCH_OBJ);
foreach($registros as $fechaproveedor ):
    $fechaproveedor1= $fechaproveedor->codigo_pedido;
    $fechapendientes=$base->query("SELECT DISTINCT * FROM  temp WHERE estado='Pendiente' AND codigo_pedido= $fechaproveedor1 ORDER BY $fechaproveedor1 ")->fetchAll(PDO::FETCH_OBJ);
    foreach($fechapendientes as $fechaproveedor1 ):
    $fecha= $fechaproveedor1->fecha_creacion_factura;
    $proveedor1= $fechaproveedor1->nombre_proveedor;
    
echo '
<table id="tabla_articulos" class="table table-sm">
<thead>
<form class="form-horizontal">

<div class="form-group lable-floating">
<label for="tipo_buscar" class="control-label">Fecha de la Factura:</label>
<input type="text" style="min-width: 100px;" class="form-control pull-center " id="fecha_pendiente" name="fecha_pendiente" value="'. $fecha .'" disabled>
<label for="tipo_buscar" class="control-label">Proveedor:</label>
<input type="text" style="min-width: 100px;" class="form-control pull-center " id="proveedor_pendiente" name="proveedor_pendiente" value="'.$proveedor1.'" disabled>

</div>
</form>
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


endforeach;endforeach;
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