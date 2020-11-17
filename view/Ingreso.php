<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script>
             document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

        </script>

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
        <li><a href="BuscarReceta.php">
        <i class="fas fa-search"></i>  
        Buscar Receta</a></li>
        <li class="active"><a href="Ingreso.php">
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
          <h3> Ingresar Receta</h3>
        <form action="#" method="Post">

        <p>
          <h6>Tipo de lente</h6>
    <label>
      <input class="with-gap" name="tipo_lente" type="radio" value="Cerca" checked />
      <span>Cerca</span>
    </label>
    <label>
      <input class="with-gap" name="tipo_lente" type="radio" value="Lejos" checked />
      <span>Lejos</span>
    </label>
  </p>
  <div class="input-field col s3">
    <select name="tipo_cristal" id="tipo_cristal">
      <option value="" disabled selected>Tipo de cristal</option>
      <option value="1">Monofocal</option>
      <option value="2">Bifocal</option>
      <option value="3">Multifocal</option>
    </select>
    <label>Tipo de Cristal</label>
      <br><br>
    <div class="input-field ">
    <select name="base" id="base">
      <option value="" disabled selected>Base</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Base</label>
  </div>
  <br><br>
  ___________________________________________________________________________________________________________________________________________________
      <br><br>
<div class="input-field col ">
          <input placeholder="Prisma" id="prisma" type="text" name="prisma">
          <label for="prisma">Prisma</label>
        </div>
        <br>
        <div class="input-field col ">
          <input placeholder="Distancia Pupilar" id="distancia_pupilar" type="text" name="distancia_pupilar">
          <label for="distancia_pupilar">Distancia Pupilar</label>
        </div>
        <br><br>
        <div class="input-field col ">
          <input placeholder="Observacion" id="observacion" type="text" name="observacion">
          <label for="observacion">Observacion</label>
        </div>


  </div>

  <div class="input-field col s3 ">
    <select name="material_cristal" id="material_cristal">
      <option value="" disabled selected>Material de cristal</option>
      <option value="1">Organico</option>
      <option value="2">Policarbonato</option>
      <option value="3">Mineral</option>
      <option value="4">Alto indice</option>
    </select>
    <label>Material del cristal</label>
      <br><br>
    <div class="input-field ">
    <select name="armazon" id="armazon">
      <option value="" disabled selected>Armazón</option>
      <option value="1">Intermedio</option>
      <option value="2">Gama Alta</option>
      <option value="3">Economico</option>
    </select>
    <label>Armazón</label>
  </div>
<br><br><br><br>
  <div class="input-field ">
                        <input id="fecha_entrega" type="date" name="fecha_entrega">
                        <label for="fecha_entrega">fecha de entrega</label>
                    </div>                  
  <div class="input-field ">
                        <input placeholder="Precio lente" id="valor_lente" type="text" name="valor_lente">
                        <label for="valor_lente">Valor Lente</label>
                    </div>
<br>
                    <div class="input-field ">
                        <input id="rut_medico" type="text" name="rut_medico">
                        <label for="rut_medico">Rut Medico</label>
                    </div>

                    <div class="input-field ">
                        <input id="nombre_medico" type="text" name="nombre_medico">
                        <label for="nombre_medico">Nombre Medico</label>
                    </div>

  </div>
  <div class="col s1"></div>
  <div class="col s2" >
  <div class="row">
        <div class="input-field col ">
          <input placeholder="Esfera" id="esfera_io" type="text" name="esfera_io">
          <input placeholder="cilindro" id="cilindro_io" type="text" name="cilindro_io">
          <input placeholder="eje" id="eje_io" type="text" name="eje_io">
          <label for="first_name">Ojo Izquierdo</label>
        </div>
            </div>
            <br><br><br>
            <div class="input-field ">
                        <input id="fecha_retiro" type="date" name="fecha_retiro">
                        <label for="fecha_retiro">fecha de retiro</label>
                    </div>       
  </div>
  <div class="col s2" >
  <div class="row">
        <div class="input-field col ">
          <input placeholder="Esfera" id="esfera_od" type="text" name="esfera_od">
          <input placeholder="cilindro" id="cilindro_od" type="text" name="cilindro_od">
          <input placeholder="eje" id="eje_od" type="text" name="eje_od">
          <label for="first_name">Ojo Derecho</label>
        </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <button class="btn">Crear Receta</button>      
  </div>
                  

            
        </form>
 
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