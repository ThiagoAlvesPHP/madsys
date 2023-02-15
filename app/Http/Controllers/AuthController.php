<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $array = [];
    //
    public function index()
    {
        return view('login', $this->array);
    }

    public function authenticate(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        if (Auth::attempt($creds)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with(
                "status", "Invalid email and/or password!"
            );
        }
    }
}
