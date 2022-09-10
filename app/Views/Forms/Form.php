<div class="modal fade" id="mimodal" tabindex="-1" arai-hidden="true" aria-labelledby="modalTitle"
    data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Network Monitoring</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>                
                <form action="<?php echo site_url('createIp'); ?>" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label for="ip" class="form-label">IP</label>
                        <input type="text" class="form-control" id="ip" name="ip">
                    </div>
                    <div class="col-md-6">
                        <label for="pais" class="form-label">Pais</label>
                        <select id="pais" class="form-select" name="id_pais">
                            <?php foreach ($countries as $country) { ?>
                            <option value="<?php echo $country->id_pais; ?>"><?php echo $country->nomb_pais; ?></option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="reporte" class="form-label">#Reporte</label>
                        <input type="text" class="form-control" id="reporte" name="num_reporte">
                    </div>

                    <div class="col-md-6">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select id="categoria" class="form-select" name="id_categoria">
                            <?php foreach ($categories as $category) { ?>
                            <option value="<?php echo $category->id_categoria; ?>"><?php echo $category->nomb_categoria; ?></option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="fecha_reporte" class="form-label">Fecha Reporte</label>
                        <input type="date" class="form-control" id="fecha_reporte" name="fecha_reporte">
                    </div>
                    <div class="col-6">
                        <label for="fecha_bloqueo" class="form-label">Fecha Bloqueo</label>
                        <input type="date" class="form-control" id="fecha_bloqueo" name="fecha_bloqueo">
                    </div>
                    <div class="col-md-6">
                        <label for="estado" class="form-label">Estado</label>
                        <select id="estado" class="form-select" name="id_estado">
                            <?php foreach ($states as $state) { ?>
                            <option value="<?php echo $state->id_estado; ?>"><?php echo $state->estado; ?></option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
                </form>

                </p>
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>