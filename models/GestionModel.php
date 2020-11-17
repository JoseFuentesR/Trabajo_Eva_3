<?php

namespace models;

require_once("Conexion.php");
class GestionModel{

    public function MostrarUsuarios(){
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

}