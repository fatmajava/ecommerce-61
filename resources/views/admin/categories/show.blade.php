@extends('layouts.admin')

@section('content')
<h1 class="text-center" > {{ $category->name}}</h1>
<div class="container px-10">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($category_products as $product )
            
      
      <tr>
        <th scope="row">1</th>
        <td>{{ $product->proname }}</td>
        <td>{{ $product->desc }}</td>
        <td>{{ $product->price }}</td>
        <td class="d-flex">
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">show</a>
          
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>

</div>
@endsection