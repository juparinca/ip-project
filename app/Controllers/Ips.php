<?php

namespace App\Controllers;

use App\Models\IpModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use App\Models\StateModel;
use CodeIgniter\Controller;

class Ips extends Controller
{
    public $ips;

    public function __construct()
    {
    }

    public function index()
    {
        $datos['ips'] = $this->getAllIpWithJoin();
        $datos['categories'] = $this->getCategories();
        $datos['countries'] = $this->getCountries();
        $datos['states'] = $this->getStates();

        return view('ip/ListIp', $datos);
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

        return $ip->getAllIpWithJoin();
    }

    public function insertOrUpdate($id = false)
    {
        $request = \Config\Services::request();
        $data = $request->getPost();
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

        //return 'El registro se ha insertado/actualizado con éxito';
        } else {
            $ip->insertOrUpdateIp($data, $id);

            //return 'El registro se ha actualizado con éxito';
        }
    }

    public function getCategories()
    {
        $category = new CategoryModel();

        return $category->getCategories();
    }

    public function getCountries()
    {
        $country = new CountryModel();

        return $country->getCountries();
    }

    public function getStates()
    {
        $state = new StateModel();

        return $state->getStates();
    }

    public function cProcedure()
    {

        $request = \Config\Services::request();
        $data = $request->getPost();

        $valueIp = $data['valorIp'];
        // var_dump($dataIp);
        
        $ip = new IpModel();

        $ip->callProcedure($valueIp);
        //return view('ip/ListIp');
        return redirect()->to(base_url('/listIp'));
    }
}
