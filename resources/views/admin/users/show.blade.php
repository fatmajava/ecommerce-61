@extends('layouts.admin')

@section('content')
<div class="container px-10">
    <h1 class="text-center">{{ $user->name }}</h1>
    <form >
        
        <div class="mb-3">
          <label  class="form-label">User name</label>
          <input type="text" class="form-control" value="{{ $user->name }}" readonly>
          
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{ $user->email }}" readonly>
            
          </div>
        
        
          <a href="{{ route('users.index') }}" class="btn btn-primary">Submit</a>
      </form>
</div>
@endsection