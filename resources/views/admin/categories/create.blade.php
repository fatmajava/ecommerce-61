@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">Create product</h1>
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Categories name</label>
          <input type="text" class="form-control" name="name">
         
        

      
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection