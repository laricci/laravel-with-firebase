<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Listagem
     */
    public function index()
    {
        $data = $this->connect()->getReference('users')->getSnapshot()->getValue();

        return view('user-list')->with([
            'users' => is_array($data) ? $data : []
        ]);
    }

    /**
     * Tela de adicionar usuário
     */
    public function add()
    {
        return view('user-add');
    }

    /**
     * Tela de Editar Usuário
     */
    public function edit($id)
    {
        $data = $this->connect()->getReference('users')->getChild($id)->getValue();

        return view('user-edit')->with([
            'id'   => $id,
            'user' => is_array($data) ? $data : []
        ]);
    }

    /**
     * Cria um usuário
     */
    public function create(Request $request)
    {
        $postData = $request->all();

        if (!isset($postData['id']) || trim($postData['id']) == '') {
            return view('error')->with([
                'message' => "A identificação é obrigatória",
                'backTo'  => 'user.add'
            ]);
        }

        $data = $this->connect()->getReference('users')->getChild($postData['id'])->getValue();

        if (!is_null($data)) {
            return view('error')->with([
                'message' => "Já existe um usuário com essa identificação",
                'backTo'  => 'user.add'
            ]);
        }

        $this->connect()->getReference('users/' . $postData['id'])->set($request->except(['_token']));

        return redirect()->route('user.index');
    }

    /**
     * Atualiza um usuário
     */
    public function update($id, Request $request)
    {
        $this->connect()->getReference('users/' . $id)->update($request->except(['_token', '_method']));

        return redirect()->route('user.index');
    }

    /**
     * Remove um usuário
     */
    public function delete($id)
    {
        $this->connect()->getReference('users/' . $id)->remove();

        return redirect()->route('user.index');
    }
}
