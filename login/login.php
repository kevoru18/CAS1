<?php
include ("../Conection/password.php");
include ("../Conection/conec.php");

    try {
        
        /* Obtener valores del input */
        
        $login=htmlentities(addslashes($_POST["user-name"]));
               
        $password=htmlentities(addslashes($_POST["User-Password"]));
        $contador=0;
        /* Definir Conexion */
        
        $base= new PDO("mysql:host=localhost; dbname=suministroscomixmul","root","");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql="SELECT * FROM user WHERE User_Name = :login AND Password= :pass AND Status= 'Activo'";
        
        $resultado= $base->prepare($sql);
        
        $resultado-> bindValue(":login",$login);
        $resultado-> bindValue(":pass",$password);
        $resultado->execute();
        $numero_registro=$resultado->rowcount();
        
        if ($numero_registro!=0){
            $sql1=mysqli_query($db,"SELECT * FROM user WHERE User_Name='$login'") or die(mysqli_error());

            if($row = mysqli_fetch_array($sql1)) { 
            session_start();
            $_SESSION["usuario"]=$_POST["user-name"];
            
            $_SESSION["nombre"]=$row["Name"];
            
            $_SESSION["permits"]=$row["Acces_permits"];
            $_SESSION["oficina"]=$row["Office"];
            header("location:../index.php");
            }

        }else{
            
            header("location:../login.html");
            
        }
        $resultado->closeCursor();

    } catch (Exception $e) {
        die ("Error:". $e->getmessage());
    }

?>
