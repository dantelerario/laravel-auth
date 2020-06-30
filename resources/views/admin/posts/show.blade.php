@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-5">{{ $post->title }}</h1>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th colspan="3"></th>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
        </tbody>
    </table>

    <h3 class="mb-4">Post Image</h3>
    @if(!empty($post->path_img))
        <img src="{{ asset('storage/' . $post->path_img) }}" alt="{{ $post->title }}">
    @else
        <div class="no-img-text">No image for this post</div>
    @endif

</div>
@endsection