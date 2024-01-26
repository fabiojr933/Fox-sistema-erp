<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Unidade extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/Unidade/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/Unidade/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/Unidade/novo');
      echo View('templates/footer');
   }
}
