<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Registradora extends Controller
{
   public function index()
   {
      echo View('templates/header');
      echo View('erp/registradora/index');
      echo View('templates/footer');
   }
   public function novo()
   {
      echo View('templates/header');
      echo View('erp/registradora/novo');
      echo View('templates/footer');
   }
   public function editar($id)
   {
      echo View('templates/header');
      echo View('erp/registradora/novo');
      echo View('templates/footer');
   }
}
