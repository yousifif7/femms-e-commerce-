@extends('layout')

<body class="sub_page">
    @section('content')
            <section class="inner_page_head">
                <div class="container_fuild">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <h3>About us </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="heading_container heading_center">
                <h2>
                    Our <span>Team</span>
                </h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="/team/team1.jpg" alt="Jane" style="width:100%">
                            <div class="container">
                                <h2>Jane Doe</h2>
                                <p class="title">CEO & Founder</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>jane@example.com</p>
                                <p><button class="confirmbtn w-100">Contact</button></p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="/team/team2.jpg" alt="Mike" style="width:100%">
                            <div class="container">
                                <h2>Mike Ross</h2>
                                <p class="title">General Manager</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>mike@example.com</p>
                                <p><button class="confirmbtn w-100">Contact</button></p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="/team/team3.jpg" alt="John" style="width:100%">
                            <div class="container">
                                <h2>John Doe</h2>
                                <p class="title">Designer</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>john@example.com</p>
                                <p><button class="confirmbtn w-100">Contact</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Values</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col">
                        <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                        <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div><hr>
            @include('navs.whysection')


            <!-- Container (Services Section) -->
        @endsection
    </body>
