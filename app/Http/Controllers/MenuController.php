<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function sports() {
      return view('menu/sports');
    }
    public function lifestyle() {
      return view('menu/lifestyle');
    }
    public function fashion() {
      return view('menu/fashion');
    }
    public function music() {
      return view('menu/music');
    }
    public function shop() {
      return view('menu/shop');
    }

}
