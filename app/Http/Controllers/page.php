<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class page extends Controller
{
    //
    public function create(){
        return view('login');
    }

    public function logout(){
        Session::forget('user');
        return redirect()->route('login');
    }
}
