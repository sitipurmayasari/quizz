<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrController extends Controller
{
    public function index()
    {
        return view('frontend.curicullum');
    }
}
