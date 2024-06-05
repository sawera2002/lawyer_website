

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%
            }

            body {
                margin: 0
            }

            a {
                background-color: transparent
            }

            [hidden] {
                display: none
            }

            html {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                line-height: 1.5
            }

            *,
            :after,
            :before {
                box-sizing: border-box;
                border: 0 solid #e2e8f0
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            svg,
            video {
                display: block;
                vertical-align: middle
            }

            video {
                max-width: 100%;
                height: auto
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity))
            }

            .bg-gray-100 {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity))
            }

            .border-gray-200 {
                --tw-border-opacity: 1;
                border-color: rgb(229 231 235 / var(--tw-border-opacity))
            }

            .border-t {
                border-top-width: 1px
            }

            .flex {
                display: flex
            }

            .grid {
                display: grid
            }

            .hidden {
                display: none
            }

            .items-center {
                align-items: center
            }

            .justify-center {
                justify-content: center
            }

            .font-semibold {
                font-weight: 600
            }

            .h-5 {
                height: 1.25rem
            }

            .h-8 {
                height: 2rem
            }

            .h-16 {
                height: 4rem
            }

            .text-sm {
                font-size: .875rem
            }

            .text-lg {
                font-size: 1.125rem
            }

            .leading-7 {
                line-height: 1.75rem
            }

            .mx-auto {
                margin-left: auto;
                margin-right: auto
            }

            .ml-1 {
                margin-left: .25rem
            }

            .mt-2 {
                margin-top: .5rem
            }

            .mr-2 {
                margin-right: .5rem
            }

            .ml-2 {
                margin-left: .5rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .ml-4 {
                margin-left: 1rem
            }

            .mt-8 {
                margin-top: 2rem
            }

            .ml-12 {
                margin-left: 3rem
            }

            .-mt-px {
                margin-top: -1px
            }

            .max-w-6xl {
                max-width: 72rem
            }

            .min-h-screen {
                min-height: 100vh
            }

            .overflow-hidden {
                overflow: hidden
            }

            .p-6 {
                padding: 1.5rem
            }

            .py-4 {
                padding-top: 1rem;
                padding-bottom: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .pt-8 {
                padding-top: 2rem
            }

            .fixed {
                position: fixed
            }

            .relative {
                position: relative
            }

            .top-0 {
                top: 0
            }

            .right-0 {
                right: 0
            }

            .shadow {
                --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
                --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .text-center {
                text-align: center
            }

            .text-gray-200 {
                --tw-text-opacity: 1;
                color: rgb(229 231 235 / var(--tw-text-opacity))
            }

            .text-gray-300 {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity))
            }

            .text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }

            .text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity))
            }

            .text-gray-900 {
                --tw-text-opacity: 1;
                color: rgb(17 24 39 / var(--tw-text-opacity))
            }

            .underline {
                text-decoration: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .w-5 {
                width: 1.25rem
            }

            .w-8 {
                width: 2rem
            }

            .w-auto {
                width: auto
            }

            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr))
            }

            @media (min-width:640px) {
                .sm\:rounded-lg {
                    border-radius: .5rem
                }

                .sm\:block {
                    display: block
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-start {
                    justify-content: flex-start
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:h-20 {
                    height: 5rem
                }

                .sm\:ml-0 {
                    margin-left: 0
                }

                .sm\:px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem
                }

                .sm\:pt-0 {
                    padding-top: 0
                }

                .sm\:text-left {
                    text-align: left
                }

                .sm\:text-right {
                    text-align: right
                }
            }

            @media (min-width:768px) {
                .md\:border-t-0 {
                    border-top-width: 0
                }

                .md\:border-l {
                    border-left-width: 1px
                }

                .md\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }
            }

            @media (min-width:1024px) {
                .lg\:px-8 {
                    padding-left: 2rem;
                    padding-right: 2rem
                }
            }

            @media (prefers-color-scheme:dark) {
                .dark\:bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(31 41 55 / var(--tw-bg-opacity))
                }

                .dark\:bg-gray-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(17 24 39 / var(--tw-bg-opacity))
                }

                .dark\:border-gray-700 {
                    --tw-border-opacity: 1;
                    border-color: rgb(55 65 81 / var(--tw-border-opacity))
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity))
                }

                .dark\:text-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(107 114 128 / var(--tw-text-opacity))
                }
            }
        </style>


    </head>
    @extends('front_end.front_layout.main')
    @section('main-content')

    <body class="antialiased">

        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We fight for your justice</h1>
                        <p class="animated fadeInRight"> “A lawyer with a briefcase can steal more than a thousand men with guns..."</p>
                        <a class="btn animated fadeInUp" href="#">Get free consultation</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We prepared to oppose for you</h1>
                        <p class="animated fadeInRight">It is the trade of lawyers to question everything, yield nothing, and talk by the hour.</p>
                        <a class="btn animated fadeInUp" href="#">Get free consultation</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel-3.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                        <p class="animated fadeInRight">“Where the law meets justice, I stand as the bridge...”</p>
                        <a class="btn animated fadeInUp" href="#">Get free consultation</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->


        <!-- Top Feature Start-->
        <div class="feature-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-check-circle"></i>
                            <h3>Legal</h3>
                            <p>Govt Approved</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="fa fa-user-tie"></i>
                            <h3>Attorneys</h3>
                            <p>Expert Attorneys</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-thumbs-up"></i>
                            <h3>Success</h3>
                            <p>99.99% Case Won</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-handshake"></i>
                            <h3>Support</h3>
                            <p>Quick Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Feature End-->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    @foreach($userinfo as $about)
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="/images/{{$about->image}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header">
                            <h2>{{$about->name}}</h2>
                        </div>
                        <div class="about-text">
                            <p>{{$about->paragraph}}</p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <h2>Our Practices Areas</h2>
                </div>
                <div class="row">
                    @foreach($serv as $services)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-landmark"></i>
                            </div>
                            <h3>{{$services->heading}}</h3>
                            <p>{{$services->paragraph}}</p>
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
                            @foreach($feature as $data)
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
                            @foreach($feature as $data)
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
                            @foreach($feature as $data)
                            <div class="col-7">
                                <h3>{{$data->heading3}}</h3>
                                <p>{{$data->paragraph3}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @foreach($feature as $data)
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


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <h2>Meet Our Expert Attorneys</h2>
                </div>
                <div class="row">
                    @foreach($team as $data)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="/images/{{$data->image}}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{$data->name}}</h2>
                                <p>{{$data->paragraph}}</p>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- FAQs Start -->
        <div class="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="faqs-img">
                            <img src="img/faqs.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="section-header">
                            <h2>Have A Questions?</h2>
                        </div>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <span>1</span> What is the most interesting thing about being a lawyer?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        ‘The ability to communicate effectively is one of the top qualities of a lawyer, as it can help lawyers communicate well with the client and judge when you appear in court. It's also necessary to have excellent reasoning skills, good judgement and sound logical abilities to succeed.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        <span>2</span> Why did you choose to pursue a law career?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        ‘Being a lawyer has been my dream since I started school. The reason I chose law was that lawyers fight for justice and stand up for the oppressed within a courtroom, whether they do it voluntarily or for a living. Also, a career in law is very diverse. Lawyers can work in different places and have many specialisation options to choose from. For example, I can be a judge, a paralegal, a mediator or I can become a law consultant.'


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        <span>3</span> In case a judgement is not in your favour, how do you handle the situation?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        I usually accept the judgement and let my client know the reason the judgement did not favour us. But if the judgement is not satisfying, I usually move the case to the Court of Appeal and seek more clarification from the judges.'
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        <span>4</span> What is a commercial lawyer?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        A commercial lawyer offers legal advice to their clients for issues concerning their business. Their other duties may include drafting the company policy, offering legal advice on tax-related issues, drafting business contracts and representing the company in court.'
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                        <span>5</span> What do you consider your major strength in law?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        ‘My former supervisor and colleagues have always complimented me on being good at listening and my ability to work collaboratively on cases. I listen keenly and note clients' issues, then later analyse the issue and offer possible legal advice to clients. I also like to work in a team when solving a complex case.'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn" href="">Ask more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <h2>Review From Client</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                @foreach($casestudies as $testimonial)
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="/images/{{$testimonial->image}}" alt="">
                            </div>
                            <div class="col-9">
                                <h2>{{$testimonial->name}}</h2>
                                <p>{{$testimonial->profession}}</p>
                            </div>
                            <div class="col-12">
                                <p>{{$testimonial->data}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <h2>Latest From Blog</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    @foreach($blogpost as $items)
                    <div class="blog-item">
                        <img src="/images/{{$items->image}}" alt="Blog">
                        <h3>{{$items->name}}</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">{{$items->law}}</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>{{$items->data}} </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog End -->


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



        </div>



@endsection
</body>

</html>