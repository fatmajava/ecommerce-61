@extends('layouts.app')

@section('content')
    <h1 class="text-center">All Posts</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->desc }}</td>
                        <td class="d-flex">
                            {{-- <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">edit</a> --}}
                            <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @forelse ($posts as $post)
            <li>{{ $post->title }}</li>
        @empty
            <h1>there's no posts for You</h1>
        @endforelse
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Add post</a>
    </div>
@endsection
