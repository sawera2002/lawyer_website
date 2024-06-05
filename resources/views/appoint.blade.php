@extends('front_end.front_layout.main')
@section('main-content')
        <div class="wrapper">
      
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>APPOINTMENT FORM</h2>
                        </div>
                        <div class="col-12">
                            <a href="{{ url('/dashboard') }}">Home</a>
                            <a href="{{ url('/appoint') }}">APPOINTMENT FORM</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>APPOINTMENT FORM</h2>
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
                            <form method="POST" action="/appoint">
                                                @csrf
                                                <label class="col-sm-2 col-label-form " for="name">Name:</label>
                                                <input type="text" class="form-control" name="name" id="name" required>
                                                

                                                <label class="col-sm-2 col-label-form " for="email">Email:</label>
                                                <input type="email" name="email" class="form-control" id="email" required>
                                                
                                                <label class="col-sm-2 col-label-form " for="date">Date:</label>
                                                <input type="date" name="date" id="date" class="form-control" required>
                                                
                                                <label class="col-sm-2 col-label-form " for="time">Time:</label>
                                                <input type="time" name="time" id="time" class="form-control" required>
                                                
                                                <label class="col-sm-2 col-label-form " for="message">which law:</label>
                                                <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
                                                
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