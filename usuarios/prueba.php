<?php

include('../Conection/conexion.php');
        $registros=$base->query("select * from user")->fetchAll(PDO::FETCH_OBJ);
        foreach($registros as $persona):

             $ide=$persona->Id;
             $nombre=$persona->Name;
             $telefono=$persona->Phone;
             $puesto=$persona->Position;
             $oficina=$persona->Office;
             $permiso=$persona->Acces_permits;
             $estado=$persona->Status;
             $usuario=$persona->User_Name;
             $pass=$persona->Password;
             $mail=$persona->Email;
        endforeach;
            echo $nombre . "<br>". $pass;


?>
