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
        return view('ip/ListIp', $this->getAllIp());
    }

    public function getAllIp()
    {
        $ip = new IpModel();
        $datos['ips'] = $ip->findAll();

        return $datos;
    }
}
