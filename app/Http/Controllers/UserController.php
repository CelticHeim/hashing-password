<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
  // public function index() {
  //     return view('user');
  // }

  public function create() {
    return view('pages.create');
  }

  public function store(Request $request) {

    
    return redirect()->route('user.index');
  }

  public function index() {
    return view('pages.users');
  }
}
