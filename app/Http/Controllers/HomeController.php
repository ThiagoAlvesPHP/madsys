<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $array = [];

    public function index()
    {
        return view('home', $this->array);
    }

    /**
     * logout
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
