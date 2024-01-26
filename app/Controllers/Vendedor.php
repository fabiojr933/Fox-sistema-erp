<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Vendedor extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/vendedor/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/vendedor/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/vendedor/novo');
      echo View('templates/footer');
   }
}
