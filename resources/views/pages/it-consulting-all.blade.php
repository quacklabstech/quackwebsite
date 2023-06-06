@extends('master_layout')
@section('content')

    <!-- Header title -->
    <section class="header-title head-opacity" data-background="{{asset('images/banner/office.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="mb15">IT Consulting</h1>
                    <p class="h-light">Innovative IT strategies for modern businesses</p>
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
                            <h2 class="mb30">Maximizing efficiency through innovative <span class="ree-text rt40">technology</span> consulting</h2>
                            <p class="mb15">IT consulting is a professional service that provides advice and expertise to organizations on how to use information technology (IT) effectively and efficiently to achieve their business goals. IT consultants work with clients to assess their IT needs, develop strategies to meet those needs, and implement solutions that may include software, hardware, and other technologies.</p>
                            <!-- <p>IT consultants may specialize in specific areas, such as data management, cybersecurity, cloud computing, or software development. They may also have general knowledge and skills in a variety of IT areas, which allows them to provide a broad range of services to their clients. </p> -->

                        </div>
                    </div>
                    <div class="col-lg-6 vcenter">
                        <div class="ct-sol-img"> <img src="{{asset('images/it-consulting-banner.png')}}" alt="web design" class="img-fluid"> </div>
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
                        <h2>Technology solutions for your business</h2>
                        <p class="mt15">Analyzing an organization's IT systems and infrastructure to identify areas for improvement</p>
                    </div>
                </div>
            </div>

            <div class="portfolio-items mt60">
                <!-- portfolio row 1 -->
                <div class="row">
                    <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
                        <div class="hovr-scale-main">
                            <div class="portfolio-flimg hovr-scale-base">
                                <a href="/solutions/it-consulting/offshore-it-consulting"> <img src="{{asset('images/portfolio/offshore-it.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 m-order1" data-aos="fade-up" data-aos-delay="600">
                        <div class="portfolio-detls pdr-dtls">
                            <p class="port-tags">Offshore IT Consulting</p>
                            <a href="/solutions/it-consulting/offshore-it-consulting" class="port-title-main">Offshore IT Consulting</a>
                            <p class="mb30">Offshore IT Consulting is a type of consulting service that involves providing advice and services to companies that operate in a different country than where the consultant is based. This type of consulting service can range from helping a company set up its IT infrastructure in a foreign country to providing advice on how to optimize its operations in that country. The emphasis is on providing an outside perspective to help the company identify areas of improvement and ensure that the IT infrastructure is up to date and secure.</p>
                            <a href="/solutions/it-consulting/offshore-it-consulting" class="port-links ">View More <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>
                <!-- portfolio row 2 -->
                <div class="row">
                    <div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-detls pdl-dtls mt20">
                            <p class="port-tags">Enterprise IT Consulting</p>
                            <a href="/solutions/it-consulting/enterprise-it-consulting" class="port-title-main">Enterprise IT Consulting</a>
                            <p class="mb20">Enterprise Consulting involves assisting in the growth of companies by proposing optimized business strategies and or processes specialized to the needs of the organization at hand. Successful consulting allows organizations to run like a well-oiled machine by highlighting and improving any previously unnoticed organizational shortcomings or risks. Our clients get the guidance needed to boost efficiency, improve their processes and increase profits. This form of consulting may sometimes include the deployment of software technology solutions, but this is not always the case. Each consultant has there own methodology.</p>
                            <!-- <p class="mb20">HRM software can also be used to track and analyze employee data, such as hours worked, job titles, and salary history. By automating these tasks, HRM software can save companies time and money, and help them better manage their workforce.</p> -->
                            <!-- <p class="mb30">Shared hosting is the most affordable option, where multiple websites are hosted on the same server and share the server's resources. VPS hosting is a step up from shared hosting, as it offers more resources and control over the server </p> -->
                            <a href="/solutions/it-consulting/enterprise-it-consulting" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
                        <div class="hovr-scale-main">
                            <div class="portfolio-flimg hovr-scale-base">
                                <a href="/solutions/it-consulting/enterprise-it-consulting"> <img src="{{asset('images/portfolio/enterprise-it.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio row 3 -->
                <div class="row">
                    <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
                        <div class="hovr-scale-main">
                            <div class="portfolio-flimg hovr-scale-base">
                                <a href="/solutions/it-consulting/it-assessments"> <img src="{{asset('images/portfolio/assignment-it.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="600">
                        <div class="portfolio-detls pdr-dtls">
                            <p class="port-tags">IT Assessments</p>
                            <a href="/solutions/it-consulting/it-assessments" class="port-title-main">IT Assessments</a>
                            <p class="mb20">IT assessment services involve evaluating the information technology infrastructure of an organization. This includes evaluating existing IT systems and processes and recommending changes to improve efficiency and effectiveness. The assessment typically includes an analysis of the IT environment and security posture, an assessment of the network architecture, and an evaluation of the IT strategy and operations. The assessment can also include a review of the organization's compliance with industry standards and regulations.</p>
                            <a href="/solutions/it-consulting/it-assessments" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

                        </div>
                    </div>
                </div>
                <!-- portfolio row 2 -->
                <div class="row">
                    <div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-detls pdl-dtls mt20">
                            <p class="port-tags">IT Strategy & Planning</p>
                            <a href="/solutions/it-consulting/it-strategy-and-planning" class="port-title-main">IT Strategy & Planning</a>
                            <p class="mb20">Strategic IT planning is an essential part of your business forecasting strategy. We can help you look at your company’s existing practices while helping you to plan for the future with the ultimate aim of helping you to ensure that your technology works to support your operations.</p>
                            <p class="mb20">With an IT strategic plan in place, your business will be able to reconcile your technology operations & IT change process management with your business goals to ensure that they are in sync. We’ll help you to accomplish this in several ways with these components of your strategic plan</p>
                            <a href="/solutions/it-consulting/it-strategy-and-planning" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
                        <div class="hovr-scale-main">
                            <div class="portfolio-flimg hovr-scale-base">
                                <a href="/solutions/it-consulting/it-strategy-and-planning"> <img src="{{asset('images/portfolio/planing-it.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio row 3 -->
                <div class="row">
                    <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
                        <div class="hovr-scale-main">
                            <div class="portfolio-flimg hovr-scale-base">
                                <a href="/solutions/it-consulting/business-continuity-and-disaster-recovery"> <img src="{{asset('images/portfolio/disaster-recovery.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="600">
                        <div class="portfolio-detls pdr-dtls">
                            <p class="port-tags">Business Continuity & Disaster Recovery</p>
                            <a href="/solutions/it-consulting/business-continuity-and-disaster-recovery" class="port-title-main">Business Continuity & Disaster Recovery</a>
                            <p class="mb20">Our Disaster Recovery as a Service (DRaaS) uses a cloud WAN to link proxy recovery servers and replicas to a replication node at the production site. DRaaS works with firewalls, the local disk, rollback images and protected VMs to keep your data protected and accessible if disaster strikes. </p>
                            <p class="mb20">Secure critical data and applications with our on-prem & cloud backup services and gain confidence in your data safety.</p>
                            <a href="/solutions/it-consulting/business-continuity-and-disaster-recovery" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

                        </div>
                    </div>
                </div>
                <!-- portfolio row 2 -->
                <div class="row">
                    <div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-detls pdl-dtls mt20">
                            <p class="port-tags">Governance, Risk Compliances</p>
                            <a href="/solutions/it-consulting/governance-risk-compliances" class="port-title-main">Governance , Risk Compliances</a>
                            <p class="mb20">Strategic IT planning is an essential part of your business forecasting strategy. We can help you look at your company’s existing practices while helping you to plan for the future with the ultimate aim of helping you to ensure that your technology works to support your operations.</p>
                            <p class="mb20">With an IT strategic plan in place, your business will be able to reconcile your technology operations & IT change process management with your business goals to ensure that they are in sync. We’ll help you to accomplish this in several ways with these components of your strategic plan</p>
                            <a href="/solutions/it-consulting/governance-risk-compliances" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
                        <div class="hovr-scale-main">
                            <div class="portfolio-flimg hovr-scale-base">
                                <a href="/solutions/it-consulting/governance-risk-compliances"> <img src="{{asset('images/portfolio/risk-banner.jpg')}}" alt="portfolio" class="img-fluid"> </a>
                            </div>
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
                                <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40">Contact Us <i class="fas fa-arrow-right fa-btn"></i></a>
                                <span class="or quack-or">or</span>
                                <a href="tel:+91 9861556688" class="mt40 call-us">Call Us +91 9861556688</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 vcenter text-center">
                        <div class="sol-img-png"><img src="{{asset('images/cta/developers.svg')}}" alt="app" class="img-fluid"> </div>
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
                <div class="col-lg-3 col-sm-6  col-6">
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
                    <div class="col-lg-6 vcenter  text-center">
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