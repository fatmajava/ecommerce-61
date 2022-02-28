@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">{{ $product->proname }}</h1>
    <form >
        
        <div class="mb-3">
          <label  class="form-label">Product Name</label>
          <input type="text" class="form-control" value="{{ $product->proname }}" readonly>
          
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <input type="text" class="form-control" value="{{ $product->desc }}" readonly>
            
          </div>
          <div class="mb-3">
            <label  class="form-label">price</label>
            <input type="text" class="form-control" value="{{ $product->price }}" readonly>
            
          </div>
        
        
          <a href="{{ route('products.index') }}" class="btn btn-primary">Submit</a>
      </form>
</div>
@endsection