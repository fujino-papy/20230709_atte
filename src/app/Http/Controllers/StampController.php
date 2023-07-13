<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StampController extends Controller
{
    public function store()
    {
        return view('stamp');
    }

    public function index()
    {
        return view('attendance');
    }
}
