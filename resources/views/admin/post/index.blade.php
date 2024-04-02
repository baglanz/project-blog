@extends('layouts.admin')

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
        @foreach ($posts as $post)
            <tr>
                <th scope="row"><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}</a></th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->likes }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        {{ $posts->withQueryString()->links() }}
    </div>


    <a class="mt-5" href="{{ 'posts/create' }}"><button class="btn btn-success">Create</button></a>
@endsection
