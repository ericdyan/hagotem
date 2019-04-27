<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Hash;
use Auth;

class UsersController extends Controller
{
    public function index() {
      return view('users/login');
    }

    public function signup() {
      return view('users/signup');
    }

    public function createUser(Request $request) {
      // Validation
      $validated = $request->validate([
        'email' => 'required|unique:users|email',
        'password' => 'required|confirmed',
        'firstName' => 'required',
        'lastName' => 'required',
        'birthday' => 'required|date'
      ]);

      if ($validated) {
        // Create and store new User
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password); //bcrypt
        $user->save();

        $userId = DB::table('users')->select('id')->where('email', '=', $request->email)->get();
        // Update users_info table
        DB::table('users_info')->insert(
          [
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'birthday' => $request->birthday,
            'user_id' => $userId[0]->id
          ]
        );
        return redirect('/login');
      }
    }

    public function login() {
      $loginIsSuccessful = Auth::attempt([
        'email' => request('email'),
        'password' => request('password')
      ]);

      if ($loginIsSuccessful) {
        return redirect('/profile');
      } else {
        return redirect('/login');
      }
    }

    public function profile() {
      return view('users/profile', [
        'user' => Auth::user()
      ]);
    }

    public function logout() {
      Auth::logout();
      return redirect('/login');
    }
 }
