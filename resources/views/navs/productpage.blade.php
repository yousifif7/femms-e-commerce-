@extends('layout')

<body class="sub_page">
    @section('content')
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        {{-- <img class="card-img-top mb-5 mb-md-0" src="{{ asset('images/arrival-bg.jpg') }}"/> --}}
                        <img class="card-img-top mb-5 mb-md-0" src="{{asset('storage/'.$product->image)}}" height="450px">
                    </div>
                    <div class="col-md-6">
                        <div class="small mb-1">Product</div>
                        <h3 class="display-5 fw-bolder">{{ $product->name }}</h4>
                            <div class="fs-5 mb-5">
                                <span><del><?php
                                $deletedPrice = $product->price * 0.2 + $product->price; ?>
                                        {{ $deletedPrice }}</del></span>
                                <span class="text-danger"> <strong>{{ $product->price }}$</strong></span> <br>
                                <label class="text-primary"><b>20% OFF</b></label>
                            </div>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at
                                dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius
                                blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        @auth    
                            <div class="d-flex">
                                <form method="post" action="/cart/product">
                                    @csrf
                                    <input name="user_id" hidden value="{{Auth::user()->id}}">
                                    <input name="product_id" hidden value="{{$product->id}}">
                                    <input name="price" hidden value="{{$product->price}}">
                                    <div class="form-group">
                                        <input class="text-center me-3" id="inputQuantity"
                                            value="1" style="max-width: 3rem" name="quantity" />
                                        <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                            <i class="bi-cart-fill me-1"></i>
                                            Add to cart
                                        </button>
                                    </div>
                                </form>
                            </div>
                        @else    
                        @endauth    
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>
