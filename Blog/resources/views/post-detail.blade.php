@extends('layouts.master')
@section('title', 'Chi tiết bài viết')
@section('content')
    <!--start-single-->
    <div class="single">
        <div class="container">
            <div class="single-top">
                <a href="#"><img class="img-responsive" src="{{ asset('storage/'.$post['image']) }}" alt=" "></a>
                <div class=" single-grid">
                    <h4>{{  $post['title'] }}</h4>
                    Thể loại: <a
                        href="{{ route('postCategory', $post->category['id']) }}"><span>{{ $post->category['name'] }}</span>
                    </a>
                    <ul class="blog-ic">
                        <li><a href="{{ route('postUser', $post['user_id']) }}"><span> <i
                                        class="glyphicon glyphicon-user"> </i>{{ $post->user['name'] }}</span>
                            </a></li>
                        <li><span><i class="glyphicon glyphicon-time"> </i>{{  $post['created_at'] }}</span></li>
                        <li><span><i class="glyphicon glyphicon-eye-open"> </i>{{  $post['view'] }}</span></li>
                    </ul>
                    <p>{!! $post['content']  !!}</p>
                    <hr>
                    <ul class="blog-ic">
                        <li>
                            <a href="#"><span style="padding-left: 20px;"><i class="glyphicon glyphicon-thumbs-up"> </i> Like({{ count($post->like) }})</span></a>
                            <a href="#"><span><i class="glyphicon glyphicon-comment"> </i> Comment({{ count($post->comment) }}) </span></a>
                        </li>
                    </ul>
                </div>
                <div class="comments heading">
                    @if(isset(Auth::user()->name))
                        <div class="comment-bottom heading">
                            <table style="width: 100%;">
                                <form action="{{ route('postComment', $post['id']) }}" method="post">
                                    <tr>
                                        <td><input type="text" name="content"
                                                   style="padding-top: 9px; padding-bottom: 9px; margin-top: 10px;">
                                        </td>
                                        <td><input type="submit" value="Gửi"
                                                   style="    padding-top: 9px; margin-top: 0px; margin-left: 10px;">
                                        </td>
                                    </tr>
                                    @csrf
                                </form>
                            </table>
                        </div>
                    @endif

                    @foreach($comments as $comment)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="{{ asset('storage/images/si.png') }}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a
                                            href="{{ route('postUser', $comment->user['id']) }}">{{ $comment->user['name'] }}</a>
                                    </h4>
                                    <p>{{ $comment['content'] }}</p>
                                    <p>{{ $comment['created_at'] }}</p>
                                </div>
                                <div class="col-md-2">
                                    @if(isset(Auth::user()->name))
                                        @if(Auth::user()->name === $comment->user['name'])
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                    ...
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                     style="top: 0px;left: 34px; min-width: 10px;width: 37px;padding-left: 5px;">
                                                    <p><a class="dropdown-item" href="#">Sửa</a></p>
                                                    <p><a class="dropdown-item"
                                                          href="{{ route('deletePostComment', $comment['id']) }}">Xóa</a>
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


                <div class="about-one">
                    <h3>BẠN CÓ THỂ THÍCH</h3>
                </div>
                <hr>
                @foreach($viewposts->take(3)->get() as $post)
                    <div class="about-tre">
                        <div class="a-1">
                            <div class="col-md-4 abt-left">
                                <a href="{{ route('postDetail', $post['id']) }}"><img
                                        src="{{ asset('storage/'.$post['image']) }}" alt=""/></a>
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
        </div>
    </div>
    <!--end-single-->
    @include('partials.slide')
@endsection
