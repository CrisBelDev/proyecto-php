
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertarUsuarios" onsubmit="return insertarUsuarioDatos()" method="post">
              <label>Cargo</label>
              <select id="id_empleados" name="id_empleado" class="form-control">
              <?php
                require_once "../../models/crud.php";
                $obj=new Crud();
                $datos=$obj->listarModelEmpleados();
                foreach($datos as $row => $item){
                  echo "<option value='".$item['id_empleado']."'>".$item['nombre']."</option>";
                }
              ?>
              </select>
              <label>Usuario</label>
              <input type="text" id="usuario" name="usuario" class="form-control form-control-sm" required="">
              <label>Contraseña</label>
              <input type="password" id="pass1" name="pass1" class="form-control form-control-sm" required="">
              <label>Rep Contraseña</label>
              <input type="password" id="pass2" name="pass2" class="form-control form-control-sm" required="">
              <label>Nivel</label>
              <select name="nivel" id="" class="form-control">
                <option value="1">Administrador</option>
                <option value="2">Otros</option>
              </select>
              <label>Estado</label>
              <select name="estado" id="" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
              </select>
              
              <br>
               <input type="submit" value="Guardar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


