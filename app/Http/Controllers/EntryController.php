<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{

    /**
     * Listagem
     */
    public function index()
    {
        $users = $this->connect()->getReference('users')->getSnapshot()->getValue();
        $data  = $this->connect()->getReference('entrys')->getSnapshot()->getValue();

        return view('entry-list')->with([
            'entrys' => is_array($data) ? $data : [],
            'users'  => is_array($users) ? $users : [],
        ]);
    }

    /**
     * Cria um registro de teste
     */
    public function create($id, $tipo)
    {
        $lastEntry = $this->connect()->getReference('users/' . $id . '/entrys/')
            ->orderByChild('data')
            ->limitToLast(1)
            ->getSnapshot()
            ->getValue();

        $lastEntry = is_array($lastEntry) ? array_values($lastEntry)[0] : $lastEntry;
        
        if (isset($lastEntry['tipo']) && $lastEntry['tipo'] == $tipo) {
            
            return view('error')->with([
                'message' => "O último registro do usuário já é '$tipo'.",
                'backTo'  => 'entry.index',
                'params'  => ['id' => $id]
            ]);

        } 

        $this->connect()->getReference('users/' . $id . '/entrys/')->push([
            'data' => date('Ymd'),
            'hora' => date('H:i:s'),
            'tipo' => $tipo
        ]);
        
        return redirect()->route('entry.index', ['id' => $id]);
    }
}
