<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function admin(){
        return view('admin.dashboard');
    }

    // function operator(){
    //     return view('operator.Dashboard');
    // }
}