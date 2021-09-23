<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
    <table class="table caption-top">
      <caption>Lista de Planes</caption>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidad de clientes</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th scope="col"><button class="btn"><i class="fa fa-plus-circle"></i></button>Agregar plan</th>
        </tr>
      </thead>
      <tbody>
        {section name=i loop=$data}
            <tr>
                <td align="center">{$data[i].id_planes}</td>
                <td align="center">{$data[i].nombre_plan}</td>
                <td align="center">{$data[i].cantidad_clientes}</td>
                <td><button class="btn"><i class="far fa-edit"></i></button></td>
                <td><button class="btn"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
        {/section}
      </tbody>
    </table>