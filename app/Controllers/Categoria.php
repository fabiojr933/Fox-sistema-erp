<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Categoria extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/categoria/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/categoria/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/categoria/novo');
      echo View('templates/footer');
   }
}
