<?php
namespace App\Http\Controllers\Admin\Trait;

use App\Models\User;

trait showPosts{
    public function showPosts($id){
        $posts=User::findOrFail($id)->posts;
        // return response()->json($posts);
        return view('admin.posts.all' , compact('posts'));
            }
}

?>