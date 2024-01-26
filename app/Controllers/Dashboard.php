<?php

namespace App\Controllers;

use App\Models\ReceitaModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
       echo View('templates/header');
       echo View('erp/dashboard/index');
       echo View('templates/footer');
    }   
}
