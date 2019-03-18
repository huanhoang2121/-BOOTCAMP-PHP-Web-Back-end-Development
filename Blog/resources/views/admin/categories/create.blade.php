@extends('admin.layouts.admin')
@section('title', 'Thêm mới danh mục')
@section('content')
    @include('partials.errors')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Thêm danh mục</h1>
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
                    <h3 class="tile-title">Vertical Form</h3>
                    <div class="tile-body">
                        <form action="{{ route('admin.categories.create') }}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Tên thể loại</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            {{ csrf_field() }}
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới
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
