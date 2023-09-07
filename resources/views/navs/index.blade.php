@extends('layout')
<?php
$products = App\Models\Products::all()->take(6);
$reviews = App\Models\Reviews::all()->take(2);
?>
@section('contentindex')
    <!-- slider section -->
    <section class="slider_section ">
        <div class="slider_bg_box">
            <img src="images/slider-bg.jpg" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic?
                                        Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel
                                        architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="/products" class="btn1">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div> --}}
        </div>
    </section>
    <!-- why section -->
    @include('navs.whysection')
    <!-- end why section -->
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="/product/{{ $product->id }}" class="option1">
                                        {{ $product->name }}
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                {{-- <img src="images/p1.png" alt=""> --}}
                                <img src={{ asset('storage/' . $product->image) }}>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $product->name }}
                                </h5>
                                <h6>
                                    {{ $product->price }}$
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><br>
            <div class="text-center">
                <a href="/products" class="confirmbtn">
                    View All products
                </a><br><br>
            </div>
    </section>
    <!-- end product section -->
    <!-- client section -->

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="heading_container heading_center">
                <h2>
                    Customer's Testimonial
                </h2>
            </div>
            <div class="col-md-10">
                @foreach ($reviews as $review)
                    <div class="card">
                        <div class="card-body m-3">
                            <div class="row">
                                <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                    <input class="rating" max="5"
                                        oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5"
                                        style="--stars:5;--value:{{ $review->rate }}" type="range" name="rate"
                                        value="{{ $review->rate }}" disabled>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-muted fw-light mb-4">
                                        {{ $review->content }}
                                    </p>
                                    <p class="fw-bold lead mb-2"><strong>{{ $review->name }}</strong></p>
                                    <p class="fw-bold text-muted mb-0">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                @endforeach
                <br>
                <div class="btn-box text-center">
                    <a href="/reviews" class="confirmbtn">
                        View All Reviews
                    </a><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
@endsection
