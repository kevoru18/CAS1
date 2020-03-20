
//creacion de botones para subir foto.


<style>
                 div#foto
                 {
               text-align:center;
               position:relative;
               margin:20px 0px 0px 0px;
               padding:0px;
               width:100%;
               color:white;
               background-image: linear-gradient(180deg, #729d3b 50%, #4f6e2b 100%);
               -webkit-border-radius:5px;
               -webkit-box-shadow:0px 3px 0px #4f6e2b;
                 }
               
               
               
               input#imagea
               {
                  position: absolute;
                  top: 0px;
                  left:0px;
                  right:0px;
                  bottom:0px;
                  width:90%;
                  height:10%;
               
                  opacity: 0;
                }
                </style><form action="image.php" method="POST" enctype="multipart/form-data">
                       <div id="foto">
                         <label >Imagen</label><input type="file" name="imagen" class="btn-success form-control input-sm" id="imagea" size="20">
                        </div>
                        <input type="submit" value="Subir Imagen" class="btn btn-warning btnEditar" style="margin:10px;">
                        </form>
                           </td>







<?php
//Recibido de imagenes.
$ide = (isset($_POST['$id']));
$imagen= $_FILES['imagen']['name'];
$imagentipo=$_FILES['imagen']['type'];
$imagentamaño=$_FILES['imagen']['size'];

if($imagentamaño<=100000){ 

    if($imagentipo=="image/jpeg" ||$imagentipo=="image/jpg" ||$imagentipo=="image/png" ||$imagentipo=="image/gif"){
        
//Ruta de la carpeta destino
$destino=$_SERVER['DOCUMENT_ROOT'].'/CASCOMIXMUL/img/';
//Movemos la imagen a la carpeta destino
move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$imagen);




header("location:users.php");

}else{
   
}
}

include('../Conection/conexion.php');

require("../Conection/config.php");
$sql=$base->query("UPDATE user SET img'$imagen' WHERE Id=$ide")->fetchAll(PDO::FETCH_OBJ);






?>