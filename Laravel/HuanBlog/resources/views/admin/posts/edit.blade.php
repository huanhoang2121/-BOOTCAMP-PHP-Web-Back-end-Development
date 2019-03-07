@extends('layouts.admin')
@section('title', 'Edit Post')
@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.posts.update') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            value="{{ $post['title'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content">{{ $post['content'] }}</textarea>
                </div>
                <div class="form-group">
                    <label>Category</label>
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
                    <label>Ảnh</label><br>
                    <img src="{{ asset('storage/'.$post['image']) }}" width="200px" alt=""><br><br>
                    <input
                        type="file"
                        name="image"
                        class="form-control-file">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $post['id'] }}">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
