<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    //
}
