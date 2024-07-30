<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurateurController extends Controller
{
    public function inscription() {
        return view('auth.register');
    }
}