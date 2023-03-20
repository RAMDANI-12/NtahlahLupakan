<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        //buat cek si user udah login
        if (Auth::attempt($credentials)) {
            //BUAT CEK STATUS USER ACTIVE ATAU BUKAN
            // if(Auth::user()->status != 'active')
            // {
            //     Auth::logout();
            //     $request->session()->invalidate();
            //     $request->session()->regenerateToken();
            //     Session::flash('status', 'failed');
            //     Session::flash('message', 'Your Account is not Active
            //     yet. Please contact admin!');
            //     return redirect('login');
            // }

            $request->session()->regenerate();
            //cek apakah dia admin
            if(Auth::user()->roles_id == 1)
            {
                return redirect('dashboard');
            }

            //cek apakah dia client
            if(Auth::user()->roles_id == 2)
            {
                return redirect('user');
            }
        }

        //kalo gagal login
        Session::flash('status', 'failed');
        Session::flash('message', 'Invalid Login!');
        return redirect('login');
    }

    public function register(){
        return view('register.register');
    }

    public function regis(Request $request)
    {   //validated data masuk atau tidak
        $validated = $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required|min:5',
            'no_tlpn' => 'required',
        ]);
        
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Regist Success! wait admin to approve');
        return redirect('login');
    }
}
