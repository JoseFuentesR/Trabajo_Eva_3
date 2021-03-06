<?php

namespace models;
require_once("Conexion.php");
class ClienteModel{

    public function Insertar($data){
        $stm = Conexion::conector()->prepare("INSERT INTO cliente VALUES(:A,:B,:C,:D,:E,:F)");
        $stm->bindParam(":A",$data['rut_cliente']);
        $stm->bindParam(":B",$data['nombre_cliente']);
        $stm->bindParam(":C",$data['direccion_cliente']);
        $stm->bindParam(":D",$data['telefono_cliente']);
        $stm->bindParam(":E",$data['fecha_creacion']);
        $stm->bindParam(":F",$data['email_cliente']);
        return $stm->execute();
    }
}