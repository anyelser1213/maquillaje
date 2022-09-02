<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Maquillaje" name="keywords">
        <meta content="Free Website Template" name="description">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/maquillaje.png') }}">

        <!---Por default---->
        
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('vendor/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/base/flaticon/font/flaticon.css') }}" rel="stylesheet"> 
        <link href="{{ asset('vendor/base/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/base/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/base/style.css') }}" rel="stylesheet">


        @section('enlacesCSSPrincipales')

        @show

        @section('enlacesCSSSecundarios')

        @show




    </head>

    <body>
        
        @section('menubar')
            
        <!----Incluimos el menubar--------->
            @include('menus.menubar', array('titulo'=>'Maquillaje'))
    
        @show



        


        @section('parteSuperiorBody')
        
        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Yoga Practice For Good Health</h1>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasell nec pretum mi. Curabi ornare velit non. Aliqua metus tortor auctor quis sem.
                            </p>
                            <div class="hero-btn">
                                <a class="btn" href="">Join Now</a>
                                <a class="btn" href="">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="{{ asset('img/base/hero.png') }}" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        @show

        @section('primeraParteInformacion')
        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('img/base/about.png') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>Welcome to Yooga</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        @show

        @section('segundaParteInformacion')
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>What we do</p>
                    <h2>Yoga For Health</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout"></i>
                            </div>
                            <h3>Heal emotions</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item active">
                            <div class="service-icon">
                                <i class="flaticon-workout-1"></i>
                            </div>
                            <h3>Body Refreshes</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout-2"></i>
                            </div>
                            <h3>Mind & Serenity</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout-3"></i>
                            </div>
                            <h3>Enjoy Your life</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout-4"></i>
                            </div>
                            <h3>Body & Spirituality</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-yoga-pose"></i>
                            </div>
                            <h3>Body & Mind</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        @show


        @section('terceraParteInformacion')
        <!-- Class Start -->
        <div class="class">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Our Classes</p>
                    <h2>Yoga Class Shedule</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="class-filter">
                            <li data-filter="*" class="filter-active">All Classes</li>
                            <li data-filter=".filter-1">Pilates Yoga</li>
                            <li data-filter=".filter-2">Hatha Yoga</li>
                            <li data-filter=".filter-3">Vinyasa yoga</li>
                        </ul>
                    </div>
                </div>
                <div class="row class-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/base/class-1.jpg') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="{{ asset('img/base/teacher-1.png') }}" alt="Image">
                                    <h3>Elise Moran</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Pilates Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/base/class-2.jpg') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="{{ asset('img/base/teacher-2.png') }}" alt="Image">
                                    <h3>Kate Glover</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Iyengar Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/base/class-3.jpg') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="{{ asset('img/base/teacher-3.png') }}" alt="Image">
                                    <h3>Elina Ekman</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Ashtanga yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/base/class-4.jpg') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="{{ asset('img/base/teacher-4.png') }}" alt="Image">
                                    <h3>Lilly Fry</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Hatha Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/base/class-5.jpg') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="{{ asset('img/base/teacher-5.png') }}" alt="Image">
                                    <h3>Olivia Yates</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Kundalini Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="1s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/base/class-6.jpg') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="{{ asset('img/base/teacher-6.png') }}" alt="Image">
                                    <h3>Millie Harper</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Vinyasa yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Class End -->
        @show


        @section('cuartaParteInformacion')
        <!-- Discount Start -->
        <div class="discount wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Awesome Discount</p>
                    <h2>Get <span>30%</span> Discount for all Classes</h2>
                </div>
                <div class="container discount-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. 
                    </p>
                    <a class="btn">Join Now</a>
                </div>
            </div>
        </div>
        <!-- Discount End -->
        @show
        
        
        @section('quintaParteInformacion')
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Yoga Package</p>
                    <h2>Yoga Pricing Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Basic</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>49<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-status">
                                    <span>Popular</span>
                                </div>
                                <div class="price-title">
                                    <h2>Standard</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>99<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Premium</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>149<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        @show
        

        @section('sextaParteInformacion')
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>Our Client Say!</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/base/testimonial-1.jpg') }}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/base/testimonial-2.jpg') }}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/base/testimonial-3.jpg') }}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/base/testimonial-4.jpg') }}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        @show


        @section('septimaParteInformacion')
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Yoga Trainer</p>
                    <h2>Expert Yoga Trainer</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/base/team-1.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Millie Harper</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/base/team-2.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Lilly Fry</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/base/team-3.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Elise Moran</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/base/team-4.jpg') }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Kate Glover</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        @show

        @section('octavaParteInformacion')        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Yoga Articles</h2>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/base/blog-1.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/base/blog-2.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/base/blog-3.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/base/blog-4.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/base/blog-5.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/base/blog-6.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        @show

        @section('novenaParteInformacion')
        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="index.html" class="footer-logo">Maquillaje</a>
                        <h3>Los cortijos</h3>
                        <div class="footer-menu">
                            <p>+2125447888</p>
                            <p>info@example.com</p>
                        </div>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Maquillaje</a>, Todos los derechos reservados</p>
                        </div>
                        <div class="col-md-6">
                            <p>Desarrollado por <a href="https://htmlcodex.com">Desarrollo VTV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        @show        

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('vendor/base/bootstrap4.4.1/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('vendor/base/bootstrap4.4.1/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/base/easing/easing.min.js') }}"></script>
        <script src="{{ asset('vendor/base/wow/wow.min.js') }}"></script>
        <script src="{{ asset('vendor/base/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/base/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/base/lightbox/js/lightbox.min.js') }}"></script>
        
        

        <!-- Template Javascript MAIN -->
        <script src="{{ asset('js/base/main.js') }}"></script>


        @section('enlacesJSPrincipales')

            
        @show

        @section('enlacesJSSecundarios')

        @show
    </body>
</html>
