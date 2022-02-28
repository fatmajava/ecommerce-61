@extends('layouts.app')

@section('content')

<h1 class="text-center">Search results</h1>
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

@endsection