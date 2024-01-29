<?php

namespace App\Controllers;

use App\Models\EmpresaModel;
use App\Models\UsuarioModel;
use App\Libraries\Mensagem;
use CodeIgniter\Controller;

class Usuario extends Controller
{

   private $dbEmpresa;
   private $dbUsuario;
   private $session;
   private $mensagem;

   function __construct()
   {
      $this->dbEmpresa = new EmpresaModel();
      $this->dbUsuario = new UsuarioModel();
      $this->session = session();
      $this->mensagem = new Mensagem();
   }

   public function index()
   {
      echo View('templates/header');
      echo View('erp/usuario/index');
      echo View('templates/footer');
   }

   public function novo()
   {
      $empresa['empresa'] = $this->dbEmpresa->listarEmpresas();
      echo View('templates/header');
      echo View('erp/usuario/novo', $empresa);
      echo View('templates/footer');
   }

   public function login()
   {
      $id_empresa = $this->dbEmpresa->verificaUsuarioSuper();
      $this->dbUsuario->inserirSupervisor($id_empresa);
      echo View('erp/usuario/login');
   }

   public function autenticar()
   {
      $request = request();
      $empresa = preg_replace("/[.-]/", "", $request->getPost('empresa'));
      $dados = [
         'email'   => $request->getPost('email'),
         'senha'   => $request->getPost('senha'),
      ];
      $id_empresa = $this->dbEmpresa->autenticarEmpresa($empresa);

      if (!$id_empresa) :
         $this->mensagem->addFlashdata('Empresa não encontrado!', 'error');
         return redirect()->to('/login');
      endif;

      $id_usuario = $this->dbUsuario->autenticarUsuario($dados);

      if (!$id_usuario) :
         $this->mensagem->addFlashdata('Usuario ou senha errado!', 'error');
         return redirect()->to('/login');
      endif;

      $dadosEmpresa = [
         'id_empresa'  => $id_empresa,
         'id_usuario'  => $id_usuario
      ];

      $this->session->set($dadosEmpresa);
      $this->mensagem->addFlashdata('Seja bem vindo!', 'info');
      return redirect()->to('/erp/dashboard');
   }

   public function logoff()
   {
      $this->session->destroy();
      return redirect()->to('/login');
   }
}
