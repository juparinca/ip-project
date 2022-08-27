<?php

namespace App\Controllers;

use App\Models\IpModel;
use CodeIgniter\Controller;

class Ips extends Controller
{
    public $ips;

    public function __construct()
    {
    }

    public function index()
    {
        return view('ip/ListIp', $this->getAllIpWithJoin());
    }

    public function getAllIp()
    {
        $ip = new IpModel();
        $datos['ips'] = $ip->findAll();

        return $datos;
    }

    public function getAllIpWithJoin()
    {
        $db = db_connect();
        $query = $db->query('SELECT ip, (SELECT nomb_pais FROM paises as p WHERE p.id_pais = i.id_pais ) as nomb_pais, 
        num_reporte, (SELECT nomb_categoria FROM categorias as c WHERE c.id_categoria = i.id_categoria) as nomb_categoria, fecha_reporte, fecha_bloqueo, 
        (SELECT estado FROM estados as e WHERE e.id_estado = i.id_estado) as estado, fecha_desbloqueo
        FROM ip as i;');

        $datos['ips'] = $query->getResult();

        return $datos;
    }
}
