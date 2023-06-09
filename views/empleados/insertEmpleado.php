
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
          <form id="frminsertarEmpleados" onsubmit="return insertarEmpleadoDatos()" method="post">
              <label>Cargo</label>
              <select id="id_cargos" name="id_cargos" class="form-control">
              <?php
                require_once "../../models/crud.php";
                $obj=new Crud();
                $datos=$obj->listarModelCargos();
                foreach($datos as $row => $item){
                  echo "<option value='".$item['id_cargos']."'>".$item['cargo']."</option>";
                }
              ?>
              </select>
              <label>CI</label>
              <input type="text" id="ci" name="ci" class="form-control form-control-sm" required="">
              <label>Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Paterno</label>
              <input type="text" id="paterno" name="paterno" class="form-control form-control-sm">
              <label>Materno</label>
              <input type="text" id="materno" name="materno" class="form-control form-control-sm">
              <label>Direccion</label>
              <input type="text" id="direccion" name="direccion" class="form-control form-control-sm">
              <label>Telefono</label>
              <input type="number" id="telefono" name="telefono" class="form-control form-control-sm">
              <label>Fecha Nacimiento</label>
              <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control form-control-sm">
              <div>
                <label for="">Genero</label>
                <div class="custom-control custom-radio">
                  <input type="radio" id="masculino" name="genero" value="M" class="custom-control-input">
                  <label class="custom-control-label" for="masculino">Masculino</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="femenino" name="genero" value="F" class="custom-control-input">
                  <label class="custom-control-label" for="femenino">Femenino</label>
                </div>
              </div>
              <div>
                <label for="">Intereses</label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="estudia" name="intereses[]" value="Estudia">
                  <label class="custom-control-label" for="estudia">Estudia</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="deportes" name="intereses[]" value="Deportes">
                  <label class="custom-control-label" for="deportes">Deportes</label>
                </div>
                <div class="custom-control custom-checkbox"> 
                  <input type="checkbox" class="custom-control-input" id="trabaja" name="intereses[]" value="trabaja">
                  <label class="custom-control-label" for="trabaja">trabaja</label>
                </div>
              </div>
              
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


