@extends('layouts.admin')
@section('title')
All categories
@endsection
@section('content')
<h1 class="text-center">All categories</h1>
<div class="container px-10">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
           
            <th scope="col">control</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">1</th>
            <td>{{ $category->name }}</td>
           
            <td class="d-flex">
                @if (Auth::user()->role_id==1)
                    
                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">show products</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">edit</a>

                <form method="post" action="{{ route('categories.destroy' , $category->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                 </form>
                 @else
                 <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">show products</a>
                @endif
               </td>
        </tr>  
        @endforeach
    </tbody>
    </table>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>

</div>
@endsection