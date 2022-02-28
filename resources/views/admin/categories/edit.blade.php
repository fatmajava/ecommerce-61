@extends('layouts.admin')
@section('title')
Edit Category
@endsection
@section('content')
<div class="container px-10">
    <h1 class="text-center">Edit category</h1>
    <form method="post" action="{{ route('categories.update' , $category->id) }}">
        @csrf
        @method('PUT') 
        <div class="mb-3">
          <label  class="form-label">Category name</label>
          <input type="text" class="form-control" name="name" value="{{ $category->name }}">
         
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection