<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        //Login
        $mensaje = session('mensaje');

        return view('login/Login');
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $nameKey = $this->request->getPost('nameKey');
        $valueKey = $this->request->getPost('valueKey');

        $dataJson = [
            "name_key" => $nameKey,
            "value_key" => $valueKey
        ];

        $response = $this->perform_http_request("POST","http://localhost:8085/ip-api/validate-key", json_encode($dataJson));
        
        $Usuario = new Usuarios();
        $datosUsuario = $Usuario->obtenerUsuario(['nomb_usuario' => $usuario]);

        //TODO:: Las contraseñas deben manejar con hash
        //password_verify($password, $datosUsuario[0]['contraseña'])

        if (count($datosUsuario) > 0 && $password == $datosUsuario[0]['contraseña']) {
            if(json_decode($response)->exist_key == 1){
                $data = [
                'usuario' => $datosUsuario[0]['nomb_usuario'],
                'type' => $datosUsuario[0]['id_estado_usuario'],
                ];
                $session = session();
                $session->set($data);

                return redirect()->to(base_url('/listIp'))->with('mensaje', '1');
            }else{
                return redirect()->to(base_url('/'))->with('mensaje', '0');
            }
            
        } else {
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }

    public function exit()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }

    function perform_http_request($method, $url, $data = false) {
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));

                }
                
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                
                break;
            default:
                if ($data) {
                    $url = sprintf("%s?%s", $url, http_build_query($data));
                }
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //If SSL Certificate Not Available, for example, I am calling from http://localhost URL

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}