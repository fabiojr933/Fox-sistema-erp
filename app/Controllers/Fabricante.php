<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Fabricante extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/fabricante/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/fabricante/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/fabricante/novo');
      echo View('templates/footer');
   }
}
