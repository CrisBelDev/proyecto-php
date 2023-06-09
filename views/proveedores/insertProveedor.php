
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
          <form id="frminsertarProveedor" onsubmit="return insertarProveedorDatos()" method="post">
              <label>Empresa</label>
              <input type="text" id="empresa" name="empresa" class="form-control form-control-sm" required="">
              <label>Contacto</label>
              <input type="text" id="contacto" name="contacto" class="form-control form-control-sm" required="">
              <label>Correo</label>
              <input type="email" id="email" name="email" class="form-control form-control-sm">
              <label>Telefono</label>
              <input type="number" id="telefono" name="telefono" class="form-control form-control-sm">
              <label>Direccion</label>
              <input type="text" id="direccion" name="direccion" class="form-control form-control-sm">
              <label>Logo</label>
              <input type="file" id="logo" name="logo" class="form-control form-control-sm">
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


