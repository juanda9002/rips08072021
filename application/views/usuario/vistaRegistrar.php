<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="utf-8">
    	<title>Registro</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/bootstrap/css/bootstrap.css">
    </head>

    <body>
    <div class="container">
      <div class="row">
       <div class="col-6 align-self-center">
        
          <h1>Registar</h1> 

       
        <form id="datos" name="datos" method="post" action="<?php echo base_url(); ?>index.php/UsuarioControl/registerUsuario">  

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input name="cedula" type="text" class="form-control" placeholder="Digite la cedula" aria-label="Username" aria-describedby="basic-addon1">
            </div> 
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input name="nombres" type="text" class="form-control" placeholder="Digite los nombres" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input name="apellidos" type="text" class="form-control" placeholder="Digite los apellidos" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input name="cedula" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input name="cedula" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>    

            


            
            <button type="submit" class="btn btn-primary form-control">Aceptar</button>

        </form>

         </div>
        </div> 
       
    </div>

        <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/bootstrap.js"></script>
       

    </body>
</html>