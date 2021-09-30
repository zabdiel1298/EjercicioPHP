<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
<form action="menu_empresa.php" method="post">
    
   <table class="table caption-top">
      <caption>Lista de empresas</caption>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre de la empresa</th>
          <th scope="col">RFC</th>
          <th scope="col">Id del plan</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th scope="col"><a href="menu_empresa.php?acc=register_empresa" class="fa fa-plus-circle">Agregar empresa</th></a>
        </tr>
      </thead>
      <tbody>
        {section name=i loop=$data}
            <tr>
                <td align="center" name="idempresa" id="idempresa">{$data[i].id_empresa}</td>
                <td align="center">{$data[i].nombre_empresa}</td>
                <td align="center">{$data[i].rfc}</td>
                <td align="center">{$data[i].id_planes}</td>
                <th scope="col"><a href="edit_empresa.php?id={$data[i].id_empresa}" class="far fa-edit"></th></a>
                <th scope="col"><a href="delete_empresa.php?id={$data[i].id_empresa}" class="fas fa-trash-alt"></th></a> 
            </tr>
        {/section}
      </tbody>
    </table> 
    
</form>
