<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct(){
      $this->middleware('guest');
    }
    
    public function create(){
      return view('layouts.registration.create');
    }

    public function store(){
        
        //Validate the form
        $this->validate(request(),[
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required|confirmed'
        ]);

        //Create and save user
        $user= new User;

        $user->name= request('name');
        $user->email= request('email');
        $user->password= bcrypt(request('password'));
        $user->save();
        //$user= User::create(request(['name', 'email', 'password']));

        //Sign him in
        //auth()->login($user);

        //redirect
        return redirect('/logout');

    }
}
