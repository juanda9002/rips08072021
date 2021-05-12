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
       <div class="col-11 align-self-center">

        <nav class="navbar navbar-light " style="background-color: #56555B; height: 40px; padding: 5px">
  <!-- Navbar content -->
       </nav>
       <br>     
    <div> 

    
        <div>
             <h4>  <?= $titulo ?></h4>

            <?php if (isset($mensaje2)) { ?>
               
                  <div class="alert alert-danger" role="alert">
                  <?= $mensaje2 ?> 
                  </div>
              
                <?php } ?>

            <?php if (isset($mensaje4)) { ?>
               
                  <div class="alert alert-danger" role="alert">
                  <?= $mensaje4?> 
                  </div>
              
                <?php } ?>
        </div>
        
         
       
        <form id="datos" name="datos" method="post" action="<?php echo base_url(); ?>index.php/UsuarioControl/registerUsuario">  

            
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input name="cedula" type="int" class="form-control" placeholder="Digite la cedula" aria-label="Username" aria-describedby="basic-addon1">
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

            
            <div class="row">
              <div class="col-6 align-self-center">
                      
                        <div style="float:left" class="justify-content-between col-4"> 
                         <button type="submit" class="btn btn-primary form-control">Aceptar</button>
                         </div>                               
                      

                    <div style="float:right" class="justify-content-between col-4">
                      <button type="submit" class="btn btn-primary form-control"><a href="<?=base_url()?>">Volver</a></button>
                    </div>
            </div> 
            </div>           
            

        </form>

        

        <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/bootstrap.js"></script>
       

    </body>
</html>