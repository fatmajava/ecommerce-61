@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">Create post</h1>
    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control" name="title">
          @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
             style="height: 100px" name="desc"></textarea>
            <label for="floatingTextarea2">Description</label>
          </div>
          
        </div>
        
  

        
     
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection