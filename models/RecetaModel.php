<?php

namespace models;

require_once("Conexion.php");
class RecetaModel{

    public function MostrarRecetas(){
        $stm = Conexion::conector()->prepare("SELECT * FROM receta");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function buscarRecetarut($rut_cliente){
        $stm = Conexion::conector()->prepare("SELECT * FROM receta WHERE rut_cliente=:A");
        $stm->bindParam(":A", $rut_cliente);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function buscarRecetafecha($fecha_entrega){
        $stm = Conexion::conector()->prepare("SELECT * FROM receta WHERE fecha_entrega=:A");
        $stm->bindParam(":A", $fecha_entrega);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }


}