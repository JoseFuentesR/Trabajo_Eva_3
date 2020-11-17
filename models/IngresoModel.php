<?php

namespace models;
require_once("Conexion.php");
class UsuarioModel{

    public function InsertarUsuario($data){
        $stm = Conexion::conector()->prepare("INSERT INTO receta VALUES(NULL,:A,:B,:C,:D,:E)");
        $stm->bindParam(":A",$data['tipo_lente']);
        $stm->bindParam(":B",$data['esfera_io']);
        $stm->bindParam(":C",$data['esfera_od']);
        $stm->bindParam(":D",$data['cilindro_io']);
        $stm->bindParam(":E",$data['cilindro_od']);
        $stm->bindParam(":F",$data['eje_io']);
        $stm->bindParam(":G",$data['eje_io']);
        $stm->bindParam(":H",$data['prisma']);
        $stm->bindParam(":I",$data['base']);
        $stm->bindParam(":J",$data['amazon']);
        $stm->bindParam(":K",$data['material_cristal']);
        $stm->bindParam(":L",$data['tipo_cristal']);
        $stm->bindParam(":M",$data['distancia_pupilar']);
        $stm->bindParam(":N",$data['valor_lente']);
        $stm->bindParam(":O",$data['fecha_entrega']);
        $stm->bindParam(":P",$data['fecha_retiro']);
        $stm->bindParam(":Q",$data['observacion']);
        $stm->bindParam(":R",$data['rut_medico']);
        $stm->bindParam(":S",$data['nombre_medico']);
        return $stm->execute();
    }
}