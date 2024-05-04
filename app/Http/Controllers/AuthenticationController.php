<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function pagelogin(){
        return view('login.index');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'obrigatório',
            'password.required' => 'obrigatório'
        ]);

        try {
            //code...

        } catch (\Throwable $th) {
           dd($th->GetMessage());
        }
    }
}
