<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ProfileBuilder Template">
    <meta name="keywords" content="ProfileBuilder, Dennis, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profession Profile Builder</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('Homepages/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Homepages/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Homepages/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Homepages/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Homepages/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Homepages/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Homepages/css/style.css')}}" type="text/css">

    <style>
        .header {
            background-color: #0c2b4b;
            color: white;
        }

    </style>
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/"><img src="{{asset('Homepages/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/register">
                                    <button class="btn btn-outline-info">
                                        Create Portfolio
                                    </button>
                                </a></li>
                            <li><a href="/services">Services</a></li>
{{--                            <li><a href="#">Pages</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                    <li><a href="./about.html">About</a></li>--}}
{{--                                    <li><a href="./portfolio.html">Portfolio</a></li>--}}
{{--                                    <li><a href="./blog.html">Blog</a></li>--}}
{{--                                    <li><a href="./blog-details.html">Blog Details</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
@yield('content')

@include('Homepages.footer')

<!-- Js Plugins -->
<script src="{{asset('Homepages/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('Homepages/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Homepages/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('Homepages/js/mixitup.min.js')}}"></script>
<script src="{{asset('Homepages/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('Homepages/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('Homepages/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('Homepages/js/main.js')}}"></script>
</body>

</html>
