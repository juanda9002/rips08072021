<!-- Main content -->
<section class="content">

  <div style="float: left"><a href="<?= base_url("UsuarioControl/vistaRegistrar") ?>"><button type="button" class="btn btn-primary">Registrar</button></a><br></div>

  <div class="col-4">
    Buscar <input type="" name="">
  </div>

  <br>

  <table table class="table table-striped table-hover">
    <tr>      
      <th>CEDULA</th>
      <th>NOMBRES</th>
      <th>APELLIDOS</th>
      <th>TELEFONO</th>
      <th>LOGGIN</th>
      <th>ROL</th>
      <th>ACCIONES</th>
    </tr>

    <?php foreach ($listarDatos as $fila) { ?>

      <tr>   
        <!-- <td style="width:50px"> <//?php echo $fila->usuId; ?> </td> -->    
        <td style="width:50px"> <?php echo $fila->usuCedula; ?> </td>
        <td style="width:50px"> <?php echo $fila->usuNombres; ?> </td>
        <td style="width:50px"> <?php echo $fila->usuApellidos; ?> </td>
        <td style="width:50px"> <?php echo $fila->usuTelefono; ?> </td>
        <td style="width:50px"> <?php echo $fila->usuLoggin; ?> </td>
        <td style="width:50px"> <?php echo $fila->rolNombre; ?> </td>
        <td style="width:10px">
          <a href="<?= base_url("UsuarioControl/vistaModifiUsuario/$fila->usuId") ?>"><button type="button" class="btn btn-success">Editar</button> </a>
          <a href="<?= base_url("UsuarioControl/deleteUsuario/$fila->usuId") ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></span></a>
        </td>
      </tr>
    <?php } ?>

  </table>
  </div>
  </div>

  </div>
  <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/public/bootstrap/js/bootstrap.js"></script>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->