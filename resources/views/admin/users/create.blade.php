@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">Create user</h1>
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-3">
          <label  class="form-label">User name</label>
          <input type="text" class="form-control" name="name">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control" name="password" >
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          {{-- <select class="form-select"  name="role_id">
              <option selected>select the role</option>
              @foreach ($roles as $role)
                  <option value="{{ $role->id }}">{{ $role->name }}</option>
              @endforeach

          </select> --}}
      </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection