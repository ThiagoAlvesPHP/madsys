<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $array;

    public function index()
    {

        return view('home', $this->array);
    }
}
