<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="classification" content="hospital" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="robots" content="index, follow" />
    <meta name="creator" content="Phòng khám Nam Khang" />
    <meta name="publisher" content="Phòng khám Nam Khang" />
    <meta name="author" content="">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
    <meta property="og:type" content="article" />
    <meta property="og:locale " content="vi_VN">
    <meta property="fb:app_id" content="">
    <meta property="fb:admins" content="">
    <!-- link rss,sitemap -->
    <!-- link icon -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    @yield('title')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/hover/css/hover.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/luckhangcom/mobile/body.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/luckhangcom/mobile/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/luckhangcom/mobile/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/luckhangcom/mobile/home.css') }}">
    @yield('css')
    <script type="text/javascript" src="{{ asset('public/js/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.popupoverlay.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/slick/slick.min.js') }}"></script>
    @yield('js')
</head>
<body>
    <menu>
        <ul>
            <li><a href="#">Giới thiệu sản phẩm</a></li>
            <li><a href="#">Chuyên gia tư vấn</a></li>
            <li><a href="#">Câu chuyện sức khỏe</a></li>
            <li><a href="#">Hướng dẫn sử dụng</a></li>
            <li><a href="#">Đặt mua online</a></li>
        </ul>
    </menu>
    <main class="pos-relative">
        @include('luckhangcom.mobile.header')
        @yield('content')
        @include('luckhangcom.mobile.footer')
        <div class="overlay"></div>
    </main>
</body>
</html>