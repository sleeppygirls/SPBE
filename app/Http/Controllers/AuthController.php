<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function actionLogin(Request $req)
    {
        $dataLogin = [
            'username' => $req->input('username'),
            'password' => $req->input('password'),
        ];

        if (Auth::attempt($dataLogin)) {
            // dd(Auth::user()->level);
            return redirect('/');
        } else {
            // dd("error");
            return back();
        }
    }

    function actionLogout()
    {
        // dd([
        //     'Check' => Auth::check(),
        //     'username' => Auth::user()->username,
        //     'level' => Auth::user()->level,
        // ]);
        Auth::logout();

        return redirect('login');
    }

    function dashboard()
    {
        // dd(Auth::user());
        $data = [
            "page" => "dashboard"
        ];
        return view("dashboard", $data);
    }
    // function prof()
    // {
    //     // dd(Auth::user());

    //     return view('profil');
    // }
}
