
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
          <form id="frminsertarProductos" onsubmit="return insertarProductoDatos()" method="post">
              <select id="id_provedores" name="id_provedores" class="form-control">
              <?php
                require_once "../../models/crud.php";
                $obj=new Crud();
                $datos=$obj->listarModelProveedores();
                foreach($datos as $row => $item){
                  echo "<option value='".$item['id_provedores']."'>".$item['empresa']."</option>";
                }
              ?>
              </select>
              <label>Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Descripcion</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm" required="">
              <label>Costo Compra</label>
              <input type="number" id="costocompra" name="costocompra" class="form-control form-control-sm">
              <label>Costo Venta</label>
              <input type="number" id="costoventa" name="costoventa" class="form-control form-control-sm">
              <label>Cantidad</label>
              <input type="number" id="stock" name="stock" class="form-control form-control-sm">  
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


