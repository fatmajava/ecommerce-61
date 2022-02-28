<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Market</title>
    <link rel="stylesheet" href={{ URL::asset('enduser/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('enduser/css/all.min.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href={{ URL::asset('enduser/css/style.css') }}>
</head>

<body id="home">
    <!-- start header -->
    <header>
        <!-- start first navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item free">
                            <p>Free Shipping on All orders over $75!</p>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Wishlist</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Currency:Usd
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#"><i class="fas fa-dove"></i> my Carft(2)</a>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('profile.edit',Auth::user()->id) }}">
                                            {{ __('Profile') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end first navbar -->

        <!-- start search box -->
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <form type="get" action="{{ url('/search') }}"  class="form search"> <input type="search" name="query" 
                        class="form-control form-input"
                            placeholder="Search Here What You Need">
                        <span class="left-pan"><i class="fa fa-search"></i></span>
                    </form>
                </div>
            </div>
        </div>
        <!-- end search box -->
        <!-- start second navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item fashion">
                            <img src={{ URL::asset("enduser/assets/img/logo.png") }} alt="">
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item menu">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Women</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Men</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FootWear</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cart.list') }}" >
                                    <i class="fas fa-cart-arrow-down" aria-hidden="true"></i>

                                    {{ Cart::getTotalQuantity()}}

                                </a>                           
                             </li>

                         

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end second navbar -->
        <!-- start sticky navbar -->
        <nav class="navbar sticky-navbar navbar-expand-lg navbar-dark bg-dark position-fixed top-0 w-100 start-0 ">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item fashion">
                            <img src= {{ URL::asset("enduser/assets/img/logo.png") }} alt="">
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item menu">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Women</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Men</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FootWear</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end sticky navbar -->
       

    </header>
    @yield('content')

    <!-- start footer -->
    <footer class="section">
        <div class="container ">
            <div class="row footer-texts">
                <div class="col footer-text">
                    <h5>Shops</h5>
                    <ul>
                        <li><a href="#">New In</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Bags and Accessories</a></li>
                        <li><a href="#">Top Brands</a></li>
                        <li><a href="#">Sale& Special Offers</a></li>
                        <li><a href="#">LookBook</a></li>
                    </ul>

                </div>
                <div class="col footer-text">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Customer Services</a></li>
                        <li><a href="#">New Collection</a></li>
                        <li><a href="#">Manufacrures</a></li>
                        <li><a href="#">privacy Policy</a></li>
                        <li><a href="#">Terms and Condtions</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>

                </div>
                <div class="col footer-text">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">Search Items</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#">Orders and Returns</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Rss</a></li>
                        <li><a href="#">Help & FAQ</a></li>
                        <li><a href="#">Consultant</a></li>
                        <li><a href="#">Store Locations</a></li>

                    </ul>

                </div>
                <div class="col footer-text">
                    <h5>NEWSLETTER</h5>

                    <P>Sign Up for News Letter</P>
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <div class="footer-icons">
                        <div class="footer-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="footer-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="footer-icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="footer-copyrights">
            <div class="copyrights">
                <p>&copy;2014 ELLA Fashion store shopily.All rights reserved.Ecomerce Software by Shopily</p>
                <a href="#"><img src={{ URL::asset("enduser/assets/img/visa.png") }} alt=""></i>
                </a>
            </div>

        </div>
    </footer>

    <!-- end footer section -->
    <!-- start section scroll to top -->
    <section class="scroll-to-top position-fixed bottom-0 end-0">
        <div class="container">
            <i class="fas fa-chevron-circle-up fa-2x"></i>

        </div>
    </section>
    <!-- end section scroll -->































    <script src={{ URL::asset('enduser/js/bootstrap.min.js ') }}></script>
    <!-- <script src="https://kit.fontawesome.com/da92f0c6cb.js" crossorigin="anonymous"></script> -->
    <script src={{ URL::asset('enduser/js/jquery-3.6.0.min.js ') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src={{ URL::asset('enduser/custom.js') }}></script>
    <script src={{ URL::asset('enduser/js/script.js ') }}></script>


</body>
