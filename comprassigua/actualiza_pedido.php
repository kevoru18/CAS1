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
$codigo= (isset($_POST['producto'])) ? $_POST['producto'] : "";
$cantidad= (isset($_POST['canti'])) ? $_POST['canti'] : "";
$precio=(isset($_POST['precio'])) ? $_POST['precio'] : ""; 
$fecha=date('Y-m-d');
$numero_factura=$base->query("SELECT * FROM temp WHERE estado='Pendiente' AND codigo_pedido=$factura")->fetchAll(PDO::FETCH_OBJ);
foreach($numero_factura as $num_fact):
    $fact_pendien=$num_fact->codigo_pedido;
//    $factura=$facturarecibida[$recorre];
  //  $codigo=$codigorecibida[$recorre];
   // $cantidad=$cantidadrecibida[$recorre];
    //$precio=$preciorecibida[$recorre];

    $actualizada="UPDATE temp SET  estado='Procesado', fecha_facturacion=:myfecha, user_modi=:miuser
    WHERE codigo_pedido=:factura ";
   
   $actualizo=$base->prepare($actualizada);
   $actualizo->execute(array( ":factura"=>$fact_pendien,":myfecha"=>$fecha,":miuser"=>$usuario));
endforeach;   

   //Agregar a nueva tabla
   $busquedavalores=$base->query("SELECT * FROM temp WHERE codigo_pedido='$factura' AND estado='Procesado'")->fetchAll(PDO::FETCH_OBJ);
   foreach ($busquedavalores as $agrego) {
       $factutras=$agrego->codigo_pedido;
       $codigotras=$agrego->codigo_producto;
       $desctras=$agrego->descripcion_producto;
       $costotras=$agrego->costoU;
       $cantidadtras=$agrego->cantidad;
       $totaltras=$agrego->costo_total;
       $proveedor=$agrego->nombre_proveedor;
       $user=$agrego->user_modi;
       $oficinamodi=$agrego->oficina;
       $estado="Pendiente";
     try {
           //code...
           
           $agregoaordenpedido="INSERT INTO orden_pedido(num_factura, cod_producto, cantidad, costo, desc_producto, nombre_usuario, 
               proveedor, sub_total, estado, fecha_creacion, oficina)
           VALUES(:myfactu, :mycode, :mycanti, :mycosto, :mydesc, :myuser, :myproveedor, :mysub, :myestado, :myfecha, :mioficina)";
           $resultado = $base->prepare($agregoaordenpedido);
           $resultado->execute(array(":myfactu"=>$factutras,":mycode"=>$codigotras, ":mycanti"=>$cantidadtras,
               ":mycosto"=>$costotras, ":mydesc"=>$desctras, ":myuser"=>$user, ":myproveedor"=>$proveedor, 
               ":mysub"=> $totaltras, ":myestado"=>$estado, ":myfecha"=>$fecha,":mioficina"=>$oficinamodi));
       } catch (Exception $e) {
           //throw $th;
           die("Error: " . $e->getMessage());
       }
   
   
   }
   
   

/*Falta corregir el actualizar los datos de la tabla temp*/
?>
