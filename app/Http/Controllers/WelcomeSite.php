<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeSite extends Controller
{
    //
    public function index(){
        return view('cv');
    }
}
