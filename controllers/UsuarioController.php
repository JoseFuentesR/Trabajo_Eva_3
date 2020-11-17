<?php
namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");
class UsuarioController{
public  $rut;
public $nombre;

public function __construct()
{
    $this->rut = $_POST['rut'];
    $this->nombre = $_POST['nombre'];
    $this->estado = $_POST['estado'];
   
}
public function GuardarUsuario(){
    session_start();
    if($this->rut=="" || $this->nombre=="" || $this->estado==""){
        $_SESSION['error'] = "debe rellenar todos los campos";
    header("Location: ../viewdos/CrearUsuario.php");
    return;
    
    }
    $model = new UsuarioModel();
    $data = ["rut"=>$this->rut, "nombre"=>$this->nombre, "estado"=>$this->estado];
    $count = $model->InsertarUsuario($data);
    if($count == 1){
        $_SESSION['respuesta'] = "Usuario Creado con exito";
    }else{
        $_SESSION['error'] = "hubo un error en la base de datos";
    }
    header("Location: ../viewdos/CrearUsuario.php");
}

}
$obj = new UsuarioController;
$obj->GuardarUsuario();