<?php
date_default_timezone_set("America/Tegucigalpa");
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/

$factura= (isset($_POST['cod_fact'])) ? $_POST['cod_fact'] : "";
$codigo= (isset($_POST['producto'])) ? $_POST['producto'] : "";
$cantidad= (isset($_POST['canti'])) ? $_POST['canti'] : "";
$precio=(isset($_POST['precio'])) ? $_POST['precio'] : ""; 
//Actualiza tabla temp
$actualizaquery=$base->query("SELECT * FROM tempsalidas WHERE codigo_pedido= $factura AND estado='Pendiente'")->fetchAll(PDO::FETCH_OBJ);
foreach ($actualizaquery as $actualizatabla) {
 $facturaactua=$actualizatabla->codigo_pedido;

$actualizada="UPDATE tempsalidas SET  estado='Procesado'
 WHERE codigo_pedido=$facturaactua";

$actualizo=$base->prepare($actualizada);
$actualizo->execute(array(":cantidad"=>$cantidad,":sub"=>$precio, ":factura"=>$factura, ":codigo"=>$codigo));

}


//Actualizar tabla  de activos
$busquedavalores=$base->query("SELECT * FROM tempsalidas WHERE codigo_pedido='$factura'")->fetchAll(PDO::FETCH_OBJ);
foreach ($busquedavalores as $agrego) {
    $factutras=$agrego->codigo_pedido;
    $codigotras=$agrego->codigo_producto;
    $desctras=$agrego->descripcion_producto;
    $costotras=$agrego->costoU;
    $cantidadtras=$agrego->cantidad;
    $totaltras=$agrego->costo_total;
    $proveedor=$agrego->codigo_proveedor;
    $user=$agrego->usuario;
    
    $obtenercantidad=$base->query("SELECT * FROM activossigua WHERE Id='$codigotras'")->fetchAll(PDO::FETCH_OBJ);;
    foreach($obtenercantidad as $valor ){
        $cantidadactua=$valor->cantidad;
        
        $cantidadtotal=intval($cantidadactua) - intval($cantidadtras)  ;
        
        $agregoaordenpedido="UPDATE activossigua SET 
        cantidad=:mycanti, valor_libro=:mycosto  
        WHERE Id=:mycode";
        $resultado = $base->prepare($agregoaordenpedido);
        $resultado->execute(array(":mycode"=>$codigotras, ":mycosto"=>$costotras, ":mycanti"=>$cantidadtotal));
    }
    
    

    
    //
        
      //  
        //


}

?>
