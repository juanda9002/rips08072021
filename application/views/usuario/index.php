<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="utf-8">
      <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/iconos/css/all.css">
    </head>

<body> 


    <div class="container">
      <div class="row">
       <div class="col-11 align-self-center">

        <nav class="navbar navbar-light " style="background-color: #56555B; height: 40px; padding: 5px">

          <a href="<?=base_url()?>">Especialidad</a>
  <!-- Navbar content -->
       </nav>
       <br>     
       <div> 
      
       <div>
            <h4>  <?= $titulo ?></h4>

          <?php if (isset($mensaje1)) { ?>
           
              <div class="alert alert-success" role="alert">
              <?= $mensaje1 ?> 
              </div>
          
            <?php } ?>

            <?php if (isset($mensaje3)) { ?>
           
               <div class="alert alert-warning" role="alert">
              <?= $mensaje3 ?> 
              </div>
          
            <?php } ?>

          <?php if (isset($mensajeUpdate)) { ?>
               
                  <div class="alert alert-success" role="alert">
                  <?= $mensajeUpdate ?> 
                  </div>
              
          <?php } ?>
     
      </div>

        <div class="row justify-content-between">
          <div class="col-4 align-self-start">            
            <div style="float: left"><a href="<?=base_url("UsuarioControl/vistaRegistrar")?>"><button type="button" class="btn btn-primary">Registrar</button></a><br></div>        
         
          </div>


        <div class="col-4">
          Buscar <input type="" name="">
        </div>
        </div>
        <br>      

        
        <table table class="table table-striped table-hover">  
           <tr>
            <th>ID</th>
            <th>CEDULA</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>ACCIONES</th>                
        </tr>        

        <?php foreach($listarDatos as $fila) { ?>

          <tr>
            <td style="width:50px"> <?php echo $fila->usuId;?> </td>
            <td style="width:50px"> <?php echo $fila->usuCedula;?> </td>
            <td style="width:50px"> <?php echo $fila->usuNombres;?> </td>
            <td style="width:50px"> <?php echo $fila->usuApellidos;?> </td>            
            <td style="width:10px">
               <a href="<?=base_url("UsuarioControl/vistaModifiUsuario/$fila->usuId")?>"><button type="button" class="btn btn-success">Editar</button> </a>   
               <a href="<?=base_url("UsuarioControl/deleteUsuario/$fila->usuId")?>"><button type="button" class="btn btn-danger">Eliminar</button></span></a>                       
           </td>
         </tr>
        <?php } ?>    

        </table> 
        </div>
        </div> 
       
    </div>
     <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/popper.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/bootstrap.js"></script>

</body>
</html>

