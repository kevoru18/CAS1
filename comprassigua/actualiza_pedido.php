<?php
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/

$factura= (isset($_POST['cod_fact'])) ? $_POST['cod_fact'] : "";
$codigo= (isset($_POST['producto'])) ? $_POST['producto'] : "";
$cantidad= (isset($_POST['canti'])) ? $_POST['canti'] : "";
$precio=(isset($_POST['precio'])) ? $_POST['precio'] : ""; 


$actualizada="UPDATE temp SET cantidad= :cantidad, costo_total= :sub, estado='Procesado'
 WHERE codigo_pedido=:factura AND codigo_producto=:codigo";

$actualizo=$base->prepare($actualizada);
$actualizo->execute(array(":cantidad"=>$cantidad,":sub"=>$precio, ":factura"=>$factura, ":codigo"=>$codigo));
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


?>
