@extends('layouts.master')
@section('title', 'Trang chủ')
@section('content')

    <!-- banner -->
    @include('partials.banner')
    <!-- banner -->
    <!--about-starts-->
    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="col-md-8 about-left">
                    <div class="about-one">
                        <h3 style="text-transform: uppercase">{{ $category['name'] }}</h3>
                    </div>
                    <hr>
                    @if(count($category->post) > 0)
                        @foreach($category->post as $post)
                            <div class="abt-left">
                                <h3><a href="{{ route('postDetail', $post['id']) }}">{{  $post['title'] }}</a></h3>
                            </div>
                            <div class="about-two">
                                <a href="{{ route('postDetail', $post['id']) }}"><img
                                        src="{{ asset('storage/'.$post['image']) }}" alt=""/></a>
                                <p>
                                    <a href="{{ route('postUser', $post['user_id']) }}"> {{ $post->user['name'] }} </a>|
                                    {{  $post['created_at'] }}|
                                    <a href="{{ route('postCategory', $post['category_id']) }}"> {{ $post->category['name'] }}</a>
                                </p>
                                <p>{!! $post['content']  !!}</p>
                                <div class="about-btn">
                                    <a href="{{ route('postDetail', $post['id']) }}">Read More</a>
                                </div>
                                <ul>
                                    <li><a href="#">Thích({{  $post['view'] }})</a></li>
                                    <li><a href="#">Bình luận({{  $post['view'] }})</a></li>
                                    <li><a href="#">Lượt xem({{  $post['view'] }})</a></li>
                                </ul>
                            </div>
                            <div class="clear-fix"></div>
                        @endforeach
                    @else
                        <div class="abt-left">
                            <h3  class="alert alert-info" align="center">Không có bài viết nào trong danh mục này!</h3>
                        </div>
                        <div class="clear-fix"></div>
                        <hr>
                    @endif
                    <div class="clear-fix"></div>

                    <div class="about-one">
                        <h3>BẠN CÓ THỂ THÍCH</h3>
                    </div>
                    <hr>
                    @foreach($viewposts->take(4)->get() as $post)
                        <div class="about-tre">
                            <div class="a-1">
                                <div class="col-md-6 abt-left">
                                    <h3><a href="{{ route('postDetail', $post['id']) }}"><img src="{{ asset('storage/'.$post['image']) }}" alt=""/></a></h3>
                                    <h6>{{ $post->category['name'] }}</h6>
                                    <h3><a href="{{ route('postDetail', $post['id']) }}">{{  $post['title'] }}</a></h3>
                                    <p>{!! $post['content']  !!}</p>
                                    <label>Lượt xem({{  $post['view'] }}) | {{  $post['created_at'] }}</label>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>

                <!-- right-menu -->
            @include('partials.right-menu')
            <!-- right-menu -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--about-end-->
    @include('partials.slide')
@endsection
