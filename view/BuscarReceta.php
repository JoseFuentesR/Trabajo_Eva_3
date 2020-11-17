<?php
use models\RecetaModel as RecetaModel;
require_once("../models/RecetaModel.php");
$modelo = new RecetaModel();
$receta = $modelo->MostrarRecetas();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php


session_start();
    if(isset($_SESSION['usuario'])){ ?>
            <nav>
    <div class="nav-wrapper green">
    <a href="#" class="brand-logo right">
    <i class="fab fa-earlybirds"></i>  
    Econoptica Boston</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="CrearCliente.php">
        <i class="fab fa-creative-commons-by"></i>  
        Crear Cliente</a></li>
        <li class="active"><a href="BuscarReceta.php">
        <i class="fas fa-search"></i>  
        Buscar Receta</a></li>
        <li><a href="Ingreso.php">
        <i class="fas fa-address-book"></i>  
        Ingreso</a></li>
        <li><a href="salir.php">
        <i class="fas fa-sign-out-alt"></i>  
        Salir</a></li>
      </ul>
    </div>
  </nav>
      
  <div class="container">
        <div class="row">
            <div class="col l4">
              <form action="#" method="POST">
              <div class="input-field">
                        <input type="text" placeholder="Rut Cliente" name="rut_cliente" id="fecha_cliente">
                    </div>
                    <button class="btn">Buscar</button>

              </form>
              <form action="#" method="POST">
              <div class="input-field">
                        <input type="text" placeholder="fecha de entega" name="fecha_entrega" id="fecha_entrega">
                    </div>
                    <button class="btn">Buscar</button>

              </form>
            </div>
            <div class="col l4">

            
          
            <?php

      ?>
      <table border="1">
      <tr>
        <th>Tipo lente</th>
        <th>Fecha entrega</th>
        <th>Action</th>
      </tr>
      <?php foreach($receta as $re) {?>
          <tr>
            <td><?= $re["tipo_lente"]?></td>
            <td><?= $re["fecha_entrega"]?></td>
            <td> <a href="#">Detalle</a>  <td>
          </tr>
          <?php } ?>
      </table>
            </div>
            </div>
   <?php }else{?>
        Usted no tiene permitido entrar aqui sin una autorizacion
    <?php   }?>
    <script src="https://kit.fontawesome.com/643d32c5e0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>