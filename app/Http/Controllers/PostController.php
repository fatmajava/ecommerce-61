<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function showposts(){
        $posts = Post::all();
        return view('enduser_welcome', compact('posts'));
    }


   
    
}
