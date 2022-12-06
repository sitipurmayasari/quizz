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
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
