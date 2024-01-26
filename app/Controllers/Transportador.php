<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Transportador extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/transportador/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/transportador/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/transportador/novo');
      echo View('templates/footer');
   }
}
