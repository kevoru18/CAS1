<?php


date_default_timezone_set("America/Tegucigalpa");

session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}

$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/
$factura= (isset($_POST['cod_fact'])) ? $_POST['cod_fact'] : "";
$fecha=date('Y-m-d');
$numero_factura=$base->query("SELECT * FROM orden_pedido WHERE  num_factura=$factura")->fetchAll(PDO::FETCH_OBJ);
foreach($numero_factura as $num_fact):
    $fact_pendien=$num_fact->num_factura;
    $actualizada="UPDATE orden_pedido SET  estado='Procesado', modifico=:miuser, 
    fecha_modificacion=:myfecha
    WHERE num_factura=:factura ";
   
   $actualizo=$base->prepare($actualizada);
   $actualizo->execute(array( ":factura"=>$fact_pendien, ":miuser"=>$usuario, ":myfecha"=>$fecha));
endforeach;   

   //Agregar a nueva tabla
   $busquedavalores=$base->query("SELECT * FROM orden_pedido WHERE num_factura='$factura' AND estado='Procesado'")->fetchAll(PDO::FETCH_OBJ);

   foreach ($busquedavalores as $agrego) {
       $codigotras=$agrego->cod_producto;
       $cantidadtras=$agrego->cantidad;
       $user=$agrego->nombre_usuario;
       $costotras=$agrego->costo;
       $obtenercantidad=$base->query("SELECT * FROM activossigua WHERE Id='$codigotras'")->fetchAll(PDO::FETCH_OBJ);;
       foreach($obtenercantidad as $valor ){
        $cantidadactua=$valor->cantidad;
        
        $cantidadtotal=intval($cantidadactua) + intval($cantidadtras)  ;
        
          $agregoaordenpedido="UPDATE activossigua SET 
          cantidad=:mycanti, valor_libro=:mycosto  
          WHERE Id=:mycode";
          $resultado = $base->prepare($agregoaordenpedido);
          $resultado->execute(array(":mycode"=>$codigotras, ":mycosto"=>$costotras, ":mycanti"=>$cantidadtotal));
       } 
   
   
   }
   
   

/*Falta corregir el actualizar los datos de la tabla activossigua*/
?>
