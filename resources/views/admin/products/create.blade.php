@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">Create product</h1>
    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label  class="form-label">product name</label>
          <input type="text" class="form-control" name="proname">
         
        </div>
        <div class="mb-3">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
               style="height: 100px" name="desc"></textarea>
              <label for="floatingTextarea2">Description</label>
            </div>
            
          </div>

        <div class="mb-3">
          <label  class="form-label">price</label>
          <input type="text" class="form-control" name="price" >
      
        </div>
        <div class="mb-3">
          <select class="form-select"  name="cat_id">
              <option selected>select Category</option>
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach

          </select>
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