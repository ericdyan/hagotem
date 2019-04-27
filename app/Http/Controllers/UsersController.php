<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
      return view('users/login');
    }

    public function signup() {
      return view('users/signup');
    }
}
