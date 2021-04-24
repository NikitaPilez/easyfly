<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.main');
    }

    public function contacts()
    {
        return view('index.contacts');
    }

    public function services()
    {
        return view('index.services');
    }
}
