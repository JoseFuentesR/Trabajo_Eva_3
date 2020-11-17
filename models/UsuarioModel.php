<?php

namespace models;
require_once("Conexion.php");
class UsuarioModel{

    public function InsertarUsuario($data){
        $stm = Conexion::conector()->prepare("INSERT INTO usuario VALUES(:A,:B,NULL,NULL,:C)");
        $stm->bindParam(":A",$data['rut']);
        $stm->bindParam(":B",$data['nombre']);
        $stm->bindParam(":C",$data['estado']);
        return $stm->execute();
    }


    public function EliminarUsuario($rut)
    {
        $stm = Conexion::conector()->prepare("DELETE FROM usuario WHERE rut=:A");
        $stm->bindParam(":A",$rut);
        return $stm->execute();
    }
    public function EditarUsuario($rut ,$data){
        $stm = Conexion::conector()->prepare("UPDATE usuario SET rut=:A, nombre=:B, estado=:C,WHERE rut=:A");
        $stm->bindParam(":A",$data['rut']);
        $stm->bindParam(":B",$nombre);
        $stm->bindParam(":C",$estado);
        return $stm->execute();
    }
    public function BuscarUsuario($rut){
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE rut=:A");
        $stm->bindParam(":A",$rut);
        return $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}
