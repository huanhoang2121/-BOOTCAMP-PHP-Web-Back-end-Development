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
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12">
            <p hidden="hidden"><strong>{{ $post['id'] }}</strong>
            <p><strong>{{ $post['title'] }}</strong>
            <p><strong>{{ $post['image'] }}</strong><br>
            <a href="{{ route('admin.edit', $post['id']) }}">Edit</a></p>
            <a href="{{ route('admin.delete', $post['id']) }}">Delete</a></p>
        </div>
    </div>
    @endforeach
@endsection
