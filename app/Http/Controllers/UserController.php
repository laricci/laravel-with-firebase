<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $data = $this->connect()->getReference('users')->getSnapshot()->getValue();

        return view('user-list')->with([
            'users' => is_array($data) ? $data : []
        ]);
    }

    public function add()
    {
        return view('user-add');
    }

    public function edit($id)
    {
        $data = $this->connect()->getReference('users')->getChild($id)->getValue();

        return view('user-edit')->with([
            'id'   => $id,
            'user' => is_array($data) ? $data : []
        ]);
    }

    public function create(Request $request)
    {
        $this->connect()->getReference('users')->push($request->except(['_token']));

        return redirect()->route('user.index');
    }

    public function read($id)
    {
        
    }

    public function update($id, Request $request)
    {
        $this->connect()->getReference('users/' . $id)->update($request->except(['_token', '_method']));

        return redirect()->route('user.index');
    }

    public function delete($id)
    {
        $this->connect()->getReference('users/' . $id)->remove();

        return redirect()->route('user.index');
    }
}
