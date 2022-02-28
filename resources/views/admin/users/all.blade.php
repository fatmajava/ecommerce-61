@extends('layouts.admin')


@section('content')

<h1 class="text-center">All Users</h1>

<div class="container px-11">

    <table class="table ">
        <thead>
        <tr>
            <th scope="col">image</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">created_at</th>
            <th scope="col">control</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
            <tr>
              <th scope="row">
                @if ($user->image==null)
                <img src="{{ URL::asset("uploads/avatars/avatar.jpg") }}" class="rounded-circle justify-content-center" style="height:50px; border-redius:50%; margin-right:25px; " alt="">
            @else
            <img src="{{ URL::asset('img/') }}/{{ $user->image }}" class="rounded-circle justify-content-center" style="height:50px; border-redius:50%; margin-right:25px; "> 
            @endif 
              </th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at}}</td>
              <td class="d-flex">
                @if(Auth::user()->role_id==1)

                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">show</a>
   
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">edit</a>
                <a href="{{ route('users.showposts', $user->id) }}" class="btn btn-dark">posts</a>
                {{-- <a href="" class="btn btn-danger">delete</a> --}}
                <form method="post" action="{{ route('users.destroy' , $user->id) }}">
                   @csrf
                   @method('DELETE')
                   <input type="submit" class="btn btn-danger" value="Delete">
                </form>
                @else
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">show</a>

                @endif
              </td>

            </tr>
        @endforeach
    </table>
    {{ $users->links('pagination::bootstrap-4')}}

    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>

</div>

@endsection
