@extends('layout')
<?php
$reviews = App\Models\Reviews::latest()->get();
?>

<body class="sub_page">
    @section('content')
        <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Users reviews </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class="container">
            <div class="container">
                @auth
                    <form method="post" action="/review">
                        @csrf
                        <input class="form-control" id="exampleInputEmail1" hidden value="{{ Auth::user()->id }}"
                            name="user_id">

                        <input class="form-control" id="exampleInputEmail1" hidden value="{{ Auth::user()->name }}"
                            name="name">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Current user name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" value="{{ Auth::user()->name }}"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Comment</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                        </div>

                        <div class="form-group form-check">
                            <label class="rating-label"><strong>Rate us</strong><span style="color: red;">*</span>
                                <input class="rating" max="5"
                                    oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5"
                                    style="--stars:5;--value:0" type="range" name="rate">
                            </label>
                        </div>
                        <input type="submit" value="Submit" />
                    </form>
                @else
                    <form method="post" action="/review">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Current user name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" value="" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Comment</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" disabled></textarea>
                        </div>

                        <div class="form-group form-check">
                            <label class="rating-label"><strong>Rate us</strong><span style="color: red;">*</span>
                                <input class="rating rating--nojs" max="5" step="0.5" type="range" name="rate"
                                    disabled>
                            </label>
                        </div>
                        <input type="submit" value="Log in to submit a review" disabled />
                    </form>
                @endauth
            </div>
        </div>
        <hr>
        <div class="container">
            <h3>Previous reviews</h3><br>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    @foreach ($reviews as $review)
                    <div class="card">
                        <div class="card-body m-3">
                            <div class="row">
                                    <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                        <input class="rating" max="5"
                                            oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
                                            step="0.5" style="--stars:5;--value:{{$review->rate }}" type="range" name="rate"
                                            value="{{$review->rate }}" disabled>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-muted fw-light mb-4">
                                            {{$review->content}}
                                        </p>
                                        <p class="fw-bold lead mb-2"><strong>{{$review->name}}</strong></p>
                                        <p class="fw-bold text-muted mb-0">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        @endforeach
                        <br>
                </div>
            </div>
        </div>
    @endsection

</body>
