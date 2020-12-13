<?php

session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
include('../Conection/conexion.php');

require("../Conection/config.php");
require("../Conection/conec.php");
$tamano_pagina=5;
$pagina=1;
if (isset($_GET["pagina"])) {
  

  if($_GET["pagina"]==1){
    header("Location=../usuarios/users.php");

  }else {
    $pagina=$_GET["pagina"];
  }
}else {
  $pagina=1;
}

$mysqli= new mysqli("localhost","root","","suministroscomixmul");
$empiezaen=($pagina-1)*$tamano_pagina;

$registrosactivos="SELECT * FROM user  ";
$resultado=$base->prepare($registrosactivos);
$resultado->execute(array());
$numfila=$resultado->rowCount();
$totalpagina=ceil($numfila/$tamano_pagina);




$salida="";
$registros=$base->query("SELECT * FROM user  LIMIT $empiezaen,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
if (isset($_POST['consulta'])) {
    $q=$mysqli->real_escape_string($_POST['consulta']);
    $registrosactivos="SELECT * FROM user WHERE Status='Activo' AND Name LIKE '%".$q."%' OR Position LIKE '%".$q."%' OR User_Name LIKE '%".$q."%' OR Acces_permits LIKE '%".$q."%' OR Office LIKE '%".$q."%'";
}
$resulta = $mysqli->query($registrosactivos);
if ($resulta->num_rows>0 ) {

    
    while($fila = $resulta->fetch_assoc()){
 
     $salida.=" <tr>
        <td>". $fila['Id']."</td>
        
        <td>".$fila['Name']."</td>
        <td>".$fila['Phone']."</td>
        
        
        <td>".$fila['Position']."</td>
        
        <td>". $fila['Office']."</td>
        <td>".$fila['Acces_permits']."</td>
        <td>". $fila['Status']."</td>
        <td>". $fila['User_Name']."</td>
        <td>". $fila['Password']."</td>
        <td>". $fila['Email']."</td>
        
        
        <td class='bot'><a type='button'  id='btnEditar'  title='Editar' style='margin: 5px;' class='btn btn-warning btnEditar' data-target='modalmodificar' data-toggle='modal'> <i class='fas fa-pen'></i></td>
        </tr>";
    }

}else {
    $salida.="no hay datos";
}
echo $salida;

?>
 













