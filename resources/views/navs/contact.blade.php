@extends('layout')

<body class="sub_page">
    @section('content')
        <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Contact us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page section -->
        <!-- why section -->
        <section class="why_section layout_padding">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="full">
                            <form method="post" action="/form/contact">
                                @csrf
                                <fieldset>
                                    <input class="input" type="text" placeholder="Enter your full name" name="username" />
                                    @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <input class="input" type="email" placeholder="Enter your email address" name="email" />
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <textarea class="input" placeholder="Enter your message" name="content" ></textarea>
                                    @error('content')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <input type="submit" value="Submit" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>
