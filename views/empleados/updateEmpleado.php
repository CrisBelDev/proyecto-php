<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertarEmpleadou" onsubmit="return actualizarEmpleado()" method="post">
              <input type="text" id="id_empleadou" name="id_empleadou" hidden="">
              <label>Cargo</label>
              <select id="id_cargosu" name="id_cargosu" class="form-control">
              <?php
                require_once "../../models/crud.php";
                $obj=new Crud();
                $datos=$obj->listarModelCargos();
                foreach($datos as $row => $item){
                  echo "<option id='id_cargosu' value='".$item['id_cargos']."'>".$item['cargo']."</option>";
                }
              ?>
              </select>
              <label>CI</label>
              <input type="text" id="ciu" name="ciu" class="form-control form-control-sm" required="">
              <label>Nombre</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
              <label>Paterno</label>
              <input type="text" id="paternou" name="paternou" class="form-control form-control-sm" required="">
              <label>Materno</label>
              <input type="text" id="maternou" name="maternou" class="form-control form-control-sm" required="">
              <label>Direccion</label>
              <input type="text" id="direccionu" name="direccionu" class="form-control form-control-sm" required="">
              <label>Telefono</label>
              <input type="number" id="telefonou" name="telefonou" class="form-control form-control-sm" required="">
              <label>Fecha Nacimiento</label>
              <input type="date" id="fecha_nacimientou" name="fecha_nacimientou" class="form-control form-control-sm" required="">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
