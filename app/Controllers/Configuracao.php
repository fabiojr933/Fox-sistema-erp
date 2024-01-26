<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Configuracao extends Controller
{
   public function empresa()
   {
      echo View('templates/header');
      echo View('erp/configuracao/empresa');
      echo View('templates/footer');
   }
}
