<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function create()
    {
        return view('ajouter-plat');
    }
}
