<?php
use models\GestionModel as GestionModel;
require_once("../models/GestionModel.php");
$modelo = new GestionModel();
$usuario = $modelo->MostrarUsuarios();
?>

<?php
ini_set('display_errors',1);
ini_set('displat_statup_errors',1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <li class=><a href="CrearCliente.php">
        <i class="fas fa-address-card"></i>  
        Gestionar Usuario</a></li>
        <li><a href="salir.php">
        <i class="fas fa-sign-out-alt"></i>  
        Salir</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
        <div class="row">
            <h3>Crear Usuario</h3>
            <br>
            <div class="col l4 m1 s30">
              <?php if(!isset($_SESSION['editar'])) {?>
            <p class="red-text">
                <?php
                     if (isset($_SESSION['error'])) {
                         echo $_SESSION['error'];
                         unset($_SESSION['error']);
                     }
                     

                ?>
                </p>
                <p class = "green-text">
                <?php
                     if (isset($_SESSION['respuesta'])) {
                         echo $_SESSION['respuesta'];
                         unset($_SESSION['respuesta']);
                     }
                     

                ?>
                </p>
                  
                <form action="../controllers/UsuarioController.php" method="POST">
                <div class="input-field">
                        <input id="rut" type="text" name="rut">
                        <label for="rut">Ingrese el rut</label>
                    </div>
                    <div class="input-field">
                        <input id="nombre" type="text" name="nombre">
                        <label for="nombre">Ingrese el nombre</label>
                    </div>
                    <select name="estado" id="estado">
                      <option value=1 >Habilitado</option>
                      <option value=0 >Bloqueado</option>
                    </select>
                    <br>
                    <button class="btn green ancho">Crear Usuario</button>

                </form>
                    <?php }else {?>
                  <!-------EDITAR TAREA----->
                <form action="../controllers/ControlEdit.php" method="POST">
                <div class="input-field">
                        <input id="rut" type="text" name="rut">
                        <label for="rut">Ingrese el rut</label>
                    </div>
                    <div class="input-field">
                        <input id="nombre" type="text" name="nombre"?>
                        <label for="nombre">Ingrese el nombre</label>
                    </div>
                    <select name="estado" id="estado">
                      <option value=1 >Habilitado</option>
                      <option value=0 >Bloqueado</option>
                    </select>
                    <br>
                    <button class="btn green accent-2 ancho">Editar Usuario</button>

                </form>
                <?php } 
                  unset ($_SESSION['editar']);
                  unset ($_SESSION['tarea']);
                ?>
            </div>
            
            <div class="col l8 m3 s24">
              <form action="../controllers/ControlUsuario.php" method="POST">
            <table border="1">

      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Action</th>
      </tr>
      <?php foreach($usuario as $usu) {?>
          <tr>
            <td><?= $usu["rut"]?></td>
            <td><?= $usu["nombre"]?></td>
            <td><?= $usu["estado"]?></td>
            <td>
              <button name="bt_editar" value="<?= $usu["rut"]?>" class="btn-floating green">
                <i class="material-icons">edit</i>
              </button>

              <button name="bt_delete" value="<?= $usu["rut"]?>" class="btn-floating red">
                <i class="material-icons">delete</i>
              </button>
            </td>
          </tr>
          <?php } ?>
      </table>
      </form>
            </div>

   <?php }else{?>
        Usted no tiene permitido entrar aqui sin una autorizacion
    <?php   }?>

    <script src="https://kit.fontawesome.com/643d32c5e0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script> document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('select');
              var instances = M.FormSelect.init(elems);
  });</script>  
    </body>
</html>