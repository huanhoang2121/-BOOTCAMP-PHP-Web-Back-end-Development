<div class="col-md-3 technology-right">
    <div class="blo-top1">
        <div class="tech-btm">
            <div class="search-1 wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                <form action="{{ route('admin.posts.search')}}">
                    @csrf
                    <input type="search" name="keyword" placeholder="Search">
                    <input type="submit" value=" ">
                </form>
            </div>

            <h4>Popular Posts </h4>
            {{--@foreach($posts as $post)--}}
                {{--<div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">--}}
                    {{--<div class="blog-grid-left">--}}
                        {{--<a href="{{ route('blog.post', $post['id']) }}"><img--}}
                                {{--src="{{ asset('storage/'.$post['image']) }}" class="img-responsive" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="blog-grid-right">--}}

                        {{--<h5><a class="title-popular" href="{{ route('blog.post', $post['id']) }}">{{ $post['title'] }}</a></h5>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--@endforeach--}}
            <div class="insta wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                <h4>Instagram</h4>
                <ul>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/t1.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/m1.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/f1.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/m2.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/f2.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/t2.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/f3.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/t3.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                    <li><a href="singlepage.html"><img src="{{ asset('storage/images/m3.jpg') }}" class="img-responsive"
                                                       alt=""></a></li>
                </ul>
            </div>
            <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
            <div class="twt">
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"
                        class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button"
                        title="Twitter Tweet Button"
                        src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag"
                        style="position: static; visibility: visible; width: 166px; height: 28px;"
                        data-hashtag="TwitterStories"></iframe>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + '://platform.twitter.com/widgets.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'twitter-wjs');</script>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
