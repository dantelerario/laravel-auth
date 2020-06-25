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
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
        </tbody>
    </table>
</div>
@endsection