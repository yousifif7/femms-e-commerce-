<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms @yield('title')</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css.css">
    <!-- font awesome style -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <script src="https://kit.fontawesome.com/7ba6153525.js" crossorigin="anonymous"></script>
    <link href="/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/"><img width="250" src="images/logo.png"
                            alt="logo" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/reviews">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/aboutus">About us</a>
                            </li>
                            @auth
                                <li class="nav-item" style="margin-top:5px;">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <a class="" href="/cart"
                                        style="text-decoration:none;">Cart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form method="post" action="/logout">
                                        @csrf
                                        <button type="submit" class="regbtn btn-sm">Log out</button>
                                    </form>
                                </li>
                                @if (Auth::user()->role=="admin")    
                                    <li class="nav-item">
                                        <a class="regbtn btn-sm" href="/manage" style="text-decoration:none;">Admin</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="regbtn btn-sm" href="/signup" style="text-decoration:none;">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="regbtn btn-sm" href="/login" style="text-decoration:none;">Login</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        @if (session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- end header section -->
        @yield('contentindex')
    </div>
    <main>

       @yield('content')
    </main>

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Reach at..
                        </h4>
                        <div class="contact_link_box">
                            <a >
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a >
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a >
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="/" class="footer-logo">
                            Famms
                        </a>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                            <a >
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a >
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a >
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a >
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a >
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <div class="col-lg-7 mx-auto px-0">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="/">Famms</a><br>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQery -->
    <script src="/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="/js/custom.js"></script>
</body>

</html>
