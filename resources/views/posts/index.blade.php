@extends('layouts.app')

@section('content')
<h1>Posts</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
@foreach($posts as $post)
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 150) }}</p>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Read More</a>
    </div>
</div>
@endforeach
@endsection