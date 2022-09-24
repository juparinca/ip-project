<!DOCTYPE html>
<html lang="en">  
<?php // include '../forms/Form2';?>
 

<head>
    
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
<script type="text/javascript" src="https://cdn.datatables.net/scroller/2.0.2/js/dataTables.scroller.min.js"></script> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="estilo.css">-->
</head>

<body class="container-fluid mt-4">

    <?php echo $this->include('forms/Form'); ?>
    <center>
        <h2>Network monitoring</h2>
    </center>
    <div class="nav justify-content-end">

        <a href="<?php echo base_url('/exit'); ?>" type="button" class="btn btn-danger mb-3">Cerrar sesión</a>
    </div>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="p-2">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mimodal">Registrar Ip</button>
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
<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
        </tbody>
    </table>
