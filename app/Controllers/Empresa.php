<?php

namespace App\Controllers;

use App\Libraries\Mensagem;
use App\Models\EmpresaModel;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

class Empresa extends Controller
{

   private $dbEmpresa;
   private $dbUsuario;
   private $mensagem;

   function __construct()
   {
      $this->dbEmpresa = new EmpresaModel();
      $this->dbUsuario = new UsuarioModel();
      $this->mensagem = new Mensagem();
   }

   public function index()
   {
      $empresa['empresa'] =  $this->dbEmpresa->listarEmpresas();

      echo View('templates/header');
      echo View('erp/empresa/index', $empresa);
      echo View('templates/footer');
   }
   public function editar($id)
   {
      $empresa['empresa'] =  $this->dbEmpresa->getEmpresa($id);
      echo View('templates/header');
      echo View('erp/empresa/editar', $empresa);
      echo View('templates/footer');
   }

   public function novo()
   {
      echo View('templates/header');
      echo View('erp/empresa/novo');
      echo View('templates/footer');
   }

   public function salvar()
   {
      $request = Request();
      $id_empresa = $request->getPost('id_empresa');
      $data = [
         'razao_social'       => $request->getPost('razao_social'),
         'nome_fantasia'      => $request->getPost('nome_fantasia'),
         'cnpj_cpf'           => $request->getPost('cnpj_cpf'),
         'ie'                 => $request->getPost('ie'),
         'emite_nfe'          => $request->getPost('emite_nfe'),
         'crt'                => $request->getPost('crt'),
         'endereco'           => $request->getPost('endereco'),
         'cep'                => $request->getPost('cep'),
         'bairro'             => $request->getPost('bairro'),
         'telefone'           => $request->getPost('telefone'),
         'numero'             => $request->getPost('numero'),
         'ativo'              => $request->getPost('ativo') == 'on' ? 'S' : 'N',
         'email'              => $request->getPost('email'),
      ];

      if (!$id_empresa) {
         $sucesso = $this->dbEmpresa->inserir($data);
         if ($sucesso['error']) :
            $this->mensagem->addFlashdata($sucesso['error'], 'error');
            return redirect()->to('/erp/dashboard/empresa');
         endif;
         $this->mensagem->addFlashdata($sucesso['success'], 'info');
         return redirect()->to('/erp/dashboard/empresa');
      } else {
         $sucesso = $this->dbEmpresa->updateEmpresa($data, $id_empresa);
         $this->mensagem->addFlashdata($sucesso['success'], 'info');
         return redirect()->to('/erp/dashboard/empresa');
      }
   }
   public function excluir($id)
   {
      $vericaUsuario = $this->dbUsuario->verificaEmpresa($id);
      if ($vericaUsuario['error']) {
         $this->mensagem->addFlashdata($vericaUsuario['error'], 'error');
         return redirect()->to('/erp/dashboard/empresa');
      }
      $sucesso = $this->dbEmpresa->excluirEmpresa($id);
      $this->mensagem->addFlashdata($sucesso['success'], 'info');
      return redirect()->to('/erp/dashboard/empresa');
   }
}
