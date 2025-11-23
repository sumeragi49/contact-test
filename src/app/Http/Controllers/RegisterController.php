<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {
        $register = $request->only(['name', 'email', 'password']);
        Register::create($register);

        return view('auth/register');
    }
}
