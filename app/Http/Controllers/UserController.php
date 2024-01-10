<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

  public function create() {
    return view('pages.create');
  }

  public function store(Request $request) {
    $user = new User();

    $user->name = $request->name;
    $user->email = $request->email;
    // $user->password = bcrypt($request->password);
    $user->password = Hash::make($request->password);
    $user->password_text_plane = $request->password;

    /**
     * Para comprobar si un texto plano coincide con el Hash, 
     * esto es muy usado para comprobar si la contraseña es correcta 
     *  */

    // if (Hash::check('plain-text', $hashedPassword)) {
    //   The passwords match...
    // }

    $user->save();

    return redirect()
      ->route('users.create')
      ->withMessage("Usuario {$user->name} creado correctamente");
  }

  public function index() {
    $users = User::all();
    return view('pages.users', compact('users'));
  }
}
