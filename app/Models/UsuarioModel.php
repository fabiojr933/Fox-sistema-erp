<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = [
        'id_usuario',
        'nome',
        'ativo',
        'senha',
        'email',
        'id_empresa',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function inserirSupervisor($id_empresa)
    {
        $dadosUsuario = [
            'nome'       => 'Fox sistemas',
            'ativo'      => 'S',
            'senha'      => md5('123'),
            'email'      => 'supervisor@foxsistemas.com.br',
            'id_empresa' => $id_empresa,
        ];

        $super = $this->where('email', 'supervisor@foxsistemas.com.br')->first();
        if (!$super) {
            $id_empresa = $this->insert($dadosUsuario);
        }
    }
    public function autenticarUsuario($dados)
    {
        $usuario = $this->where('email', $dados['email'])->first();
        if ($usuario['senha'] == md5($dados['senha'])) {
            return $usuario['id_usuario'];
        }
    }

    public function verificaEmpresa($id)
    {
        $usuario = $this->where('id_empresa', $id)->first();
        if ($usuario['id_empresa']) {
            return  ['error' => 'Essa empresa esta vinculado a um usuario, não é possivel excluir!'];
        }
    }
}
