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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
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
        <li class="active"><a href="CrearCliente.php">
        <i class="fab fa-creative-commons-by"></i>    
        Crear Cliente</a></li>
        <li><a href="BuscarReceta.php">
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
      <div class="col l4 m4 s12">
          
     </div>
     <div class="col l4 m4 s12">
        <h3>Crear Cliente</h3>

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





        <form action="../controllers/IngresarController.php" method="POST">
        <div class="input-field">
                        <input id="rut_cliente" type="text" name="rut_cliente">
                        <label for="rut_cliente">Ingrese el Rut</label>
                    </div>
                    <div class="input-field">
                        <input id="nombre_cliente" type="text" name="nombre_cliente">
                        <label for="nombre_cliente">Ingrese el Nombre</label>
                    </div>
                    <div class="input-field">
                        <input id="direccion_cliente" type="text" name="direccion_cliente">
                        <label for="direccion_cliente">Ingrese la direccion</label>
                    </div>
                    <div class="input-field">
                        <input id="telefono_cliente" type="text" name="telefono_cliente">
                        <label for="telefono_cliente">Ingrese el telefono</label>
                    </div>
                    <div class="input-field">
                        <input id="fecha_creacion" type="date" name="fecha_creacion">
                        <label for="fecha_creacion">Ingrese la fecha actual</label>
                    </div>
                    <div class="input-field">
                        <input id="email_cliente" type="email" name="email_cliente">
                        <label for="email_cliente">Ingrese el email</label>
                    </div>
                    <button class="btn ancho-100">Crear</button>







        </form>
    
    </div>
      </div>
  </div>
     
     



   <?php }else{?>
        Usted no tiene permitido entrar aqui sin una autorizacion
    <?php   }?>

    <script src="https://kit.fontawesome.com/643d32c5e0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>