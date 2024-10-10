<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiakadController extends Controller
{
    function index()
    {
        return view('siakad');
    }
}
