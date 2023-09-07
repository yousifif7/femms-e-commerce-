@extends('layout')
<?php
$products = App\Models\Products::latest()->get();
?>

<body class="sub_page">
    @section('content')
        <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Product Grid</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end inner page section -->
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
                                    <img src={{ asset('storage/' . $product->image) }} alt="">
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
                </div>
            </div>
        </section>
    @endsection
</body>
