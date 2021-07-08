<section class="content">



    <form action="<?php echo base_url(); ?>index.php/UsuarioControl/updateUsuario" method="POST">

        <?php foreach ($modifica as $fila) { ?>

        
            <input class="form-control" type="hidden" name ="id" value="<?= $fila->usuId ?>" /><br>
            <label>Cedula</label>
            <input class="form-control" type="text" name="cedula" value="<?= $fila->usuCedula ?>" /><br>
            <label>Nombres</label>
            <input class="form-control" type="text" name="nombres" value="<?= $fila->usuNombres ?>" /><br>
            <label>Apellidos</label>
            <input class="form-control" type="text" name="apellidos" value="<?= $fila->usuApellidos ?>" /><br>
            <label>Telefono</label>
            <input class="form-control" type="text" name="telefono" value="<?= $fila->usuTelefono ?>" /><br>
            <label>Rol</label>
            <select class="form-control" required="" name="rol">
                                
                                <?php
                                foreach ($datosRol as $r) {
                                    echo "<option value={$r->idRol}>{$r->rolNombre}</option>";
                                }
                                ?> 
              </select>   





            <button type="submit" class="btn btn-primary form-control">Aceptar</button>

        <?php } ?>
    </form>
    <br>
    <a href="<?= base_url() ?>">Volver</a>

</section>


</div>