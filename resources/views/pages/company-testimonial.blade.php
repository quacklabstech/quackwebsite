@extends('master_layout')
@section('content')
    <!-- Header title -->
    <section class="header-title head-opacity" data-background="{{asset('images/banner/testimonial.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="mb15">Testimonials</h1>
                    <p class="h-light">We add value to our customer because
                        we always value them.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Header title end -->

    <!--page head-->
    <section class="page-heading-sec about-pag-head sec-pad">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="page-heading mr25">
                        <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">What Our Clients Say?</span>
                        <h2 data-aos="fade-up" data-aos-delay="400">Clients <span class="ree-text rt45">Feedback</span></h2>
                        <p class="mt30" data-aos="fade-up" data-aos-delay="600">At Quacklabs, the employees are always motivated to go beyond their usual tasks and work, to embrace newer skills, and out-perform themselves in multiple arenas. Below are some of employees speaking on how working with the company has done them good.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sol-img m-mt30">
                        <img src="{{asset('images/testimonial-banner.png')}}" alt="quacklabs office" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--page head end-->

    <!--start company info-->
    <section class="r-bg-a sec-pad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center mb-60">
                    <div class="page-headings">
                        <h2>What Our Clients Say?</h2>
                        <p class="mt15">Preparing for your success
                            trusted source in IT services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-25">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="testivard-head">
                            <div class="test-user-name">
                                <div class="testi-user-img">
                                    <img src="{{asset('images/testi-author-1.jpg')}}" alt="img">
                                </div>
                                <div class="testi-user-info">
                                    <p>Kalyani Sahoo</p>
                                    <small>Founder of Transtrack</small>
                                </div>
                            </div>
                            <div class="testi-user-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testi-body">
                            <p style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-25">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="testivard-head">
                            <div class="test-user-name">
                                <div class="testi-user-img">
                                    <img src="{{asset('images/testi-author-1.jpg')}}" alt="img">
                                </div>
                                <div class="testi-user-info">
                                    <p>Biswa Ranjan </p>
                                    <small> Managing Director of MRPL</small>
                                </div>
                            </div>
                            <div class="testi-user-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testi-body">
                            <p style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-25">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="testivard-head">
                            <div class="test-user-name">
                                <div class="testi-user-img">
                                    <img src="{{asset('images/testi-author-1.jpg')}}" alt="img">
                                </div>
                                <div class="testi-user-info">
                                    <p>Mohit Agarwal</p>
                                    <small>Founder of Mangalam Tanks</small>
                                </div>
                            </div>
                            <div class="testi-user-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testi-body">
                            <p style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-25">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="testivard-head">
                            <div class="test-user-name">
                                <div class="testi-user-img">
                                    <img src="{{asset('images/testi-author-1.jpg')}}" alt="img">
                                </div>
                                <div class="testi-user-info">
                                    <p>Kalyani Sahoo</p>
                                    <small>Founder of Transtrack</small>
                                </div>
                            </div>
                            <div class="testi-user-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testi-body">
                            <p style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-25">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="testivard-head">
                            <div class="test-user-name">
                                <div class="testi-user-img">
                                    <img src="{{asset('images/testi-author-1.jpg')}}" alt="img">
                                </div>
                                <div class="testi-user-info">
                                    <p>Biswa Ranjan </p>
                                    <small> Managing Director of MRPL</small>
                                </div>
                            </div>
                            <div class="testi-user-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testi-body">
                            <p style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-25">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="testivard-head">
                            <div class="test-user-name">
                                <div class="testi-user-img">
                                    <img src="{{asset('images/testi-author-1.jpg')}}" alt="img">
                                </div>
                                <div class="testi-user-info">
                                    <p>Mohit Agarwal</p>
                                    <small>Founder of Mangalam Tanks</small>
                                </div>
                            </div>
                            <div class="testi-user-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testi-body">
                            <p style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--end company info-->
@endsection