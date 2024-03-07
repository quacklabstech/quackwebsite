@extends('master_layout')
@section('content')
<!--page head-->
<section class="page-heading-sec r-bg-a pt85 pb120">
    <div class="container">
        <div class="row pt80 justify-content-center">
            <div class="col-lg-6">
                <div class="page-headings">
                    <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">India's top full stack development company</span>
                    <h1 data-aos="fade-up" data-aos-delay="400">Thrive Digitally with Full Stack <span class="ree-text rt40">Web & Mobile</span> Development</h1>
                    <p class="mt20 h-light" data-aos="fade-up" data-aos-delay="400">Embrace the power of full stack development to realize the full potential of your business</p>
                    <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-up" data-aos-delay="800">Let’s discuss <i class="fas fa-arrow-right fa-btn"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/fullstack-banner.png')}}" alt="web app development" class="img-fluid"></div>
            </div>
        </div>
    </div>
</section>
<!--page head end-->

<!--about service-->
<section class="r-bg-x sec-pad">
    <div class="container">
        <div class="ree">
            <div class="row">
                <div class="col-lg-12 vcenter">
                    <div class="cta-heading-2">
                        <h2 class="mb15">Accelerate your <span class="ree-text rt40">web and mobile app development</span> with full stack development services</h2>
                        <p class="mb20">Quacklabs Technologies has been helping businesses to fulfill their business needs by mobile app development, web development and other software development projects. Our full stack developers have over a decade of experience in building scalable solutions with front-end and back-end frameworks and database management.</p>

                        <ul class="ul-list mb30 mt20">
                            <li>Unparalleled web and app development solutions</li>
                            <li>Expertise to build feature-rich solutions</li>
                            <li>End-to-end solutions in front-end and back-end development</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--about service end-->


<!--service expertise-->
<section class="r-bg-a  sec-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="page-headings">
                    <h2>Our Full Stack Development Services</h2>
                    <p class="mt15">At Quacklabs, our full-stack development solutions involve all types of tools and frameworks, such as Node.js development,full stack, MongoDB, AngularJS development, React, jQuery, and others! Our full-stack web developers build robust web applications that help unleash the full potential of your business.</p>
                </div>
            </div>
        </div>

        {{-- <div class="row mt30">
            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/react.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">React</h3>
                        <p>A JavaScript library, React assists in creating top-notch user interfaces. React.js development is widely preferred, as it helps deliver excellent server and client-side rendering.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/angular.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">AngularJS</h3>
                        <p>AngularJS is popular because of the flexibility it brings to all types of web app development. You can develop a browser, as well as mobile and web-based apps, with AngularJS.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/node-js.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">Node.js</h3>
                        <p>Node.js is perhaps the best platform for quickly developing a network of scalable applications. With its cross-browser atmosphere, it is built to serve as a workhorse for developers.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/php.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">PHP</h3>
                        <p>With its simplified programming, PHP development is used to create dynamic web pages. Used for web development, it is a server-side scripting language that builds robust back-end systems.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/java.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">Java</h3>
                        <p>Java can operate on both a single server and multiple servers. It is great for all-round programming, and has far-reaching benefits when combined with a full stack development project.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/python.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">Python</h3>
                        <p class="mb-4">Polymer is a user-friendly JavaScript framework consisting of HTML elements that can be reused and expanded to incorporate a range of features into an application.</p>
                    </div>

                </div>
            </div>
        </div> --}}

        <div class="row mt30">
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="ree-card mt60 d-flex flex-column h-100">
                    <div class="ree-card-img"><img src="{{asset('images/react.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">React</h3>
                        <p>A JavaScript library, React assists in creating top-notch user interfaces. React.js development is widely preferred, as it helps deliver excellent server and client-side rendering.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="ree-card mt60 d-flex flex-column h-100">
                    <div class="ree-card-img"><img src="{{asset('images/angular.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">AngularJS</h3>
                        <p>AngularJS is popular because of the flexibility it brings to all types of web app development. You can develop a browser, as well as mobile and web-based apps, with AngularJS.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="ree-card mt60 d-flex flex-column h-100">
                    <div class="ree-card-img"><img src="{{asset('images/node-js.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">Node.js</h3>
                        <p>Node.js is perhaps the best platform for quickly developing a network of scalable applications. With its cross-browser atmosphere, it is built to serve as a workhorse for developers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="ree-card mt60 d-flex flex-column h-100">
                    <div class="ree-card-img"><img src="{{asset('images/php.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">PHP</h3>
                        <p>With its simplified programming, PHP development is used to create dynamic web pages. Used for web development, it is a server-side scripting language that builds robust back-end systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="ree-card mt60 d-flex flex-column h-100">
                    <div class="ree-card-img"><img src="{{asset('images/java.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">Java</h3>
                        <p>Java can operate on both a single server and multiple servers. It is great for all-round programming, and has far-reaching benefits when combined with a full stack development project.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="ree-card mt60 d-flex flex-column h-100">
                    <div class="ree-card-img"><img src="{{asset('images/python.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">Python</h3>
                        <p class="mb-4">Polymer is a user-friendly JavaScript framework consisting of HTML elements that can be reused and expanded to incorporate a range of features into an application.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--service expertise end-->


