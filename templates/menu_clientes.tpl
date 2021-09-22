<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
    <table class="table caption-top">
      <caption>Lista de Clientes</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Usuario</th>
          <th scope="col">Password</th>
          <th scope="col">Agregar</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
          {section name=i loop=$data}
            <tr>
                <th scope="row">$data[i]</th>
                <td align="center">{$data[i].id}</td>
                <td align="center">{$data[i].nombre_cliente}</td>
                <td align="center">{$data[i].fecha_nacimiento}</td>
                <td align="center">{$data[i].usuario}</td>
                <td align="center">{$data[i].contraseña}</td>
                <td><button class="btn"><i class="fa fa-plus-circle"></i></button></td>
                <td><button class="btn"><i class="far fa-edit"></i></button></td>
                <td><button class="btn"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
          {/section}
      </tbody>
    </table>