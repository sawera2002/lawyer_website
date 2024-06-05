
      
@extends('front_end.front_layout.main')
@section('main-content')
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Practices Areas</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Practices Areas</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Practices Areas</h2>
                    </div>
                    <div class="row">
                    @foreach($serv as $data)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3>{{$data->heading}}</h3>
                                <p>{{$data->paragraph}}</p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        @endforeach

                       
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-header">
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="row align-items-center feature-item">
                        <div class="col-5">
                            <div class="feature-icon">
                                <i class="fa fa-gavel"></i>
                            </div>
                        </div>
                        @foreach($feate as $data)
                        <div class="col-7">
                            <h3>{{$data->heading}}</h3>
                            <p>{{$data->paragraph}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="row align-items-center feature-item">
                        <div class="col-5">
                            <div class="feature-icon">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                        </div>
                        @foreach($feate as $data)
                        <div class="col-7">
                            <h3>{{$data->heading2}}</h3>
                            <p>{{$data->paragraph2}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="row align-items-center feature-item">
                        <div class="col-5">
                            <div class="feature-icon">
                                <i class="far fa-smile"></i>
                            </div>
                        </div>
                        @foreach($feate as $data)
                        <div class="col-7">
                            <h3>{{$data->heading3}}</h3>
                            <p>{{$data->paragraph3}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @foreach($feate as $data)
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src="/images/{{$data->image}}" alt="Feature">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
            <!-- Feature End -->


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