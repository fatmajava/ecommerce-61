@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">Edit user</h1>
    <form method="post" action="{{ route('users.update' , $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="mb-3">
          @if ($user->image==null)
          <img src="{{ URL::asset("uploads/avatars/avatar.jpg") }}" class="rounded-circle justify-content-center" style="height:150px; border-redius:50%; margin-right:25px; " alt="">
      @else
      <img src="{{ URL::asset('img/') }}/{{ $user->image }}" class="rounded-circle justify-content-center" style="height:150px; border-redius:50%; margin-right:25px; "> 
      @endif 
          {{-- <img src="{{ URL::asset('img/') }}/{{ $user->image }}" height="350vh ">  --}}
        </div>
        <div class="mb-3">
          <label  class="form-label">User name</label>
          <input type="text" class="form-control" name="name" value="{{ $user->name }}">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control" name="password" >
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" name="image">
          @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection