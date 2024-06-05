@extends('front_end.front_layout.main')
@section('main-content')

<head>
    <style>
        iframe {
            height: 50vh;
            width: 200vh;
            margin-left: 20px;
            margin-right: 20px;
        }
    </style>
</head>
<div class="wrapper">

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
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
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" value="{{old('username')}}" class="form-control" placeholder="Your Name" required="required" />
                                <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Your Email" required="required" />
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" value="{{old('subject')}}" class="form-control" placeholder="Subject" required="required" />
                                <span class="text-danger">
                                    @error('subject')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="paragraph" value="{{old('paragraph')}}" placeholder="Message" required="required"></textarea>
                                <span class="text-danger">
                                    @error('paragraph')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div>
                                <button class="btn" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <div class="map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158858.18237072596!2d-0.10159865000003898!3d51.52864165000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436514341845" allowfullscreen></iframe>
    </div>
    <br>
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