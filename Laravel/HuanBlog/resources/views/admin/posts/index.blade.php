@extends('layouts.admin')
@section('title', 'Admin Post')
@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <p hidden="hidden"><strong>{{ $post['id'] }}</strong></p>
                <p><strong>Title: {{ $post['title'] }}</strong></p>
                <img src="{{ asset('storage/'.$post['image']) }}" width="200px" alt=""><br>
                <p>Category: {{ $post->category['name'] }}</p>
                <a href="{{ route('admin.posts.edit', $post['id']) }}">Edit</a>
                <a href="{{ route('admin.posts.delete', $post['id']) }}">Delete</a>
            </div>
        </div>
    @endforeach
    {{ $posts->links() }}
@endsection
