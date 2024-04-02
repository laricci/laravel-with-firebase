<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Database;

class FirebaseController extends Controller
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

    public function index()
    {
        $this->connect()->getReference('teste')->push('teste');

        echo 'index';
    }
}
