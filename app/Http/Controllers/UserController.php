<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('bootstrap.pages.signup');
    }

    public function login() {
        return view('bootstrap.pages.login');
    }
}
