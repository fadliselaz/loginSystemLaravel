<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getlogin()
    {
        $data['err'] = false;
        return view('login', $data);
    }

    public function postLogin(Request $req)
    {
        $success = \Auth::attempt([
            'email' => $req->inputEmail,
            'password' => $req->inputPassword
        ]);

        if (!$success) {
            $data['err'] = true;
            return view('login', $data);
        } else {
            return redirect()->route('home');
        }
    }


    public function getRegister()
    {
        $data['reg'] = false;
        return view('register', $data);
    }

    public function postRegister(Request $req)
    {
        $this->validate($req, [
            'inputName' => 'required|min:5',
            'inputEmail' => 'required|min:5|email|unique:users,email',
            'inputPassword' => 'required|same:password2'
        ]);

        User::create([
            'name' => $req->inputName,
            'email' => $req->inputEmail,
            'password' => bcrypt($req->inputPassword)
        ]);

        $data['reg'] = true;
        return view('/register', $data);
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('gLogin');
    }
}
