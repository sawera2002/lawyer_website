@extends('front_end.front_layout.main')
@section('main-content')
        <div class="wrapper">
          
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Case Studies</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Case Studies</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Case Studies</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".first">Civil</li>
                                <li data-filter=".second">Criminal</li>
                                <li data-filter=".third">Business</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-1.jpg" alt="Portfolio Image">
                                <figure>
                                    <p>Crime</p>
                                    <a href="{{ url('/murdeer') }}">Murder Case</a>
                                    <span>01-Jan-2045</span>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                <figure>
                                    <p>Politics</p>
                                    <a href="{{ url('/Political') }}">Political Case</a>
                                    <span>01-Jan-2045</span>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-3.jpg" alt="Portfolio Image">
                                <figure>
                                    <p>Family</p>
                                    <a href="{{ url('/divorce') }}">Divorce Case</a>
                                    <span>01-Jan-2045</span>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-4.jpg" alt="Portfolio Image">
                                <figure>
                                    <p>Finance</p>
                                    <a href="{{ url('/Finance') }}">Money Laundering</a>
                                    <span>01-Jan-2045</span>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-5.jpg" alt="Portfolio Image">
                                <figure>
                                    <p>Business</p>
                                    <a href="{{ url('/Business') }}">Weber & Partners</a>
                                    <span>01-Jan-2045</span>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio-6.jpg" alt="Portfolio Image">
                                <figure>
                                    <p>Finance</p>
                                    <a href="{{ url('/Property') }}">Property Sharing Case</a>
                                    <span>01-Jan-2045</span>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="{{ url('/Property') }}">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Start -->


            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->


        @endsection