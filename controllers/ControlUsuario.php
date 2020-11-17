<?php

namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");


class ControlUsuario{
    public $bt_editar;
    public $bt_delete;

    public function __construct()
    {
        $this->bt_editar = $_POST['bt_editar'];
        $this->bt_delete = $_POST['bt_delete'];
    }
    public function procesar(){
        if(isset($this->bt_editar)){
            
            session_start();
            $_SESSION['editar']='ON';
            $model = new UsuarioModel();
            $tarea = $model->BuscarUsuario($this->bt_editar);
            $_SESSION['tarea'] = $tarea[0];
            header("Location: ../viewdos/CrearUsuario.php");
        }else{
            
            $model = new UsuarioModel();
            $model->EliminarUsuario($this->bt_delete);
            header("Location: ../viewdos/CrearUsuario.php");
        }
    }
    
    } 


$obj= new ControlUsuario;
$obj->procesar();