
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
<form action="edit_empresa.php" class="row g-3" method="post">
<input type="hidden" class="form-control" name="id_empresa" id="registro" maxlength="12" value="{if isset($smarty.post.id_empresa)}{$smarty.post.id_empresa}{else}{$data.id_empresa}{/if}">
    <div class="container">
        <div class="center">
                <div class="form-group">
                   <label for="nombre_empresa" class="col-sm-2 col-form-label">Nombre de la empresa</label>
                   <div class="col-sm-4">
                     <input type="text" class="form-control" name="empresa" id="empresa" value="{if isset($smarty.post.empresa)}{$smarty.post.empresa}{else}{$data.nombre_empresa}{/if}" required>
                   </div>
                 </div>
                 <br>
                        <div class="form-group">
                         <label for="" class="col-sm-2 col-form-label">RFC</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="registro" id="registro" maxlength="12" value="{if isset($smarty.post.registro)}{$smarty.post.registro}{else}{$data.rfc}{/if}" required>
                             </div>
                        </div>
                    <br>  
                            <div class="form-group">
                             <label for="cars">Selecciona el id del plan</label>
                                <select name="idplanes1" id="idplanes1">
                                    <tr>
                                      <option>{if isset($smarty.post.idplanes1)}{$smarty.post.planes1}{else}{$data.id_planes}{/if}</option>
                                    </tr>
                                </select>
                            </div>
                            <br>
                                    <div class="form-group row">
                                      <div class="col-sm-10">
                                         <br><button type="submit" class="btn btn-primary">Modificar</button>                    
                                      </div>
                                    </div> 
        </div>  
    </div>
</form>