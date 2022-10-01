<?php

namespace App\Models;

    use CodeIgniter\ModeL;

    class Usuarios extends ModeL
    {
        public function obtenerUsuario($data)
        {
            $Usuario = $this->db->table('Usuarios');
            $Usuario->where($data);

            return $Usuario->get()->getResultArray();
        }
    }
