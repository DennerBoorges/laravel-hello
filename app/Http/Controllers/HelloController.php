<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello');
    }

    public function act()
    {
        return view('act');
    }

    public function teste()
    {
        return view('teste');
    }
}

?>