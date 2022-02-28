<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // products in enduser
    public function showProducts(){
        $products = Product::all();
        return view('enduser_welcome', compact('products'));
    }

// show products in end user
    public function show($id)
    {
        //
        $product =Product::findOrFail($id);
        return view('enduser.show', compact('product')) ;
    }
// search bar for products
    public function search(){
        $search_text = $_GET['query'];
        $products = Product::where('proname' , 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc' , 'LIKE', '%'.$search_text.'%')
        ->get();
        return view('enduser.search',compact('products'));
    }

    public function showproposts($id){
        $posts=Product::findOrFail($id)->posts;
        return view('enduser.posts.all' , compact('posts'));


    }

}

