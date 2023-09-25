<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login.view_login');
    }
    public function login(Request $request)
    {

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Silahkan masukan email',
                'password.required' => 'Silahkan masukan password',
            ]
        );
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::attempt($infologin)) {
            return redirect('/beranda');
        } else {
            return redirect('')->withErrors('Username dan password tidak valid')->withInput();
        }
    }
}
