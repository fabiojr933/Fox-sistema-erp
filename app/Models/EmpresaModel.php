<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'id_empresa';
    protected $allowedFields = [
        'id_empresa',
        'razao_social',
        'nome_fantasia',
        'cnpj_cpf',
        'ie',
        'emite_nfe',
        'crt',
        'endereco',
        'cep',
        'bairro',
        'telefone',
        'numero',
        'ativo',
        'logo',
        'email'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';


    // verifica se tem o usuario super do sistema, caso não tiver ele vai inserir.
    public function verificaUsuarioSuper()
    {
        $dadosEmpresa = [
            'razao_social'      => 'Fox sistemas',
            'nome_fantasia'     => 'Fox sistemas',
            'cnpj_cpf'          => '04870537109',
            'ie'                => '123456',
            'emite_nfe'         => 'N',
            'crt'               => 'Simples Nacional',
            'endereco'          => 'Rua goiania',
            'cep'               => '78520000',
            'bairro'            => 'Jd Vitoria',
            'telefone'          => '66999539490',
            'numero'            => '1335',
            'ativo'             => 'S',
            'email'             => 'supervisor@foxsistemas.com.br',
        ];


        $super = $this->where('email', 'supervisor@foxsistemas.com.br')->first();
        if (!$super) {
            $id_empresa = $this->insert($dadosEmpresa);
            return $id_empresa;
        }
    }
    public function autenticarEmpresa($cnpj_cpf)
    {
        $empresa = $this->where('cnpj_cpf', $cnpj_cpf)->first();
        return $empresa['id_empresa'];
    }
}
