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
        $ip = new IpModel();
        $datos['ips'] = $ip->getAllIpWithJoin();

        return $datos;
    }

    public function insertOrUpdate($data, $id = false)
    {
        $ip = new IpModel();
        //Ejemplo de data a insert o update
        /* $id = 19;
        $data = [
            'ip' => '192.55.22.2',
            'id_pais' => 3,
            'num_reporte' => 6211,
            'id_categoria' => 3,
            'id_estado' => 2,
        ]; */

        $dataIp = [
            'id_ip' => $id,
            'ip' => $data['ip'],
        ];

        if ($this->validIfExistIp($dataIp)) {
            //Update
            $this->validInsertOrUpdateIp($data, true, $id);
        } else {
            //Insert
            $this->validInsertOrUpdateIp($data, false);
        }
    }

    public function validIfExistIp($dataIp)
    {
        $ip = new IpModel();

        return $ip->validIfExistIp($dataIp);
    }

    public function validInsertOrUpdateIp($data, $exist, $id = false)
    {
        $ip = new IpModel();
        if (!$exist) {
            $ip->insertOrUpdateIp($data);

            return 'El registro se ha insertado/actualizado con éxito';
        } else {
            $ip->insertOrUpdateIp($data, $id);

            return 'El registro se ha actualizado con éxito';
        }
    }
}
