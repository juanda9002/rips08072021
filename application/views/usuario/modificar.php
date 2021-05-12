<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/bootstrap/css/bootstrap.css">
    </head>
    <body>

         <div class="container">
      <div class="row">
       <div class="col-11 align-self-center">

        <nav class="navbar navbar-light " style="background-color: #56555B; height: 40px; padding: 5px">
  <!-- Navbar content -->
       </nav>
       <br>       


        <div class="row justify-content-between">
          <div class="col-4 align-self-start">
            <div style="float: left"> 
              <h4>  <?= $titulo ?></h4>
             </div>    
                      
          </div>

        <div class="col-4">
          Buscar <input type="" name="">
        </div>
        </div>
        <br>          
       

        <form action="<?php echo base_url();?>index.php/UsuarioControl/updateUsuario" method="POST">

            <?php foreach ($modifica as $fila){ ?>
            <input class="form-control" type="" name="id" value="<?=$fila->usuId?>"/><br>
            <input class="form-control" type="text"  name="cedula" value="<?=$fila->usuCedula?>"/><br>
            <input class="form-control" type="text" name="nombres" value="<?=$fila->usuNombres?>"/><br>
            <input class="form-control" type="text" name="apellidos" value="<?=$fila->usuApellidos?>"/><br>

            


            
            <button type="submit" class="btn btn-primary form-control">Aceptar</button>

            <?php } ?>
        </form>
        <br>
        <a href="<?=base_url()?>">Volver</a>

    </div>
    </div>
    </div>
    </body>
</html>
