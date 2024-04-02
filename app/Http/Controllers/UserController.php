<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Database;

class UserController extends Controller
{
    /**
     * Get database connection
     * @return Database
     */
    public function connect()
    {
        $firebase = (new Factory)
            ->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')))
            ->withDatabaseUri(env('FIREBASE_DATABASE_URL'));

        return $firebase->createDatabase();
    }

    public function show()
    {

    }

    public function index()
    {
        $data = $this->connect()->getReference('users')->getSnapshot()->getValue();

        return view('user-list')->with([
            'users' => $data
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
            'user' => $data
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
