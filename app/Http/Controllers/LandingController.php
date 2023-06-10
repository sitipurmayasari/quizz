<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LandingController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('siswa.home');
        }
        return view('frontend.home');
    }
    public function logadmin(Request $request)
    {
        if(Auth::check()){
            $auth = Auth::user();
            if ($auth->hasRole('User / Siswa')) {
                return redirect()->route('siswa.home');
            }else{
                return redirect()->route('dashboard');
            }
        }
        return view('auth.logadmin');
    }

    public function verify_siswa(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nisn' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('nisn', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('siswa.home')  // berhasil login
                        ->withSuccess('Selamat Login Berhasil');
        }
  
        return redirect("login")->withError('NISN / Password Tidak Valid'); //gagal login

    }
    public function verify_guru(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')
                        ->withSuccess('Selamat Login Berhasil');
        }
  
        return redirect("logadmin")->withError('Email / Password Tidak Valid');

    }
   
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
