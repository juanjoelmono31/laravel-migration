<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        
        return view('welcome')->with('Usuarios', $user);
    }

    public function store(Request $request){
        $user = new User;
        $user->name = $request->input('nombre');
        $user->email = $request->input('correo');
        $user->password = bcrypt($request->input('contrasena'));

        if($user->save()){
            
            return redirect('/');
        }
    }
}
