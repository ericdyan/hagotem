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
      if (Auth::check()) {
        return redirect('/profile');
      } else {
      return view('users/login');
      }
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
        DB::table('users_info')->insert([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'birthday' => $request->birthday,
            'address_id' => $userId[0]->id,
            'user_id' => $userId[0]->id
          ]);
        // Populate with temp address values
        $default = 'Please update';
        DB::table('addresses')->insert([
          'address1' => $default,
          'city' => $default,
          'state' => $default,
          'zip_code' => 0
        ]);
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

    public function logout() {
      Auth::logout();
      return redirect('/login');
    }

    public function profile() {
      $userId = Auth::id();
      $userInfo = DB::table('users_info')->where('user_id', $userId)->first();
      $userAddress = DB::table('addresses')->where('id', $userId)->first();
      return view('users/profile', [
        'user' => Auth::user(),
        'userInfo' => $userInfo,
        'userAddress' => $userAddress
      ]);
    }

    public function edit() {
      $userId = Auth::id();
      $userInfo = DB::table('users_info')->where('user_id', $userId)->first();
      $userAddress = DB::table('addresses')->where('id', $userId)->first();
      return view('/users/edit', [
        'user' => Auth::user(),
        'userInfo' => $userInfo,
        'userAddress' => $userAddress
      ]);
    }

    // EMAIL REQUIRED UNIQUE FIX 
    public function store(Request $request) {
      $userId = Auth::id();
      // Validation
      $validated = $request->validate([
        'email' => 'required|unique:users|email',
        'firstName' => 'required',
        'lastName' => 'required',
        'birthday' => 'required|date',
        'address1' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zipCode' => 'required|numeric'
      ]);

      if ($validated) {
        DB::table('users')->where('id', $userId)->update([
          'email' => $request->email,
        ]);
        DB::table('users_info')->where('id', $userId)->update([
          'first_name' => $request->firstName,
          'last_name' => $request->lastName,
          'birthday' => $request->birthday,
        ]);
        DB::table('addresses')->where('id', $userId)->update([
          'address1' => $request->address1,
          'address2' => $request->address2,
          'city' => $request->city,
          'state' => $request->state,
          'zip_code' => $request->zipCode
        ]);
        return redirect('/profile');
      }

    }

 }
