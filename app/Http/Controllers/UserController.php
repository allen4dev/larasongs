<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.profile');
    }

    public function show(User $user)
    {
        return view('users.detail', compact('user'));
    }
}
