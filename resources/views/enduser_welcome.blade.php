@extends('layouts.app')

@section('content')
    {{-- main content --}}
     <!-- start slider -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src={{ URL::asset("enduser/assets/img/slide_1.jpg") }} class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block slider-1">
                <h3>SOMETHING IS BETTER</h3>
                <h1>Fashion Lorrem</h1>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src={{ URL::asset("enduser/assets/img/slide_2.jpg") }} class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block slider-2 ">
                <img src= {{ URL::asset("enduser/assets/img/slider-caption-sale.png") }} alt="">
            </div>
        </div>
        <div class="carousel-item">
            <img src={{ URL::asset("enduser/assets/img/slide_bg1.jpg") }} class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block slide-3">
                <h1>NEWLOOK FASHION 2021</h1>
                <h4>What's Tranding Fashion?</h4>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end slider -->
    <!-- start collection  -->

    <section id="promo-banner">
        <div class="container ">
            <div class="row justify-content-center ">
                <!-- left side -->
                <div class="col-md-6 col-12 ">
                    <div class="row ">
                        <div class="col-12 ">
                            <div class="wrap-banner">
                                <a class=" banner-1 " href=" ">
                                    <img src={{ URL::asset('enduser/assets/img/banner.jpg ') }} alt=" ">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="font-collection">
                                <h3>Hot Collection</h3>
                                <h2>New Trend for women</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eius officiis ea
                                    suscipit dolorem dolores voluptatibus nihil esse autem optio vitae nostrum nobis maiores
                                    facilis consequuntur alias necessitatibus voluptas
                                    exercitationem.
                                </p>
                                <button type="button" class="btn btn-outline-dark">Shop Now</button>


                            </div>
                        </div>

                    </div>
                </div>
                <!-- right side -->
                <div class="col-md-6 col-12 ">
                    <div class="row  ">
                        <div class="col-12 position-relative">
                            <div class="wrap-banner-dark">
                                <div class="desc text-center position-absolute ">
                                    <a href="#" class="btn-view"> View Collection</a>
                                </div>
                                <a class=" banner-1 " href=" ">
                                    <img src={{ URL::asset('enduser/assets/img/banner2.jpg') }} alt=" ">
                                </a>

                            </div>
                        </div>
                        <div class="col-12  pt-2">
                            <div class="wrap-banner">
                                <a class=" banner-1 " href=" ">
                                    <img src={{ URL::asset('enduser/assets/img/banner3.jpg') }} alt=" ">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end collection section -->

    <!-- featured line -->

    <div class="featured">

        <p class="featured-line"><span>Featured Items</span></p>

    </div>
    <!-- featered line -->
    <!-- start section featered items  -->
    <ul class="nav justify-content-center pt-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Men</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Women</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Kids</a>
        </li>

    </ul>
    <!-- products -->
    <div class="container product-items">

        <div class=" row row-cols-sm-2 row-cols-md-3 row-cols-lg-4  ">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6-col-sm-12 position-relative ">

                    <div class="product-element">
                        {{-- <img src={{ URl::asset("enduser/assets/img/p-1.jpg") }} alt=""> --}}
                        <img src="{{ URL::asset('img/') }}/{{ $product->image }}" />
                        <span>{{ $product->price }}</span>


                        <div class="pro-icon text-center position-absolute top-0 start-0">
                            <i class="fa-solid fa-eye"></i>
                            <a href="{{ route('enduser.show', $product->id) }}" class="btn btn-dark">show</a>

                        </div>
                    </div>
                    <h5>{{ $product->proname }}</h5>
                    <p>{{ $product->desc }}</p>
                    {{-- <h5>{{ $product->categories->name }}</h5> --}}
                    <i data-star="3.3"></i>

                    <div class="fav">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->proname }}" name="proname">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="pl-3 addToCart"><i class="fas fa-cart-arrow-down" aria-hidden="true"></i></button>

                        </form>
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <!-- end products -->
    <!--offers -->
    <div class="row g-0 offers">
        <div class="col-lg-6 col-md-6 col-sm-12 position-relative">
            <img class src={{ URL::asset('enduser/assets/img/shutterstock_262651886.jpg') }} alt="">
            <div class="details text-center position-absolute top-0 start-0 ">
                <h2> 70% OFF</h2>
                <h2>TAO Kinben NA</h2>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 position-relative">
            <img src={{ URL::asset('enduser/assets/img/shutterstock_309882410.jpg') }} alt="">
            <div class="detail text-center position-absolute top-0 start-0">
                <h2> Amr Chehara Kharba Na</h2>
                <h2><span>Chehara </span> Dia Kia No</h2>
            </div>
        </div>
    </div>
    <!-- end offers -->
    </div>
    <!-- end section featered items -->
    <!-- start section trending items -->
    <section class="trending">
        <!-- trending line -->
        <div class="featured">
            <p class="featured-line"><span>Trending Item</span></p>
        </div>
        <!-- end trending line  -->
        <div class="container product-items">

            <div class=" row row-cols-sm-2 row-cols-md-3 lg-4">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6-col-sm-12 ">
                        <div class="product-element">
                            <img src="{{ URL::asset('img/') }}/{{ $product->image }}" />
                            <span>{{ $product->price }}</span>
                            <div class="pro-icon text-center position-absolute top-0 start-0">
                                <i class="fa-solid fa-eye"></i>
                                <a href="{{ route('enduser.show', $product->id) }}" class="btn btn-dark">show</a>

                            </div>
                        </div>
                        <h5>{{ $product->proname }}</h5>
                        <p>{{ $product->desc }}</p>
                        <i data-star="3.3"></i>
                        <div class="fav">
                            <i class="fas fa-heart" aria-hidden="true"></i>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data"> 
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->proname }}" name="proname">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}" name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="pl-3 addToCart"><i class="fas fa-cart-arrow-down" aria-hidden="true"></i></button>

                            </form> 
                            <i class="fab fa-facebook" aria-hidden="true"></i>

                        </div>
                    </div>
                    <!-- load more images -->
                    <div class="col-lg-3 col-md-6-col-sm-12 show-more-image ">
                        <div class="product-element">

                            <img src="{{ URL::asset('img/') }}/{{ $product->image }}" />
                            <span>{{ $product->price }}</span>
                            <div class="pro-icon text-center position-absolute top-0 start-0">
                                <i class="fa-solid fa-eye"></i>
                                <a href="{{ route('enduser.show', $product->id) }}" class="btn btn-dark">show</a>

                            </div>
                        </div>
                        <h5>{{ $product->proname }}</h5>
                        <p>{{ $product->desc }}</p>
                        <i data-star="3.3"></i>
                        <div class="fav">
                            <i class="fas fa-heart" aria-hidden="true"></i>
                            <i class="fas fa-cart-arrow-down" aria-hidden="true"></i>
                            <i class="fab fa-facebook" aria-hidden="true"></i>

                        </div>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-show-more mt-4 "> Load more</button>
            <button class="btn btn-show-less mt-4 "> Load Less</button>

        </div>
    </section>
    <!-- review section -->
    
    <section class="review">
        <div class="overlay position-absolute top-0"></div>
        <!--  start caption -->
        
        <div class="caption text-center position-absolute top-50 start-50 translate-middle">
            <i class="fa-solid fa-eye"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias rem quidem ea hic unde, delectus
                aspernatur! Eveniet vitae earum fugit animi nam nesciunt quia esse accusamus. Nisi vel eos odit?</p>
            <img src={{ URL::asset('enduser/assets/img/newsletter.jpg') }} alt="">
            <h6>MD ShanLam</h6>
            <p class="ct">CCTEO</p>

        </div>
    </section>
    <!-- end caption -->
    <!-- start latest blog -->
    <section class="latest">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src={{ URL::asset('enduser/assets/img/newsletter2.jpg') }} class=" card-img-top "
                            alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">Some Headline Here</h5>
                            <p class="card-text ">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-outline-dark">Shop Now</button>

                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card h-100">
                        <img src={{ URL::asset('enduser/assets/img/latest3.jpg') }} class=" card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">Some Headline Here</h5>
                            <p class="card-text ">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-outline-dark">Shop Now</button>

                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card h-100 ">
                        <img src={{ URL::asset('enduser/assets/img/newsletter.jpg') }} class="card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">Some Headline Here</h5>
                            <p class="card-text ">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-outline-dark">Shop Now</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end latest blog -->
    <!-- section shop by brand -->
    <section class="shop">
        <div class="featured">

            <p class="featured-line"><span>Shop by brand</span></p>

        </div>
        <div class="brand-carousel section-padding owl-carousel">
            <div class="single-logo">
                <img src={{ URL::asset('enduser/assets/img/cbrand1.png') }} alt="">
            </div>
            <div class="single-logo">
                <img src={{ URL::asset('enduser/assets/img/cbrand2.png') }} alt="">
            </div>
            <div class="single-logo">
                <img src={{ URL::asset('enduser/assets/img/cbrand3.png') }} alt="">
            </div>
            <div class="single-logo">
                <img src={{ URL::asset('enduser/assets/img/cbrand4.png') }} alt="">
            </div>
            <div class="single-logo">
                <img src={{ URL::asset('enduser/assets/img/cnrand5.png') }} alt="">
            </div>
            <div class="single-logo">
                <img src={{ URL::asset('enduser/assets/img/cbrand6.png') }} alt="">
            </div>
        </div>

    </section>

    <!-- End shop by brand -->
@endsection
