<div class="col-md-4 about-right heading">
    <div class="abt-1">
        <h3>ABOUT US</h3>
        <div class="abt-one">
            <img src="{{ asset('storage/images/c-2.jpg') }}" alt=""/>
            <p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a
                dictum neque.</p>
            <div class="a-btn">
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="abt-2">
        <h3>BẠN CÓ THỂ THÍCH</h3>
        @foreach($viewposts->take(3)->get() as $post)
        <div class="might-grid">
            <div class="grid-might">
                <a href="{{ route('postDetail', $post['id']) }}"><img src="{{ asset('storage/'.$post['image']) }}" class="img-responsive" alt=""> </a>
            </div>
            <div class="might-top">
                <h4><a href="{{ route('postDetail', $post['id']) }}">{{  $post['title'] }}</a></h4>
                <p>{!! $post['content']  !!}</p>
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach
    </div>
    <div class="abt-2">
        <h3>Danh mục</h3>
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <ul>
                @foreach($categories as $category)
                    <li>
                        <a   href="{{ route('postCategory', $category['id']) }}">{{  $category['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="abt-2">
        <h3>NEWS LETTER</h3>
        <div class="news">
            <form>
                <input type="text" value="Email" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email';}"/>
                <input type="submit" value="Subscribe">
            </form>
        </div>
    </div>
</div>
