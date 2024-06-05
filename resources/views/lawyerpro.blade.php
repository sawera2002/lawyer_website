@extends('front_end.front_layout.main')
@section('main-content')
<div class="wrapper">

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>LAWYER APPOINTMENT FORM</h2>
                </div>
                <div class="col-12">
                    <a href="{{ url('/dashboard') }}">Home</a>
                    <a href="">LAWYER APPOINTMENT FORM</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h2>LAWYER APPOINTMENT FORM</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-phone-alt"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>+012 345 67890</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-envelope"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form method="POST" action="{{ route('store') }}">
                            @csrf
                            <label class="col-sm-2 col-label-form " for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required>


                            <label class="col-sm-2 col-label-form " for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" required>

                            <label class="col-sm-2 col-label-form " for="date">LAW:</label>
                            <input type="text" name="law" id="law" class="form-control" required>

                            <label class="col-sm-2 col-label-form " for="time">DESCRIPTION:</label>
                            <input type="text" name="des" id="des" class="form-control" required>

                           
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button class="btn btn-outline-info text-center" type="submit">INSERT DATA</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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