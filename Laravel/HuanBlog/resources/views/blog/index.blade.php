@extends('layouts.master')
@section('title', 'Post')
@section('content')

    <!-- banner -->
    @include('partials.banner')
    <!-- banner -->
    <div class="technology">
        <div class="container">
            <!-- technology-right -->

            <div class="col-md-9 technology-left">
                <div class="tech-no">
                    <div class="tech-btm" style="padding-bottom: 5px">
                        <h4 style="margin-bottom: unset">Bài viết mới nhất! </h4>
                    </div>
                    <!-- post-only -->
                    @foreach($posts as $post)
                        <div class="tc-ch wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="tch-img" align="center">
                                <a href="{{ route('blog.post', $post['id']) }}"><img
                                        src="{{ asset('storage/'.$post['image']) }}" class="img-responsive"
                                        alt=""></a>
                            </div>
                            <h3><a href="{{ route('blog.post', $post['id']) }}">{{ $post['title'] }}</a></h3>
                            <h6>
                                Huấn Hoàng / {{ $post['add_date'] }} / <a href="#">{{ $post->category['name'] }}</a>
                            </h6>

                            {{--<div class="col-md-12">--}}
                                {{--<p class="content">{{ $post['content'] }}</p>--}}
                            {{--</div>--}}
                            <div class="bht1">
                                <a href="{{ route('blog.post', $post['id']) }}">Read more...</a>
                            </div>
                            <div class="soci">
                                <ul>
                                    <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                    <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                    <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
                                    <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                                    <li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach
                    <div style="text-align: center;">
                        {{ $posts->appends(request()->query()) }}
                    </div>
                    <div class="clearfix"></div>
                    <!-- post-only -->
                    <!-- post-double -->
                    <div class="w3ls">
                        <div class="tech-btm" style="padding-bottom: 5px">
                            <h4 style="margin-bottom: unset">Bài viết hot trong tuần! </h4>
                        </div>
                        @foreach($posts as $post)
                            <div class="col-md-6 w3ls-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                                <div class="tc-ch">
                                    <div class="tch-img">
                                        <a href="{{ route('blog.post', $post['id']) }}">
                                            <img src="{{ asset('storage/'.$post['image']) }}" class="img-responsive">
                                        </a>
                                    </div>

                                    <h3 class="title"><a href="{{ route('blog.post', $post['id']) }}">{{ $post['title'] }}</a></h3>
                                    <h6>
                                        Huấn Hoàng / {{ $post['add_date'] }} / <a href="#">{{ $post->category['name'] }}</a>
                                    </h6>
                                    {{--<div class="col-md-12">--}}
                                        {{--<p class="content">{{ $post['content'] }}</p>--}}
                                    {{--</div>--}}
                                    <div class="bht1">
                                        <a href="{{ route('blog.post', $post['id']) }}">Read more...</a>
                                    </div>
                                    <div class="soci">
                                        <ul>
                                            <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                            <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    <!-- post-double -->

                    <!-- post-list -->
                {{--<div class="tech-btm" style="padding-bottom: 5px">--}}
                {{--<h4 style="margin-bottom: unset">Bài viết mới nhất! </h4>--}}
                {{--</div>--}}
                {{--<div class="wthree">--}}
                {{--<div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">--}}
                {{--<div class="tch-img">--}}
                {{--<a href="singlepage.html"><img src="{{ asset('storage/images/f1.jpg') }}"--}}
                {{--class="img-responsive" alt=""></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">--}}
                {{--<h3><a href="singlepage.html">Lorem Ipsum is simply</a></h3>--}}
                {{--<h6>BY <a href="singlepage.html">ADAM ROSE </a>JULY 10 2016.</h6>--}}
                {{--<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna--}}
                {{--aliqua exercitation ullamco laboris .</p>--}}
                {{--<div class="bht1">--}}
                {{--<a href="singlepage.html">Read More</a>--}}
                {{--</div>--}}
                {{--<div class="soci">--}}
                {{--<ul>--}}

                {{--<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>--}}
                {{--<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}

                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
                {{--<div class="wthree">--}}
                {{--<div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">--}}
                {{--<div class="tch-img">--}}
                {{--<a href="singlepage.html"><img src="{{ asset('storage/images/f2.jpg') }}"--}}
                {{--class="img-responsive" alt=""></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">--}}
                {{--<h3><a href="singlepage.html">Lorem Ipsum is simply</a></h3>--}}
                {{--<h6>BY <a href="singlepage.html">ADAM ROSE </a>JULY 10 2016.</h6>--}}
                {{--<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna--}}
                {{--aliqua exercitation ullamco laboris .</p>--}}
                {{--<div class="bht1">--}}
                {{--<a href="singlepage.html">Read More</a>--}}
                {{--</div>--}}
                {{--<div class="soci">--}}
                {{--<ul>--}}
                {{--<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>--}}
                {{--<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}

                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
                {{--<div class="wthree">--}}
                {{--<div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">--}}
                {{--<div class="tch-img">--}}
                {{--<a href="singlepage.html"><img src="{{ asset('storage/images/f3.jpg') }}"--}}
                {{--class="img-responsive" alt=""></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">--}}
                {{--<h3><a href="singlepage.html">Lorem Ipsum is simply</a></h3>--}}
                {{--<h6>BY <a href="singlepage.html">ADAM ROSE </a>JULY 10 2016.</h6>--}}
                {{--<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna--}}
                {{--aliqua exercitation ullamco laboris.</p>--}}
                {{--<div class="bht1">--}}
                {{--<a href="singlepage.html">Read More</a>--}}
                {{--</div>--}}
                {{--<div class="soci">--}}
                {{--<ul>--}}
                {{--<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>--}}
                {{--<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}

                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
                <!-- post-list -->
                </div>
            </div>
            <!-- right-menu -->
        @include('partials.right-menu')
        <!-- right-menu -->
        </div>
    </div>
@endsection
