<?php


namespace App\Controllers;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Usuario;


class UsuarioController extends BaseController
{
    public function index()
    {
        $model = new Usuario();
        $data['usuarios'] = $model->findAll();
        return view('usuarios', $data);
    }


    public function criar()
    {
        return view('criar_usuario');
    }


    public function salvar()
    {
        $model = new Usuario();
        $data = [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
        ];
        $model->insert($data);
        return redirect()->to('/usuarios');
    }


    public function editar($id)
    {
        $model = new Usuario();
        $data['usuario'] = $model->find($id);
        return view('editar_usuario', $data);
    }


    public function atualizar($id)
    {
        $model = new Usuario();
        $data = [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
        ];
        $model->update($id, $data);
        return redirect()->to('/usuarios');
    }


    public function excluir($id)
    {
        $model = new Usuario();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }
}
