<?php
date_default_timezone_set("America/Tegucigalpa");
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/

session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}

$fechadepre = $_POST["fechadepre"];
$email ="Activo";
$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];
$fecha=date('Y-m-d');
$querydepre=$base->query("SELECT * FROM activossigua WHERE tipo= 'Activo' AND oficina='$oficina'")->fetchAll(PDO::FETCH_OBJ);
foreach ($querydepre as $actualizatabla) {
    $facturaactua=$actualizatabla->Id;
    $querydeprevalor=$base->query("SELECT * FROM activossigua WHERE Id= '$facturaactua' AND valor_actual>valor_residual")->fetchAll(PDO::FETCH_OBJ);
    foreach ($querydeprevalor as $valor) {
        $valoractual=$valor->valor_actual;
        $depremensual=$valor->depresiacion_mensual;
        $depreacu=$valor->depresiacion_acumulada;
        $valortotalactual=intval($valoractual)-intval($depremensual);
        $depretotal=intval($depreacu)+intval($depremensual);
        $actualizada="UPDATE activossigua SET  valor_actual=:myvalor,
         depresiacion_acumulada=:mydepre, ultima_depreciacion=:mydate
                    WHERE Id=:mycode";
   
        $actualizo=$base->prepare($actualizada);
        $actualizo->execute(array(":mycode"=>$facturaactua,":myvalor"=>$valortotalactual,":mydepre"=>$depretotal,
        ":mydate"=>$fechadepre));
   

        
    
        }

   
   }
   try{

    $base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET utf8");
    $jalar=$base->query("SELECT * FROM activossigua WHERE tipo ='Activo' AND oficina='$oficina' AND ultima_depreciacion='$fechadepre' AND valor_actual>valor_residual AND familia<>'Edificios'AND familia<>'Terreno'")->fetchAll(PDO::FETCH_OBJ);
    foreach ($jalar as $valorjalar) {
        $codigojalado=$valorjalar->Id;
        $descripcionjalado=$valorjalar->descripcion;
        $valoractualjalado=$valorjalar->valor_actual;
        $depreacujalada=$valorjalar->depresiacion_acumulada;
        $depremenjalada=$valorjalar->depresiacion_mensual;
    $sql="INSERT INTO depreciacion
    (codigo_activo, descripcion, valoractual, depreciacion_acumulada, fecha, usuario, oficina,v_depre) 
    VALUES (:mycode, :mydesc, :myvalor, :mydepreacu,:mydate,
     :myuser, :myoffice, :mydepre)";
    
    $resultado = $base->prepare($sql);
    
    $resultado->execute(array(":mycode"=>$codigojalado, ":mydesc"=>$descripcionjalado,
     ":myvalor"=>$valoractualjalado,":mydepreacu"=>$depreacujalada, ":mydate"=>$fechadepre, ":myuser"=>$usuario,
      ":myoffice"=>$oficina, ":mydepre"=>$depremenjalada));
    
    
    }
    }catch(Exception $e){
    die("Error: " . $e->getMessage());
    
    }

   /*pendiente el try*/



?>