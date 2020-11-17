<?php
namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");
class ControlEdit{
    public $rut;
    public $nombre;
    public $estado;

    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->nombre = $_POST['nombre'];
        $this->estado = $_POST['estado'];
    }
    public function editaR(){
        session_start();
        if($this->rut=="" || $this->nombre=="" || $this->estado==""){
            $_SESSION['sesion_edit']="completa todos los datos vacios";
            header("Location: ../vierdos/CrearUsuario.php");
            return;
        }
        $data = ['rut'=>$this->rut, 'nombre'=>$this->nombre, 'estado'=>$this->estado];
        $model = new UsuarioModel;

        $count = $model->EditarUsuario($this->rut,$data);
        if($count==1){
            $_SESSION['ok_edit'] = "usuario Actualizado";
        }else{
            $_SESSION['error_edit']= "Error en la base de datos";
        }
        header("Location: ../viewdos/CrearUsuario.php");
    }
}
$obj = new ControlEdit;
$obj->editaR();