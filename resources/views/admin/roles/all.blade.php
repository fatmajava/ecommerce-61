@extends('layouts.admin')

@section('content')
<h1 class="text-center">All Roles</h1>
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
        @foreach ($roles as $role)
        <tr>
            <th scope="row">1</th>
            <td>{{ $role->name }}</td>
           
            <td class="d-flex">
             <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info">show Users</a>
             {{-- <a href="" class="btn btn-danger">delete</a> --}}
             
            </td>
        </tr>  
        @endforeach
    </tbody>
    </table>
</div>
@endsection