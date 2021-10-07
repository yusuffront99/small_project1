<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            "username"=>"required",
            "handphone"=>"required|max:12",
            "email"=>"required",
            "password"=>"required|min:3"
        ]);

        User::create($validation);
    }
}
