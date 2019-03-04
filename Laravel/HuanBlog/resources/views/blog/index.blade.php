@extends('layouts.master')
@section('title', 'Post')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{ $post['title'] }}</h1>
            <p>{{ $post['content'] }}!</p>
            <p><a href="{{ route('blog.post', $post['id']) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    @endforeach
@endsection
