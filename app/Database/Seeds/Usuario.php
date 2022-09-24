<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {

        $nomb_usuario = "admin";
        $contraseña = password_hash("123", PASSWORD_DEFAULT);

        $data = [
            'nomb_usuario' => $nomb_usuario,
            'contraseña'    => $contraseña,
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('Usuarios')->insert($data);
    }
}
