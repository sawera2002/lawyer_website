@extends('front_end.front_layout.main')
@section('main-content')

<style>
    #t-cards {
        padding-top: 80px;
        padding-bottom: 80px;
        /* background-color: #345; */
    }

    /********************************/
    /*          Panel cards         */
    /********************************/
    .panel.panel-card {
        position: relative;
        height: 241px;
        border: none;
        overflow: hidden;
    }

    .panel.panel-card .panel-heading {
        position: relative;
        z-index: 2;
        height: 120px;
        border-bottom-color: #fff;
        overflow: hidden;

        -webkit-transition: height 600ms ease-in-out;
        transition: height 600ms ease-in-out;
    }

    .panel.panel-card .panel-heading img {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        width: 100%;

        -webkit-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);
    }

    .panel.panel-card .panel-heading button {
        position: absolute;
        top: 10px;
        right: 15px;
        z-index: 3;
    }

    .panel.panel-card .panel-figure {
        position: absolute;
        top: auto;
        left: 50%;
        z-index: 3;
        width: 70px;
        height: 70px;
        background-color: #fff;
        border-radius: 50%;
        opacity: 1;
        -webkit-box-shadow: 0 0 0 3px #fff;
        box-shadow: 0 0 0 3px #fff;

        -webkit-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);

        -webkit-transition: opacity 400ms ease-in-out;
        transition: opacity 400ms ease-in-out;
    }

    .panel.panel-card .panel-body {
        padding-top: 40px;
        padding-bottom: 20px;

        -webkit-transition: padding 400ms ease-in-out;
        transition: padding 400ms ease-in-out;
    }

    .panel.panel-card .panel-thumbnails {
        padding: 0 15px 20px;
    }

    .panel-thumbnails .thumbnail {
        width: 60px;
        max-width: 100%;
        margin: 0 auto;
        background-color: #fff;
    }


    .panel.panel-card:hover .panel-heading {
        height: 55px;

        -webkit-transition: height 400ms ease-in-out;
        transition: height 400ms ease-in-out;
    }

    .panel.panel-card:hover .panel-figure {
        opacity: 0;

        -webkit-transition: opacity 400ms ease-in-out;
        transition: opacity 400ms ease-in-out;
    }

    .panel.panel-card:hover .panel-body {
        padding-top: 20px;

        -webkit-transition: padding 400ms ease-in-out;
        transition: padding 400ms ease-in-out;
    }
</style>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
        <div class="wrapper">
          
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Business Case Studies</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href=""> Business Casess </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <section id="t-cards">
        <div class="container ">
            <div class="row">
            @foreach($basinfo as $bus)
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading">
                            <img src="/images/{{$bus->image}}" />
                        </div>
                        <div class="panel-figure">
                            <img class="img-responsive img-circle" src="img/portfolio-3.jpg" />
                        </div>
                        <div class="panel-body text-center">
                            <h4 class="panel-header"><a href="https://twitter.com/@SajjalBibi18166">{{$bus->name}}</a></h4>
                            <small>{{$bus->law}}</small>
                        </div>
                        <div class="panel-thumbnails">
                            <div class="row text-center">
                                <p class="text-center">{{$bus->paragraph}} </p>
                                
                                <a class="btn btn-dark btn-sm mx-auto " href="{{ url('/appoint') }}">get Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

               

            </div>
        </div>
    </section>


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