<!--start cta-->
<section class="r-bg-x sec-pad">
    <div class="container">
        <div class="ree">
            <div class="row">
                <div class="col-lg-6 vcenter">
                    <div class="cta-heading">
                        <h2 class="mb15">Hire world-class <span class="ree-text rt40">developers</span> for your <span class="ree-text rt40">project</span> </h2>
                        <p>We have a dexterity team of designers & developers that works on clients projects excellently and delivers the project on timeline.</p>
                        <div class="mult-btns">
                            <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40">contact us <i class="fas fa-arrow-right fa-btn"></i></a>
                            <span class="or">or</span>
                            <a href="tel:+91 9861556688" class="mt40 call-us">Call Us +91 9861556688</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 vcenter text-center">
                    <div class="sol-img-png"> <img src="{{asset('images/hire-expert.png')}}" alt="app" class="img-fluid"> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--start cta-->



<!---our work flow-->
<section class="r-bg-d  sec-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-headings text-center">
                    <h2 class="mb15">Why Full Stack Web Development?</h2>
                    <p>Websites were the first to stir the buzz of the internet, and they are here to stay for a very long time. Full Stack web application development tags along with a variety of advantages, from faster development time, to being considerably cheaper to develop, and that’s what makes them a top choice for many businesses.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt30">
            <div class="col-lg-4 col-md-4 col-sm-6 mt30">
                <div class="process-content ree-card">
                    <span class="setps hst-1">01</span>
                    <div class="process-block">
                        <div class="process-icon">
                            <img src="{{asset('images/icons/pencil.svg')}}" alt="service" class="icon70 mb20">
                        </div>
                        <h4>Huge platform</h4>
                        <p>The entire world can be your business playground, the types of users you want to target will be completely up to you.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mt30">
                <div class="process-content ree-card">
                    <span class="setps hst-2">02</span>
                    <div class="process-block ">
                        <div class="process-icon">
                            <img src="{{asset('images/icons/earth.png')}}" alt="service" class="icon70 mb20">
                        </div>
                        <h4>New world necessity</h4>
                        <p>Apart from being an online portfolio of your business, websites could be an engaging medium for all potential users.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mt30 ">
                <div class="process-content ree-card">
                    <span class="setps hst-3">03</span>
                    <div class="process-block">
                        <div class="process-icon">
                            <img src="{{asset('images/icons/grow.png')}}" alt="service" class="icon70 mb20">
                        </div>
                        <h4>High performance</h4>
                        <p>Full stack websites can truly outperform generic websites by a huge margin, especially if your niche demands so.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mt30">
                <div class="process-content ree-card">
                    <span class="setps hst-4">04</span>
                    <div class="process-block">
                        <div class="process-icon">
                            <img src="{{asset('images/icons/computer.svg')}}" alt="service" class="icon70 mb20">
                        </div>
                        <h4>Uniformity</h4>
                        <p>Full stack websites make more of a comprehensive solution, when compared to the websites created generically.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mt30">
                <div class="process-content ree-card">
                    <span class="setps hst-5">05</span>
                    <div class="process-block">
                        <div class="process-icon">
                            <img src="{{asset('images/icons/quality-check.svg')}}" alt="service" class="icon70 mb20">
                        </div>
                        <h4>User satisfaction</h4>
                        <p>Due to their smooth functioning, Full Stack websites have proven to be highly satisfying, for a majority of people.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 mt30">
                <div class="process-content ree-card">
                    <span class="setps hst-6">06</span>
                    <div class="process-block">
                        <div class="process-icon">
                            <img src="{{asset('images/icons/money-growth.svg')}}" alt="service" class="icon70 mb20">
                        </div>
                        <h4>Cost-effective</h4>
                        <p>Testing and maintenance are both way much cheaper, when it comes to websites that are developed the full stack way.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!---our work flow end-->


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