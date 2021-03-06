@extends('admin.layouts.admin')
@section('title', 'Edit Post')
@section('content')
    @include('partials.errors')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Thêm bài viết</h1>
                <p>Sample forms</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Update Form</h3>
                    <div class="tile-body">
                        <form action="{{ route('admin.posts.update') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $post['id'] }}">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ $post['title'] }}">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content"
                                          name="content">{{ $post['content'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option
                                            @if($post['category_id'] == $category['id'])
                                            {{"selected"}}
                                            @endif
                                            value="{{$category['id']}}">{{$category['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" name="image" class="form-control-file" value="{{ $post['image'] }}">
                            </div>
                            {{ csrf_field() }}
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Lưu
                                </button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Trở về</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
