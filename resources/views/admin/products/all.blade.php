@extends('layouts.admin')

@section('content')
    <h1 class="text-center">All Products</h1>
    <div class="container px-10">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    {{-- <th scope="col">image</th> --}}
                    <th scope="col">product name</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">1</th>
                        {{-- <td><img src="{{ URL::asset('img/') }}/{{ $post->image }}" height="30vh"></td> --}}
                        <td>{{ $product->proname }}</td>
                        <td>{{ $product->desc }}</td>
                        <td>{{ $product->price }}</td>
                        <td><img src="{{ URL::asset('img/') }}/{{ $product->image }}" height="30vh"></td>
                        <td class="d-flex">
                            @if(Auth::user()->role_id==1)
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">show</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">edit</a>
                            {{-- <a href="" class="btn btn-danger">delete</a> --}}
                            <form method="post" action="{{ route('products.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                            @else
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">show</a>
                            @endif

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      

        {{ $products->links('pagination::bootstrap-4')}}

        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
@endsection
