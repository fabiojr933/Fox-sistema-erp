<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Marca extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/marca/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/marca/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/marca/novo');
      echo View('templates/footer');
   }
}
