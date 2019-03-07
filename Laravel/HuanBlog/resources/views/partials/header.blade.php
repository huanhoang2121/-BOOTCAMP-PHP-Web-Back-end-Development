<div class="header" id="ban">
    <div class="container">
        <div class="header_right wow fadeInLeft animated animated col-md-8"  data-wow-delay=".5s"
             style="visibility: visible; animation-delay: 0.5s;margin-right:unset; animation-name: fadeInLeft;">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-7" id="link-effect-7">
                        <ul class="nav navbar-nav">
                            <li class="active act"><a href="{{ route('blog.index') }}">Trang chủ</a></li>
                            <li><a href="{{ route('other.about') }}">Giới thiệu</a></li>
                            <li><a href="#">Du lịch</a></li>
                            <li><a href="#">Thời trang</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="{{ route('admin.posts.index') }}">Trang quản trị</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated col-md-4" data-wow-delay=".5s"
             style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
            <ul>
                <li><a href="#"> </a></li>
                <li><a href="#" class="pin"> </a></li>
                <li><a href="#" class="in"> </a></li>
                <li><a href="#" class="be"> </a></li>

                <li><a href="#" class="vimeo"> </a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--start-main-->
    <div class="header-bottom">
        <div class="container">
            <div class="logo wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                <h1><a href="{{ route('blog.index') }}">HUAN BLOG</a></h1>
                <p><label class="of"></label>SỐNG ĐỂ NHẬU<label class="on"></label></p>
            </div>
        </div>
    </div>
</div>
