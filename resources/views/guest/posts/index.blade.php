@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Blog Posts</h1>

    @foreach($posts as $post)
        <article>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
            @if (! $loop->last)
                <hr>
            @endif
        </article>
    @endforeach

    <div class="wrap-pagination mt-5 d-flex justify-content-end">
        {{ $posts->links()}}
    </div>
</div>
@endsection