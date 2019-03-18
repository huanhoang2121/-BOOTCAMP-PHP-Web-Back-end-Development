@extends('admin.layouts.admin')
@section('title', 'Admin Post')
@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Table</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
        </div>
        @if(Session::has('info'))
            <div class="row">
                <div class="col-md-12">
                    <p class="alert alert-info">{{ Session::get('info') }}</p>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Ảnh</th>
                                <th>Danh mục</th>
                                <th>Ngày thêm</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post['id'] }}</td>
                                    <td>{{ $post['title'] }}</td>
                                    <td><img src="{{ asset('storage/'.$post['image']) }}" width="100px" alt=""></td>
                                    <td>{{ $post->category['name'] }}</td>
                                    <td>{{ $post['created_at'] }}</td>
                                    <td>
                                        <a href="{{ route('admin.posts.edit', $post['id']) }}">Edit</a>|
                                        <a href="{{ route('admin.posts.delete', $post['id']) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
