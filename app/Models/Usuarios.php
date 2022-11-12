<?php

namespace App\Models;

    use CodeIgniter\ModeL;

    class Usuarios extends ModeL
    {
        public function obtenerUsuario($data)
        {
            /*$Usuario = $this->db->table('Usuarios');
            $Usuario->where($data);

            return $Usuario->get()->getResultArray();*/

            $query = "SELECT id_usuario, nomb_usuario, contraseña, id_rol_usuario, id_estado_usuario, nomb_rol FROM usuarios inner join roles ON id_rol_usuario=id_rol WHERE nomb_usuario='".$data['nomb_usuario']."'";
            $resultados = $this->db->query($query);
            return $resultados->getResult();
        }
    }
