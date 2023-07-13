<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestController extends Controller
{
    public function index()
    {
        return view('stamp');
    }

}