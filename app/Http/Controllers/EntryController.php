<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    

    public function index($id)
    {
        $data = $this->connect()->getReference('users/' . $id . '/entrys/')->getSnapshot()->getValue();
        $user = $this->connect()->getReference('users')->getChild($id)->getValue();

        return view('entry-list')->with([
            'entrys' => is_array($data) ? $data : [],
            'user'   => is_array($user) ? $user : []
        ]);
    }

    public function create($id, $tipo)
    {
        $this->connect()->getReference('users/' . $id . '/entrys/')->push([
            'data' => date('Ymd'),
            'hora' => date('H:i:s'),
            'tipo' => $tipo
        ]);
        
        return redirect()->route('user.index');
    }
}