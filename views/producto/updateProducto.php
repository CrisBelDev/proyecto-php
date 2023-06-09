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
          <form id="frminsertarProductou" onsubmit="return actualizarProducto()" method="post">
              <input type="text" id="id_productou" name="id_productou" hidden="">
              <label>Proveedor</label>
              <select id="id_provedoresu" name="id_provedoresu" class="form-control">
              <?php
                require_once "../../models/crud.php";
                $obj=new Crud();
                $datos=$obj->listarModelProveedores();
                foreach($datos as $row => $item){
                  echo "<option id='id_provedoresu' value='".$item['id_provedores']."'>".$item['empresa']."</option>";
                }
              ?>
              </select>
              <label>Nombre</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
              <label>Descripcion</label>
              <input type="text" id="descripcionu" name="descripcionu" class="form-control form-control-sm" required="">
              <label>Costo Compra</label>
              <input type="text" id="costocomprau" name="costocomprau" class="form-control form-control-sm" required="">
              <label>Costo Venta</label>
              <input type="number" id="costoventau" name="costoventau" class="form-control form-control-sm" required="">
              <label>Cantidad</label>
              <input type="number" id="stocku" name="stocku" class="form-control form-control-sm" required="">
              <label>Fecha</label>
              <input type="text" id="fechau" name="fechau" class="form-control form-control-sm" required="">
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
