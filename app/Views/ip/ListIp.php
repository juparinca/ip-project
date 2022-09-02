<!DOCTYPE html>
<html lang="en">  
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
       
</head>

<body class="container-fluid mt-4">
    <center>
        <h2>Network monitoring</h2>
    </center>
    <div class="nav justify-content-end">

        <button type="button" class="btn btn-danger mb-3">Cerrar sesión</button>
    </div>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="p-2">
                <button type="button" class="btn btn-success">Registrar Ip</button>
                <button type="button" class="btn btn-secondary">Depurar Lista</button>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-secondary" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">IP</th>
                <th scope="col">País</th>
                <th scope="col"># Reporte</th>
                <th scope="col">Categoría</th>
                <th scope="col">Fecha reporte</th>
                <th scope="col">Fecha bloqueo</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha desbloqueo</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ips as $ip) { ?>    
            <td><?php echo $ip->ip; ?></td>
            <td><?php echo $ip->nomb_pais; ?></td>
            <td><?php echo $ip->num_reporte; ?></td>
            <td><?php echo $ip->nomb_categoria; ?></td>
            <td><?php echo $ip->fecha_reporte; ?></td>
            <td><?php echo $ip->fecha_bloqueo; ?></td>
            <td><?php echo $ip->estado; ?></td>
            <td><?php echo $ip->fecha_desbloqueo; ?></td>
            <td>      
            <th><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mimodal">Editar</button></th>  
            <th><button type="button" class="btn btn-info">Desbloquear</button></th>
            </td>
            </tr>
            <?php
}?>
        </tbody>
    </table>


<!-- Codigo del Modal -->

    <div class="modal fade" id="mimodal" tabindex="-1" arai-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Network Monitoring</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p>
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">IP</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Pais</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">#Reporte</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-6">
    <label for="inputState" class="form-label">Categoria</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Acceso no autorizado</option>
      <option>Aplicación comprometida</option>
      <option>Denegación de servicio (DoS)</option>
      <option>Sabotaje</option>
      <option>Uso no autorizado de recursos</option>
    </select>
  </div>
  
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Fecha Reporte</label>
    <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Fecha Bloqueo</label>
    <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Bloqueada</option>
      <option>Desbloqueada</option>
    </select>
  </div>
  
</form>

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>