<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZooController extends Controller
{
    function welcome() {
        return view('welcome');
    }

    function animals() {
        return view('animals');
    }

}
