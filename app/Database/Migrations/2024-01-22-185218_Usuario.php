<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario'            => [
                'type'              => 'INT',
                'constraint'        => 9,
                'usigned'           => true,
                'auto_increment'    => true
            ],
            'nome'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'ativo'                 => [
                'type'              => 'CHAR'
            ],
            'senha'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'email'                 => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'id_empresa'            => [
                'type'              => 'INT',
                'constraint'        => 9,
            ],
            'created_at'            => [
                'type'              => 'DATETIME'
            ],
            'updated_at'            => [
                'type'              => 'DATETIME'
            ],
            'deleted_at'            => [
                'type'              => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->addForeignKey('id_empresa', 'empresa', 'id_empresa');
        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
