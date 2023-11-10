@extends('master_layout')
@section('content')
   <!-- Header title -->
   <section class="header-title head-opacity" data-background="{{asset('images/banner/office.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class="mb15">Cloud SaaS</h1>
                <p class="h-light">Web hosting is the process of storing and maintaining a website on a server so that it can be accessed by users on the internet. </p>
            </div>
        </div>
    </div>
</section>
<!-- Header title end -->

<!--about service-->
<section class="r-bg-a sec-pad">
    <div class="container">
        <div class="ree">
            <div class="row">
                <div class="col-lg-6 vcenter">
                    <div class="cta-heading-2">
                        <h2 class="mb15">Simplify and streamline your processes with our <span class="ree-text rt40">SaaS</span></h2>
                        <p class="mb15">Cloud SaaS (Software as a Service) products are a type of software delivery model that allows users to access and use software applications and services over the internet, rather than installing them on their own computers or servers. These types of products are hosted and managed by the provider, making them easy for users to access and use without the need for extensive IT infrastructure or technical knowledge.</p>
                        <p>If you are considering using a cloud SaaS product, it is important to research and compare different options to find the one that best fits your business needs and budget. </p>

                    </div>
                </div>
                <div class="col-lg-6 vcenter">
                    <div class="ct-sol-img"> <img src="{{asset('images/cloud-saas-banner.jpg')}}" alt="web design" class="img-fluid"> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about service end-->


<!--service expertise-->
<section class="r-bg-x  sec-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="page-headings">
                    <h2>Gain a competitive edge with our innovative SaaS solution</h2>
                    <p class="mt15">making them easy for users to access and use without the need for extensive IT infrastructure</p>
                </div>
            </div>
        </div>

        <div class="portfolio-items mt60">
            <!-- portfolio row 1 -->
            <div class="row">
                <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/applicant-tracking"> <img src="{{asset('images/portfolio/ats.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 m-order1" data-aos="fade-up" data-aos-delay="600">
                    <div class="portfolio-detls pdr-dtls">
                        <p class="port-tags">Applicant Tracking System</p>
                        <a href="/applicant-tracking" class="port-title-main">Applicant Tracking System</a>
                        <p class="mb30">An applicant tracking system (ATS) is a software application that enables the electronic handling of recruitment needs. An ATS can be implemented or accessed online on an enterprise or small business level, depending on the needs of the company and there is also free and open source ATS software available. The ATS can be used to post job openings on a corporate website or job board, screen resumes, and create interview requests to potential candidates by email or text.</p>
                        <a href="/applicant-tracking" class="port-links ">View More <i class="fas fa-arrow-right fa-btn"></i></a>
                    </div>
                </div>
            </div>
            <!-- portfolio row 2 -->
            <div class="row">
                <div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-detls pdl-dtls mt20">
                        <p class="port-tags">HRMS Software</p>
                        <a href="/solutions/cloud-saas/hr-management" class="port-title-main">Human Resources Management System</a>
                        <p class="mb20">HRM software is a type of software that helps to automate the processes involved in managing a company’s human resources. This includes payroll, recruiting, training, employee benefits, time and attendance, performance management, and other administrative tasks.</p>
                        <p class="mb20">HRM software can also be used to track and analyze employee data, such as hours worked, job titles, and salary history. By automating these tasks, HRM software can save companies time and money, and help them better manage their workforce.</p>
                        <!-- <p class="mb30">Shared hosting is the most affordable option, where multiple websites are hosted on the same server and share the server's resources. VPS hosting is a step up from shared hosting, as it offers more resources and control over the server </p> -->
                        <a href="/solutions/cloud-saas/hr-management" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

                    </div>
                </div>
                <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/solutions/cloud-saas/hr-management"> <img src="{{asset('images/portfolio/hrms.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- portfolio row 3 -->
            <div class="row">
                <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/solutions/cloud-saas/hospital-management"> <img src="{{asset('images/portfolio/hospital-management.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="600">
                    <div class="portfolio-detls pdr-dtls">
                        <p class="port-tags">Hospital Management Software</p>
                        <a href="/solutions/cloud-saas/hospital-management" class="port-title-main">Hospital Management System</a>
                        <p class="mb20">Hospital management software is a type of software that is designed to help hospitals and other healthcare facilities manage their daily operations more efficiently. This software can be used to manage patient records, schedule appointments, track medical supplies, and much more. It can also help hospitals comply with industry regulations and standards, such as those set by HIPAA.</p>
                        <a href="/solutions/cloud-saas/hospital-management" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--service expertise end-->


<!--start cta-->
<section class="r-bg-a sec-pad">
    <div class="container">
        <div class="ree">
            <div class="row">
                <div class="col-lg-6 vcenter">
                    <div class="cta-heading">
                        <h2 class="mb15">Hire world-class <span class="ree-text rt40">developers</span> for your <span class="ree-text rt40">project</span> </h2>
                        <p>We have a dexterity team of designers & developers that works on clients projects excellently and delivers the project on timeline.</p>
                        <div class="mult-btns">
                            <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40">Contact Us<i class="fas fa-arrow-right fa-btn"></i></a>
                            <span class="or">or</span>
                            <a href="tel:+91 9861556688" class="mt40 call-us">Call Us +91 9861556688</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 vcenter text-center">
                    <div class="sol-img-png"> <img src="{{asset('images/cta/developers.svg')}}" alt="app" class="img-fluid"> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--start cta-->

<!--Industries-->
<section class="r-bg-x  sec-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <h2 class="mb15">Industries We Serve</h2>
                    <p>Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning template. </p>
                </div>
            </div>
        </div>

        <div class="row mt30">
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/house.svg')}}" alt="img">
                    <h6>Real estate</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/travel-case.svg')}}" alt="img">
                    <h6>Tour &amp; Travels</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/video-tutorials.svg')}}" alt="img">
                    <h6>Education</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/taxi.svg')}}" alt="img">
                    <h6>Transport</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/event.svg')}}" alt="img">
                    <h6>Event</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/smartphone.svg')}}" alt="img">
                    <h6>eCommerce</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/joystick.svg')}}" alt="img">
                    <h6>Game</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/healthcare.svg')}}" alt="img">
                    <h6>Healthcare</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/money-growth.svg')}}" alt="img">
                    <h6>Finance</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/baker.svg')}}" alt="img">
                    <h6>Restaurant</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/mobile-app.svg')}}" alt="img">
                    <h6>On-Demand</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="industry-workfor"><img src="{{asset('images/icons/groceries.svg')}}" alt="img">
                    <h6>Grocery</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Industries end-->

<!--start cta-->
<section class="sec-pad r-bg-a">
    <div class="container">
        <div class="ree">
            <div class="row">
                <div class="col-lg-6 vcenter">
                    <div class="cta-heading">
                        <span class="sub-heading mb15">Contact Us</span>
                        <h2>Have a <span class="ree-text rt40">project</span> in mind? Let's get to chat.</h2>
                        <a href="tel:+91 9861556688" class="ree-btn  ree-btn-grdt1  mt40 mr20"><i class="fas fa-phone-alt fb-bigon"></i> Contact </a>
                        <a href="https://wa.me/+919861556688" class="ree-btn  whatsapp-bg mt40 shadows"><i class="fab fa-whatsapp fb-bigon"></i> Whatsapp </a>

                    </div>
                </div>
                <div class="col-lg-6 vcenter text-center">
                    <div class="sol-img-png">
                        <img src="{{asset('images/cta/team-support.svg')}}" alt="working with client" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end cta-->
@endsection