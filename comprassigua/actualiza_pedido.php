<?php
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/

$facturarecibida= (isset($_POST['cod_fact'])) ? $_POST['cod_fact'] : "";
$codigorecibida[]= (isset($_POST['producto'])) ? $_POST['producto'] : "";
$cantidadrecibida[]= (isset($_POST['canti'])) ? $_POST['canti'] : "";
$preciorecibida[]=(isset($_POST['precio'])) ? $_POST['precio'] : ""; 
$numero_factura=$base->query("SELECT * FROM temp WHERE estado='Pendiente' AND codigo_pedido=$facturarecibida")->fetchAll(PDO::FETCH_OBJ);
foreach($numero_factura as $num_fact):
    $fact_pendien=$num_fact->codigo_pedido;

for($recorre=0; $recorre<=$factura; $recorre++){
    $factura=$facturarecibida[$recorre];
    $codigo=$codigorecibida[$recorre];
    $cantidad=$cantidadrecibida[$recorre];
    $precio=$preciorecibida[$recorre];

    $actualizada="UPDATE temp SET  estado='Procesado'
    WHERE codigo_pedido=:factura ";
   
   $actualizo=$base->prepare($actualizada);
   $actualizo->execute(array( ":factura"=>$factura,));
   
   
   
   /*
   //Agregar a nueva tabla
   $busquedavalores=$base->query("SELECT * FROM temp WHERE codigo_pedido='$factura'")->fetchAll(PDO::FETCH_OBJ);
   foreach ($busquedavalores as $agrego) {
       $factutras=$agrego->codigo_pedido;
       $codigotras=$agrego->codigo_producto;
       $desctras=$agrego->descripcion_producto;
       $costotras=$agrego->costoU;
       $cantidadtras=$agrego->cantidad;
       $totaltras=$agrego->costo_total;
       $proveedor=$agrego->codigo_proveedor;
       $user=$agrego->usuario;
       $estado="Pendiente";
      
       
   
       
   
     try {
           //code...
           
           $agregoaordenpedido="INSERT INTO orden_pedido(num_factura, cod_producto, cantidad, costo, desc_producto, nombre_usuario, 
               proveedor, sub_total, estado)
           VALUES(:myfactu, :mycode, :mycanti, :mycosto, :mydesc, :myuser, :myproveedor, :mysub, :myestado)";
           $resultado = $base->prepare($agregoaordenpedido);
           $resultado->execute(array(":myfactu"=>$factutras,":mycode"=>$codigotras, ":mycanti"=>$cantidadtras,
               ":mycosto"=>$costotras, ":mydesc"=>$desctras, ":myuser"=>$user, ":myproveedor"=>$proveedor, 
               ":mysub"=> $totaltras, ":myestado"=>$estado));
       } catch (Exception $e) {
           //throw $th;
           die("Error: " . $e->getMessage());
       }
   
   
   }
   
   
*/
}
endforeach;
/*Falta corregir el actualizar los datos de la tabla temp*/
?>
