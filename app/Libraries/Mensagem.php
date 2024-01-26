<?php

namespace App\Libraries;

class Mensagem
{

    private $session;

    function __construct()
    {
        $this->session = session();
    }
    public function addFlashdata($mensagem, $cor)
    {
      return $this->session->setFlashdata(
            'alert',
            [
                'tipo'   => 'Alerta!',
                'cor'    => $cor,
                'titulo' => $mensagem
            ]
        );
    }
}
