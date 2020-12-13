<?php
include('../Conection/conexion.php');

require("../Conection/config.php");



/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$registros=$base->query("SELECT DISTINCT num_factura FROM  orden_pedido WHERE estado='Pendiente' AND num_factura=$ide ")->fetchAll(PDO::FETCH_OBJ);
foreach($registros as $fechaproveedor ):
    $fechaproveedor1= $fechaproveedor->num_factura;
    $fechapendientes=$base->query("SELECT DISTINCT * FROM  orden_pedido WHERE estado='Pendiente' AND num_factura= $fechaproveedor1 ")->fetchAll(PDO::FETCH_OBJ);
    $fechapendientes1=$base->query("SELECT DISTINCT fecha_creacion, num_factura, proveedor FROM  orden_pedido WHERE estado='Pendiente' AND num_factura= $fechaproveedor1 ")->fetchAll(PDO::FETCH_OBJ);
    foreach($fechapendientes1 as $fechaproveedor1 ):
    $fecha= $fechaproveedor1->fecha_creacion;
    $codigo_factura=$fechaproveedor1->num_factura;
    $proveedor1=$fechaproveedor1->proveedor;
echo '
<table id="tabla_articulos1" class="table table-sm">
<thead>
<form class="form-horizontal">

<div class="form-group lable-floating">
<label for="tipo_buscar" class="control-label">Orden Pendiente #</label>
<input type="text" style="min-width: 100px;" class="form-control pull-center " id="codigo_factura" name="codigo_factura" value="'. $codigo_factura.'" disabled>
<label for="tipo_buscar" class="control-label">Fecha de la Factura:</label>
<input type="text" style="min-width: 100px;" class="form-control pull-center " id="fecha_pendiente" name="fecha_pendiente" value="'. $fecha .'" disabled>

<label for="tipo_buscar" class="control-label">Proveedor:</label>
<input type="text" style="min-width: 100px;" class="form-control pull-center " id="proveedor_pendiente" name="proveedor_pendiente" value="'.$proveedor1 .'" disabled>

</div>
</form>';
endforeach;endforeach;
echo '<tr>
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
$factura_pendiente3= $factura_pendiente2->num_factura;
$pendientes=$base->query("SELECT DISTINCT *, num_factura FROM  orden_pedido WHERE estado='Pendiente' AND num_factura= $factura_pendiente3 ")->fetchAll(PDO::FETCH_OBJ);
foreach($pendientes as $posibles):


?>
<th hidden scope="row" id="idcompra"><?php echo $posibles->id_compra?></th>
<th hidden scope="row" id="codigofac"><?php echo $posibles->num_factura?></th>
<th scope="row" id="codigo-producto"><?php echo $posibles->cod_producto?></th>
<td><?php echo $posibles->desc_producto?></td>
<td><input type="text" class='form-control pull-center' disabled style='min-width: 80px;' id='cantidad-prod1' value=<?php echo $posibles->cantidad?> ></td>
<td><?php echo $posibles->costo?></td>
<td><input type='text' style='min-width: 80px;' class='form-control pull-center subtotal2' id='monto2' name='subtotal2' value=<?php echo $posibles->sub_total?> disabled></td>
<td><a title="Eliminar" href="eliminar_articulo.php?Id=<?php echo $posibles->cod_producto?>&Cant=<?php echo $posibles->cantidad?>&comid=<?php echo $posibles->id_compra?>&Codifacact=<?php echo $posibles->num_factura?>" style="margin: 5px;" class="btn btn-secondary btn-xs"><i class="fas fa-ban"></i></a></td>


<tr>

<?php endforeach;endforeach;?>
<tr id='tr2'>
<td></td>
<td></td>
<td></td>
<td style='font-size: 15px; font-weight: bold; text-align: center;'>Total</td>
<td><input type='text' class='form-control pull-center' id='total1' disabled></td>
</tr>
</tr>
</tr>
<tr>
</tr>
</tbody>
</table>
<?php 


?>