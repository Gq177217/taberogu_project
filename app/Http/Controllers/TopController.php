<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    function index()
    {
        return view('top');
    }
}
