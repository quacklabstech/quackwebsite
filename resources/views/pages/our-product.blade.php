@extends('master_layout')
@section('content')

    <!-- Header title -->
    <section class="header-title head-opacity" data-background="{{asset('images/banner/office.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="mb15">Our Products</h1>
                    <p class="h-light">Experience the power of productivity with our software</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Header title end -->
    <!-- start  -->
    <section class="r-bg-a sec-pad">
        <div class="container">
            <div class="ree">
                <div class="row">
                    <div class="col-lg-6 vcenter">
                        <div class="cta-heading-2">
                            <h2 class="mb15">Innovative software solutions for modern <span class="ree-text rt40">businesses</span></h2>
                            <p class="mb15">Our software products are developed by a team of experienced professionals who are dedicated to creating intuitive, user-friendly solutions that are easy to use and tailored to meet the specific needs of your organization.</p>
                            <!-- <p>Whether you need a powerful operating system, productivity software, or custom-built solutions to automate your business processes, we have the expertise and resources to deliver the perfect solution for you.</p> -->

                        </div>
                    </div>
                    <div class="col-lg-6 vcenter">
                        <div class="ct-sol-img"> <img src="{{asset('images/product-banner.png')}}" alt="web design" class="img-fluid"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end  -->
    <!--portfolio items-->
    <section>
        <div class="sec-pad r-bg-x">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7  text-center">
                        <div class="page-headings">
                            <h2>Gain a competitive edge with our innovative SaaS solution</h2>
                            <p class="mt15">making them easy for users to access and use without the need for extensive IT infrastructure</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-7 m-mt30">
					<h4 class="mb15">Check our portfolio on other websites as well.</h4>
					<div class="port-ref-link">
						<a href="#"><img src="images/icons/dribbble.svg" alt="dribbble-logo"> <span>Dribbble</span> </a>
					</div>
					<div class="port-ref-link">
						<a href="#"><img src="images/icons/behance.svg" alt="dribbble-logo"> <span>Behance</span> </a>
					</div>
					<div class="port-ref-link">
						<a href="#"><img src="images/icons/deviantart.svg" alt="dribbble-logo"> <span>Deviantart</span>
						</a>
					</div>
					<div class="port-ref-link">
						<a href="#"><img src="images/icons/instagram.svg" alt="dribbble-logo"> <span>Instagram</span>
						</a>
					</div>
					<div class="port-ref-link">
						<a href="#"><img src="images/icons/artstations.svg" alt="dribbble-logo">
							<span>Artstations</span> </a>
					</div>
				</div> -->


                </div>

                <div class="row justify-content-center mt70">
                    <div class="col-lg-4 col-md-6  col-sm-6 mt30">
                        <div class="fwb-main-x fwb-a">
                            <div class="work-thumbnails">
                                <a href="/products/applicant-tracking-system" target="_blank"><img src="{{asset('images/portfolio/ats-banner.jpg')}}" alt="portfolio quacklabs" class="img-fluid"> </a>
                            </div>
                            <div class="work-details">
                                <p class="mb10">UX, UI And Development</p>
                                <h4><a href="/products/applicant-tracking-system" target="_blank"> Applicant Tracking System</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6  col-sm-6 mt30">
                        <div class="fwb-main-x fwb-a">
                            <div class="work-thumbnails">
                                <a href="#"><img src="{{asset('images/portfolio/portfolio-3.jpg')}}" alt="portfolio reevan" class="img-fluid"> </a>
                            </div>
                            <div class="work-details">
                                <p class="mb10">UX, UI And Development</p>
                                <h4><a href="#"> Applicant Tracking System</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6  col-sm-6 mt30">
                        <div class="fwb-main-x fwb-a">
                            <div class="work-thumbnails">
                                <a href="#"><img src="{{asset('images/portfolio/portfolio-3.jpg')}}" alt="portfolio reevan" class="img-fluid"> </a>
                            </div>
                            <div class="work-details">
                                <p class="mb10">UX, UI And Development</p>
                                <h4><a href="#"> Applicant Tracking System</a> </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio end-->

    <!--start cta-->
    <section class="r-bg-a sec-pad">
        <div class="container">
            <div class="ree">
                <div class="row">
                    <div class="col-lg-6 vcenter">
                        <div class="cta-heading">
                            <h2 class="mb15">Hire world-class <span class="ree-text rt40">Developers</span> for your
                                <span class="ree-text rt40">Project</span>
                            </h2>
                            <p>We have a dexterity team of designers & developers that works on clients projects
                                excellently and delivers the project on timeline.</p>
                            <a href="/contact-us
                            " class="ree-btn  ree-btn-grdt1 mw-80 mt40">Start Your Project <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 vcenter">
                        <div class="ct-sol-img">
                            <img src="{{asset('images/cta/developers.svg')}}" alt="app mockup" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start cta-->
@endsection