<?php


namespace App\Controllers;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class Ola extends BaseController
{


public function index()
    {
        return view('welcome_message');
    }


    public function cumprimenta()
    {
        $data['mensagem'] = "Olá! Bem-vindo à aula de CodeIgniter 4! Agora usando a view. ";
        return view('view_cumprimenta', $data);
    }
}
