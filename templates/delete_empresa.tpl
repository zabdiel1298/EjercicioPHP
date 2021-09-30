<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 

<form action="delete_empresa.php" method="post">
    <div class="container">
        <div class="center">
            <div class="form-group">
                    <input type="hidden" class="form-control" name="id_empresa" id="id_empresa" value="{if isset($smarty.post.id_empresa)}{$smarty.post.id_empresa}{else}{$data.id_empresa}{/if}">
                    <h3>¿Deseas eliminar el registro?</h3>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <br><button type="submit" class="btn btn-primary">Eliminar</button>                    
                        <button type="" class="btn btn-secondary">Cancelar</button>
                      </div>
                    </div> 
            </div>  
        </div>
</form>