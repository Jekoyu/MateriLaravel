@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Posts</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <a href="{{ route('posts.create') }}" class="btn btn-primary float-right">Create Post</a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="card">
    <div class="card-body">
        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 150) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection