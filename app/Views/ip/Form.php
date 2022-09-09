
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modal</title>
  </head>
  <body>
    <h1></h1>

   <!-- <button type="button" class="mt-5 mx-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#mimodal">Modal</button>-->

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
      <option>...</option>
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
      <option>...</option>
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
    