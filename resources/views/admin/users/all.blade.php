@extends('layouts.admin')


@section('content')

<h1 class="text-center">All Users</h1>

<div class="container px-11">

    <table class="table ">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">created_at</th>
            <th scope="col">control</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
            <tr>
              <th scope="row">1</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at}}</td>
              <td class="d-flex">
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">show</a>
   
                <a href="" class="btn btn-warning">edit</a>
                {{-- <a href="" class="btn btn-danger">delete</a> --}}
                <form method="post" action="{{ route('users.destroy' , $user->id) }}">
                   @csrf
                   @method('DELETE')
                   <input type="submit" class="btn btn-danger" value="Delete">
                </form>
              </td>

            </tr>
        @endforeach
    </table>
    {{ $users->links('pagination::bootstrap-4')}}

    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>

</div>

@endsection
