<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Despesa extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/despesa/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/despesa/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/despesa/novo');
      echo View('templates/footer');
   }
}
