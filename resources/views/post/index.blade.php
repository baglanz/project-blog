@extends('layouts.header')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{ route('home') }}">Home</a>
                @can('view', auth()->user())
                    <a class="nav-item nav-link" href="{{ route('admin.post.index') }}">Admin</a>
                @endcan
            </div>
        </div>
    </nav>
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
