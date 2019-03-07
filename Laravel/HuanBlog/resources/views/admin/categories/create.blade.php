@extends('layouts.admin')
@section('title', 'Thêm mới danh mục')
@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.categories.create') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tên thể loại</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection
