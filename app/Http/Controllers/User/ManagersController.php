<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Manager;

class ManagersController extends Controller
{
    public function index()
    {
        $managers = Manager::all();
        // Welcomeビューでそれらを表示
        return view('users.index', ['managers' =>$managers ]);
    }   
}
