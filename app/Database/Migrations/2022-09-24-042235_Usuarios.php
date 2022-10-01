<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomb_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'contraseña' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_rol_usuario' => [
                'type' => 'INT',
                
            ],
            'id_estado_usuario int);' => [
                'type' => 'INT',
                
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('Usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('Usuarios');
    }
}
