
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
  <form  action="register_empresa.php" class="row g-3" method="post">
  <div class="col-md-3">
    <label class="form-label">Nombre de la empresa</label>
    <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" required>
  </div>
  <div class="col-md-3">
    <label  class="form-label">RFC</label>
    <input type="text" class="form-control" id="rfc" name="rfc" maxlength="12" required>
  </div>
  <div class="col-md-7">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>Selecciona un plan</option>
          <option value="1">One</option>
        </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>