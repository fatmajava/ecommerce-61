@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">Edit Product</h1>
    <form method="post" action="{{ route('products.update' , $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="mb-3">
          <label  class="form-label">Product name</label>
          <input type="text" class="form-control" name="proname" value="{{ $product->proname }}">
         
        </div>
        <div class="mb-3">
            <label  class="form-label">Product description</label>
            <input type="text" class="form-control" name="desc" value="{{ $product->desc }}">
  
          </div>
          <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
  
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