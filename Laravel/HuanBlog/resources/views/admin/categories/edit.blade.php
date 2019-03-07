@extends('layouts.admin')
@section('title', 'Chỉnh sửa danh mục')
@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.categories.update') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tên thể loại</label>
                    <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            value="{{ $categories['name'] }}">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $categories['id'] }}">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
