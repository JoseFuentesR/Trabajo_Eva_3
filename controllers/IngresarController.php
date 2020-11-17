<?php

namespace controllers;
require_once("../models/ClienteModel.php");
use models\ClienteModel as ClienteModel;

class IngresarController{
    public $rut_cliente;
    public $nombre_cliente;
    public $direccion_cliente;
    public $telefono_cliente;
    public $fecha_creacion;
    public $email_cliente;

    public function __construct()
    {
        $this->rut_cliente = $_POST['rut_cliente'];
        $this->nombre_cliente = $_POST['nombre_cliente'];
        $this->direccion_cliente = $_POST['direccion_cliente'];
        $this->telefono_cliente = $_POST['telefono_cliente'];
        $this->fecha_creacion = $_POST['fecha_creacion'];
        $this->email_cliente = $_POST['email_cliente'];
    }
    public function GuardarCliente(){
        session_start();
        if($this->rut_cliente=="" || $this->nombre_cliente=="" || $this->direccion_cliente=="" || $this->telefono_cliente=="" || $this->fecha_creacion=="" || $this->email_cliente==""){
            $_SESSION['error'] = "debe rellenar todos los campos";
            header("Location: ../view/CrearCliente.php");
            return;
        }
        $model = new ClienteModel();
        $data = ["rut_cliente"=>$this->rut_cliente, "nombre_cliente"=>$this->nombre_cliente, "direccion_cliente"=>$this->direccion_cliente, "telefono_cliente"=>$this->telefono_cliente, "fecha_creacion"=>$this->fecha_creacion, "email_cliente"=>$this->email_cliente];
        $count =  $model->Insertar($data);
        if($count == 1){
            $_SESSION['respuesta'] = "Cliente Ingresado Con Exito";
        }else{
            $_SESSION['error'] = "hubo un error en la base de datos";

        }
        header("Location: ../view/CrearCliente.php");
    }
}
$obj = new IngresarController();
$obj->GuardarCliente();
