<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empresa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_empresa'            => [
                'type'              => 'INT',
                'constraint'        => 9,
                'usigned'           => true,
                'auto_increment'    => true
            ],
            'razao_social'          => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'nome_fantasia'         => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'email'                 => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'cnpj_cpf'              => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'ie'                    => [
                'type'              => 'VARCHAR',
                'constraint'        => 25
            ],
            'emite_nfe'              => [
                'type'               => 'CHAR',
                'constraint'        => 1
            ],
            'crt'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '100'
            ],
            'endereco'              => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
                'null'              => true,
            ],
            'cep'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
                'null'              => true,
            ],
            'bairro'                => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
                'null'              => true,
            ],
            'telefone'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
                'null'              => true,
            ],
            'numero'                => [
                'type'              => 'VARCHAR',
                'constraint'        => 20,
                'null'              => true,
            ],
            'ativo'                 => [
                'type'              => 'CHAR'
            ],
            'logo'                 => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => true,
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
        $this->forge->addKey('id_empresa', true);
        $this->forge->createTable('empresa');
    }

    public function down()
    {
        $this->forge->dropTable('empresa');
    }
}
