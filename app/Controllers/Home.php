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

        $Usuario = new Usuarios();
        $datosUsuario = $Usuario->obtenerUsuario(['nomb_usuario' => $usuario]);

        //TODO:: Las contraseñas deben manejar con hash
        //password_verify($password, $datosUsuario[0]['contraseña'])

        if (count($datosUsuario) > 0 && $password == $datosUsuario[0]['contraseña']) {
            $data = [
                'usuario' => $datosUsuario[0]['nomb_usuario'],
                'type' => $datosUsuario[0]['id_rol_usuario'],
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/listIp'))->with('mensaje', '1');
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
}
