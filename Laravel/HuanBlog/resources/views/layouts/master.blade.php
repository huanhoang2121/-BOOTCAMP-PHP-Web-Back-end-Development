<!DOCTYPE HTML>
<html>
<head>
    <title>Blog - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="applijewelleryion/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }

    </script>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'/>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- animation-effect -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

    <style>
        .content {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-height: 1.4em;
            max-height: 5.5em;
        }
        .title-popular{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-height: 1.4em;
            max-height: 2.8em;
        }
        .title {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-height: 1.4em;
            max-height: 2.8em;
        }
    </style>
    <!-- //animation-effect -->
</head>
<body>
<!-- header -->
@include('partials.header')
<!-- header -->
<!-- content -->
@yield('content')
<!-- content -->
<!-- footer -->
@include('partials.footer')
<!-- footer -->
</body>
</html>
