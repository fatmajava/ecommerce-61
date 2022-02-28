<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller

{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Image =$request->file('image');
        $UserImage = time()."_".$Image->getClientOriginalName();
        $Image->move('img',$UserImage);    

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' =>$UserImage,


        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user_posts = User::findOrFail($id)->posts;
        $user = User::findOrFail($id) ;
        return view('enduser.edit',compact('user_posts', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $user = User::findOrFail($id);
        return view('enduser.edit' , compact('user'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Image =$request->file('image');
        $UserImage = time()."_".$Image->getClientOriginalName();
        $Image->move('img',$UserImage);    

        $user = User::findOrfail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' =>$UserImage,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function showuserposts($id){
        $posts=User::findOrFail($id)->posts;
        return view('enduser.posts.all' , compact('posts'));


    }

   
}
