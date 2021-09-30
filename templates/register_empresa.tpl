
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
<form  action="register_empresa.php" class="row g-3" method="post">
    <div class="container">
        <div class="center">
             <div class="form-group">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre de la empresa</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" required>
                </div>
              </div>
              <br>
                    <div class="form-group">
                     <label for="rfc_1" class="col-sm-2 col-form-label">RFC</label>
                         <div class="col-sm-4">
                             <input type="text" class="form-control" id="rfc" maxlength="12" name="rfc" required>
                         </div>
                    </div>
                    <br>
                        <div class="form-group">
                         <label for="plan">Selecciona el id del plan</label>
                         <select  name="planes" id="planes">
                            {section name=i loop=$data}
                                <tr>
                                  <option>{$data[i].id_planes}</option>
                                </tr>
                            {/section}
                         </select>
                        </div>
                        <br>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                <br><button type="submit" class="btn btn-primary">Registrar</button>                    
                                <button type="submit" class="btn btn-secondary">Cancelar</button>
                              </div>
                            </div> 
        </div>  
    </div>
</form>