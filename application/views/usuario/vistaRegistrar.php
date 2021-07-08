<section class="content">



  <form id="datos" name="datos" method="post" action="<?= base_url(); ?>UsuarioControl/registerUsuario">
  
            <input class="form-control" type="text" name="cedula" placeholder="cedula"/><br>
            <input class="form-control" type="text" name="nombres" placeholder="Nombres"/><br>
            <input class="form-control" type="text" name="apellidos" placeholder="Apellidos"/><br>
            <input class="form-control" type="text" name="telefono" placeholder="Telefono"/><br>            
            <input class="form-control" type="text" name="loggin" placeholder="Loggin"/><br>
            <input class="form-control" type="text" name="contraseña" placeholder="Contraseña"/><br>
            <select class="form-control" required="" name="rol">
                                <option value="">---Seleccione Opción---</option>
                                <?php
                                foreach ($datosRol as $r) {
                                    echo "<option value={$r->idRol}>{$r->rolNombre}</option>";
                                }
                                ?> 
              </select>   
              <br>         
            <button type="submit" class="btn btn-primary form-control">Aceptar</button> 


        <div style="float:right" class="justify-content-between col-4">
          <button type="submit" class="btn btn-primary form-control"><a href="<?= base_url() ?>">Volver</a></button>
        
      </div>
    


  </form>

  <section class="content">
    </div>