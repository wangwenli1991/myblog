<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
class PostsController extends Controller
{
    public function Index()
    {

    	$post=App\Posts::all();
    	return view('layout',compact('$posts'));
    }
}
