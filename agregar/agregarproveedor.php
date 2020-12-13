<?php
date_default_timezone_set("America/Tegucigalpa");
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
$usuario=$_SESSION["usuario"];
$oficina=$_SESSION["oficina"];


/*Recepción de información*/

$nombre = $_POST["nombre"];//nombre
$phone =$_POST["phone"];//telefono
$position = $_POST["position"];//direccion
$email =$_POST["emaila"];//rtn
$officea =$_POST["officea"];//empresa
$statusa =$_POST["statusa"];//estado

$fecha=date('Y-m-d');






try{

    $base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET utf8");
    
    $sql="INSERT INTO  proveedores (rtn, nombre_p, direccion_p, telefono_p, empresa, estatus, 
    id_usuario, fecha_creacion, oficina) 
    VALUES (:myemail, :myname, :myposition, :myphone, :myoffice, :mystatus,:userid, :mydate, :mioficina)";
    
    $resultado = $base->prepare($sql);
    
    $resultado->execute(array(":myemail"=>$email,  ":myname"=>$nombre, ":myposition"=>$position, 
    ":myphone"=>$phone, ":myoffice"=>$officea, ":mystatus"=>$statusa,":userid"=>$usuario,
    ":mydate"=>$fecha,":mioficina"=>$oficina ));
    
    
    
    }catch(Exception $e){
    die("Error: " . $e->getMessage());
    
}
    
    
    
    
?>

