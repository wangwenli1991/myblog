<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function Index()
    {
    	return view('posts.index');
    }
}
