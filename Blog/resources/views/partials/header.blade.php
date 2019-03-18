<!--header-top-starts-->
<div class="header-top">
    <div class="container">
        <div class="head-main">
            <a href="{{ route('index') }}"><img src="{{ asset('storage/images/logo-1.png') }}" alt=""
                                                width="286px"/></a>
        </div>
    </div>
</div>
<!--header-top-end-->
<!--start-header-->
<div class="header">
    <div class="container">
        <div class="head">
            <div class="navigation" style="padding-top: 8px;">
                <span class="menu"></span>
                <ul class="navig" style="margin-top: unset; padding-top: 5px">
                    <li class="active act"><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li><a href="{{ route('other.about') }}">Giới thiệu</a></li>
                    <li class="dropdown" style="width: auto">
                        <a class="nav-link dropdown-toggle" href="#" style="padding-right: unset" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" v-pre>
                            Danh mục<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="min-width: 100px; width: 130px"
                             aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                                <p>
                                    <a class="dropdown-item" style="padding-left: 10px; padding-right: unset"
                                       href="{{ route('postCategory', $category['id']) }}">{{  $category['name'] }}</a>
                                </p>
                            @endforeach
                        </div>
                    </li>
                    <li><a href="{{ route('admin.posts') }}">Trang quản trị</a></li>
                    <li><a href="{{ route('other.contact') }}">Liên hệ</a></li>
                </ul>
            </div>

            <div class="header-right">
                <div class="search-bar">
                    <form class="navbar-form" action="{{ route('postSearch') }}">
                        @csrf
                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                        <input type="submit" value="" style="right: 0px; top: 14px; left: 95%; padding-top: 1px;">
                    </form>
                </div>
            </div>

            <div class="navigation" style=" float: right; padding-right: 40px; padding-top: 8px;">
                <ul class="navig" style="margin-top: unset; padding-top: 5px;">
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('user.logout') }}" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- script-for-menu -->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function () {
        $(" ul.navig").slideToggle("slow", function () {
        });
    });
</script>
<!-- script-for-menu -->

