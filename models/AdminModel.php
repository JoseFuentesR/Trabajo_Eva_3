<?php

namespace models;

require_once("Conexion.php");
class AdminModel{
    public function buscarUsuarioLogin($nombre, $clave){
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE nombre=:A AND clave=:B");
        $stm->bindParam(":A", $nombre);
        $stm->bindParam(":B", md5($clave));
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

}