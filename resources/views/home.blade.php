@extends('layouts.base2')

@section('titulo','Maquillaje | index')




@section('parteSuperiorBody')
        
        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Las chicas más felices son las más bellas</h1>
                            <p>
                                Autor - Audrey Hepburn 
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

@endsection



@section('primeraParteInformacion')


        

@endsection


@section('segundaParteInformacion')
        

@endsection

@section('terceraParteInformacion')
        

@endsection

@section('cuartaParteInformacion')
        

@endsection

@section('quintaParteInformacion')
        

@endsection

@section('sextaParteInformacion')
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Actuales</p>
                    <h2>Maquilladores</h2>
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

@endsection

@section('septimaParteInformacion')


@endsection

@section('octavaParteInformacion')

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Productos</p>
            <h2>Articulos y cosmeticos</h2>
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

@endsection

@section('novenaParteInformacion')


@endsection