<?php

namespace controllers;

use models\AdminModel as AdminModel;

require_once ("../models/AdminModel.php");

class LoginController{
    public $nombre;
    public $clave;


    public function __construct()
    {
        $this->nombre = $_POST['nombre'];
        $this->clave = $_POST['clave'];
    }
    public function iniciarSesion(){
        session_start();
        if($this->nombre=="" || $this->clave==""){
            $_SESSION['error']="complete los datos";
            header("Location: ../index2.php");
            return;
        }
        $modelo = new AdminModel();
        $array = $modelo->buscarUsuarioLogin($this->nombre, $this->clave);
        if(count($array) ==0){
            $_SESSION['error']="nombre o clave no se encuentran";
            header("Location: ../index2.php");
            return;
        }
        $_SESSION['usuario'] = $array[0];
        header("Location: ../view/Ingreso.php");
    }
}
$obj = new LoginController();
$obj->iniciarSesion();