@extends('layouts.master')
@section('title', 'Post Detail')
@section('content')

    <div class="technology">
        <div class="container">
            <div class="col-md-9 technology-left">
                <div class="agileinfo">

                    <h2 class="w3">Chi tiết bài viết</h2>
                    <div class="single">
                        <img src="{{ asset('storage/'.$post['image']) }}" width="100%" class="img-responsive" alt="">
                        <div class="b-bottom">
                            <div class="tc-ch" style="padding: unset">
                                <h6>
                                    @foreach($categories as $category)
                                        @if($post['category_id'] == $category['id'])
                                            <a href="">{{ $category['name'] }}</a>
                                        @endif
                                    @endforeach
                                    / Huấn Hoàng / {{ $post['add_date'] }}
                                </h6>
                            </div>
                            <h5 class="top">{{ $post['title'] }}</h5>
                            <br>
                            {!! $post['content'] !!}
                            <div class="col-md-4">
                                <a class="span_link" href="#">
                                    <span class="glyphicon glyphicon-comment"></span>0
                                </a>
                                <a class="span_link" href="#">
                                    <span class="glyphicon glyphicon-eye-open"></span>56
                                </a>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="response">
                        <h4>Bình luận</h4>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img src="{{ asset('storage/images/sin1.jpg') }}" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
                                    passages of Lorem Ipsum available,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li>Jun 21, 2016</li>
                                    <li><a href="#">Reply</a></li>
                                </ul>
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img src="{{ asset('storage/images/sin2.jpg') }}" class="img-responsive"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                            variations of passages of Lorem Ipsum available,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <ul>
                                            <li>July 17, 2016</li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img src="{{ asset('storage/images/sin1.jpg') }}" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
                                    passages of Lorem Ipsum available,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li>Jul 22, 2016</li>
                                    <li><a href="#">Reply</a></li>
                                </ul>
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img src="{{ asset('storage/images/sin2.jpg') }}" class="img-responsive"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                            variations of passages of Lorem Ipsum available,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <ul>
                                            <li>Aug 01, 2016</li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="coment-form">
                        <h4>Leave your comment</h4>
                        <form action="#" method="post">
                            <input type="text" value="Name " name="name" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            <input type="email" value="Email" name="email" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <input type="text" value="Website" name="websie" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Website';}" required="">
                            <textarea onfocus="this.value = '';"
                                      onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                            <input type="submit" value="Submit Comment">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- right-menu -->
        @include('partials.right-menu')
        <!-- right-menu -->
        </div>
    </div>
@endsection
