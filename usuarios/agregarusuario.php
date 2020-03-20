<?php
include ("../Conection/password.php");

/*Recepción de información*/

    $nombre = $_POST["nombre"];
    $phone =$_POST["phone"];
    $position = $_POST["position"];
    $office = $_POST["office"];
    $permits = $_POST["permits"];
    $status = $_POST["status"];
    $user =  $_POST["user"];
    $pass =  $_POST["pass"];
    $email = $_POST["email"];
    $passcifrado = password_hash($pass, PASSWORD_DEFAULT);


 



try{

    $base= new PDO('mysql:host=localhost; dbname=suministroscomixmul', 'root', '');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET utf8");
    
    $sql="INSERT INTO user (Name, Phone, Position, Office, Acces_permits, Status, User_Name, Password, Email) 
    VALUES (:myname, :myphone, :myposition, :myoffice, :mypermits, :mystatus, :myusername, :mypass, :myemail)";
    
    $resultado = $base->prepare($sql);
    
    $resultado->execute(array(":myname"=>$nombre, ":myphone"=>$phone, ":myposition"=>$position,
    ":myoffice"=>$office, ":mypermits"=>$permits, ":mystatus"=>$status, ":myusername"=>$user, 
    ":mypass"=>$passcifrado, ":myemail"=>$email));
    
    

}catch(Exception $e){
    die("Error: " . $e->getMessage());

}




?>