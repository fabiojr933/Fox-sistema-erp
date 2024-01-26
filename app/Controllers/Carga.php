<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Carga extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/carga/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/carga/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/carga/novo');
      echo View('templates/footer');
   }
}
