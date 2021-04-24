<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list()
    {
        return view('blog.list');
    }

    public function item($slug)
    {
        return view('blog.item');
    }
}
