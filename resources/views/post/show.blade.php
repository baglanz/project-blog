@extends('layouts.header')
@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Likes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->likes }}</td>
        </tr>
        </tbody>
    </table>

    <div>
        <a href="{{ route('post.edit', $post->id) }}"><button class="btn btn-warning">Edit</button></a>
        <a href="{{ route('post.index') }}"><button class="btn btn-success">Go home</button></a>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection
