@extends('layouts.admin')
@section('title', 'Danh mục')
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
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    @foreach($categories as $category)
        <div class="row">
            <div class="col-md-12">
                <p hidden="hidden"><strong>{{ $category['id'] }}</strong></p>
                <p><strong>Tên danh mục: {{ $category['name'] }}</strong></p>
                <a href="{{ route('admin.categories.edit', $category['id']) }}">Sửa</a>
                <a href="{{ route('admin.categories.delete', $category['id']) }}">Xóa</a>
            </div>
        </div>
    @endforeach
@endsection
