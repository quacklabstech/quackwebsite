@extends('master_layout')
@section('content')

    <!-- Header title -->
    <section class="header-title head-opacity " data-background="{{asset('images/banner/career.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="mb15">Career</h2>
                    <p class="h-light">We offer a variety of career opportunities for professionals at all stages of their careers</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Header title end -->

    <!--page head-->
    <div class="port-head-sec  sec-pad r-bg-x">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-headings">
                        <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Career</span>
                        <h1 class="mb15" data-aos="fade-up" data-aos-delay="400">Find your place in the future at QuackLabs Technology</h1>
                        <p class="h-light mb15" data-aos="fade-up" data-aos-delay="600">We offer a variety of career opportunities for professionals at all stages of their careers, from internships and entry-level positions to leadership roles. Our team is diverse and dynamic, and we value creativity, innovation, and collaboration.</p>
                        <p class="h-light" data-aos="fade-up" data-aos-delay="600">At QuackLabs, we are committed to building a culture of excellence, and we are confident that you will find a rewarding and fulfilling career with us. We look forward to receiving your application and getting to know you better!</p>
                        <a href="#jobsection" class="port-links mt40" data-aos="fade-up" data-aos-delay="800">Join Our Team <i class="fas fa-arrow-right fa-btn"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/others/car-banner.jpg')}}" alt="interview" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
    <!--page head end-->
    
    <!--career benefits-->
    <section class="r-bg-a sec-pad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-headings">
                        <h2 class="mb15">We are hiring <span class="ree-text rt40">heroes!</span> Time to value your skills.</h2>
                        <p class="mt15">Experience a supportive and inclusive culture</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center mt30">
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/peace-of-mind.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>Peace of mind</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/healthcare.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>Private healthcare</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/presentation.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>Internal workshops</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/sunglasses.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>Additional accessories</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/paid-content.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>Books & paid content</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/office-table.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>World class infrastructure</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/group.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>Community Meetups</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                    <div class="process-content ree-card">
                        <div class="process-block">
                            <div class="process-icon">
                                <img src="{{asset('images/icons/consulting.svg')}}" alt="service" class="icon70 mb15">
                            </div>
                            <h4>Training and Mentorship</h4>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. </p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row justify-content-center mt30">
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/peace-of-mind.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>Peace of <br> mind</h4>
                         <p>In our encouraging and fulfilling work environment, find peace of mind. </p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/healthcare.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>Private healthcare</h4>
                         <p>Savor the advantages of private medical care for you and your loved ones.</p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/presentation.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>Internal workshops</h4>
                         <p>Take advantage of internal workshops to reach your full potential.</p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/sunglasses.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>Additional accessories</h4>
                         <p>Check out our assortment of matching accessories right now.</p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/paid-content.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>Books & paid content</h4>
                         <p>Discover more with our carefully chosen collection of paid content. </p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/office-table.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>World class infrastructure</h4>
                         <p>With our top-notch infrastructure solutions, enjoy excellence. </p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/group.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>Community Meetups</h4>
                         <p>Meet people who share your interests at our community gatherings. </p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt30">
                   <div class="process-content ree-card">
                      <div class="process-block">
                         <div class="process-icon">
                            <img src="{{asset('images/icons/consulting.svg')}}" alt="service" class="icon70 mb15">
                         </div>
                         <h4>Training and Mentorship</h4>
                         <p>Mentoring and training encourage development. <br><br></p>
                      </div>
                   </div>
                </div>
             </div>
        </div>
    </section>
    <!--career benefits end-->

    <!--agency office-->
    <section class="r-bg-x sec-pad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="page-headings">
                        <h2 class="mb15">Life at <span class="ree-text rt40">Quacklabs</span></h2>
                        <p class="mt15">At QuackLabs, work is fun! We delight all the obstacles, overcome them and celebrate our victory together</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt30">
                <div class="col-lg-5 col-md-5 mt30">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/career/Life-at-quack"> <img src="{{asset('./images/team/c1.jpg')}}" alt="portfolio" class="w-100"> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 mt30">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/career/Life-at-quack"> <img src="{{asset('./images/team/c2.jpg')}}" alt="portfolio" class="w-100"> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 mt30">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/career/Life-at-quack"> <img src="{{asset('./images/team/c3.jpg')}}" alt="portfolio" class="w-100"> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 mt30">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/career/Life-at-quack"> <img src="{{asset('./images/team/c4.jpg')}}" alt="portfolio" class="w-100"> </a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-4 mt30">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/career/Life-at-quack"> <img src="images/others/office-inner5.jpg" alt="portfolio" class="w-100"> </a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-4 mt30">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/career/Life-at-quack"> <img src="images/others/office-inner6.jpg" alt="portfolio" class="w-100"> </a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-4 mt30">
                    <div class="hovr-scale-main">
                        <div class="portfolio-flimg hovr-scale-base">
                            <a href="/career/Life-at-quack"> <img src="images/others/office-inner7.jpg" alt="portfolio" class="w-100"> </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!---agency office end-->

    <!--Interview Process-->
    <section class="r-bg-a sec-pad">
        <div class="container">
            <div class="ree">
                <div class="row">
                    <div class="col-lg-6 vcenter">
                        <div class="cta-heading">
                            <h2 class="mb15">Our Industry <span class="ree-text rt40">Consultant</span></h2>
                            <p class="mb15">As industry consultants, we have a wealth of knowledge and experience in a variety of industries. Our team is dedicated to providing high-quality consulting services to help businesses of all sizes improve their operations, increase efficiency, and achieve their goals.</p>
                            <p class="mb15">Our consultants have a deep understanding of their respective industries and are well-equipped to help you navigate the challenges and opportunities you may face. Whether you're looking to increase sales, streamline processes, or enter a new market, our team is here to help.</p>
                            <div class="mult-btns">
                                <a href="/career/industry-consultant" class="ree-btn  ree-btn-grdt1 mt40">View More <i class="fas fa-arrow-right fa-btn"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 vcenter text-center">
                        <div class="sol-img-png"> <img src="{{asset('images/community.webp')}}" alt="app" class="img-fluid"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---Interview Process end-->


    <!--Employee Speaks-->
    <section class="r-bg-x sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-review text-center">
                        <h2 class="mb50">Employee <span class="ree-text rt40">Speaks</span></h2>
                        <div class="testimonial-card-b owl-carousel mt30">
                            <div class="review-slider">
                                <!-- <h4 class="mb20">"Reevan build my startup business a great website that really helps current and	potential customers get a good feel for my company."</h4> -->
                                <p>I just want to say that thanks for everything. I just feel lucky to work with quacklabs. It is one of the best IT companies ever. I love the environment and my whole quacklabs team. "Accelerating, information age ". ❤️✌️✌️❤️</p>
                                <div class="reviewers mt30">
                                    <div class="reviewers-nam">
                                        <h4>Sarit Kumar Hota</h4>
                                        <p>Fullstack Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review-slider">
                                <!-- <h4 class="mb20">"Reevan build my startup business a great website that really helps current and potential customers get a good feel for my company."</h4> -->
                                <p>Very flexible working hours, Best team environment you can ever get, Very Cooperative Managers, Ample Growth Opportunities, A must for any learner, a great career startup, Good increments, Celebrate all events and festivals.</p>
                                <div class="reviewers mt30">
                                    <div class="reviewers-nam">
                                        <h4>Alok Kumar Gochhayat</h4>
                                        <p>UI-UX Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review-slider">
                                <!-- <h4 class="mb20">"Reevan build my startup business a great website that really helps current and potential customers get a good feel for my company."</h4> -->
                                <p>Its good organization, Company will provide all the benefits to employers and job securities.</p>
                                <div class="reviewers mt30">
                                    <div class="reviewers-nam">
                                        <h4>Aakash Kumar</h4>
                                        <p>Sr. Full-stack Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review-slider">
                                <!-- <h4 class="mb20">"Reevan build my startup business a great website that really helps current and potential customers get a good feel for my company."</h4> -->
                                <p>I am proud to be part of a company that values its employees and encourages continuous learning and personal growth.</p>
                                <div class="reviewers mt30">
                                    <div class="reviewers-nam">
                                        <h4>Saroj Kumar Swain</h4>
                                        <p>UI Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review-slider">
                                <p>Read More Words by our beloved Employees</p>
                                <div class="reviewers mt30">
                                    <div class="reviewers-nam">
                                        <h4><a href="">Read More Words</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clients-creative-pic mt30">
                            <div class="owl-dots" id="testimonials-avatar">
                                <button class="dot-c1 tcc1 owl-dot mt30"> <img alt="image" src="{{asset('images/team/sarit.png')}}"></button>
                                <button class="dot-c1 tcc2 owl-dot mt30"> <img alt="image" src="{{asset('images/team/alok.png')}}"></button>
                                <button class="dot-c1 tcc3 owl-dot active mt30"> <img alt="image" src="{{asset('images/team/akash.png')}}"></button>
                                <button class="dot-c1 tcc4 owl-dot mt30"> <img alt="image" src="{{asset('images/team/saroj.png')}}"></button>
                                <!-- <button class="dot-c1 tcc5 owl-dot mt30"> <img alt="image" src="images/team/dipti.png"></button> -->
                                <button class="dot-c1 tcc5 owl-dot mt30" id="quackReadMore"> <img alt="image" src="{{asset('images/team/view-more.png')}}"></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Employee Speaks-->

    <!--job opeaning-->
    <section class="home-partners-block r-bg-a sec-pad" id="jobsection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="sec-heading text-center">
                        <h2 class="mb15">We're <span class="ree-text rt40">Hiring!</span></h2>
                        <p>Join our team and make a difference</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt30">

                <div class="col-lg-4 mt30">
                    <div class="job-detail ree-card">
                        <h4>Wordpress Develoer</h4>
                        <div class="job-info w-100 mt30">
                            <div class="career-detail">
                                <p>Required Experience</p>
                                <p>3 to 6 years</p>
                            </div>
                            <div class="career-detail">
                                <p>Number of Position</p>
                                <p>2</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Location</p>
                                <p>Bhubaneswar, India</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Type</p>
                                <p>Remote</p>
                            </div>
                        </div>
                        <div class="job-titl mt40">
                            <p>2 days Ago</p>
                            <a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt2">Apply Now <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt30">
                    <div class="job-detail ree-card">
                        <h4>SEO Expert</h4>
                        <div class="job-info w-100 mt30">
                            <div class="career-detail">
                                <p>Required Experience</p>
                                <p>3 to 6 years</p>
                            </div>
                            <div class="career-detail">
                                <p>Number of Position</p>
                                <p>2</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Location</p>
                                <p>Bhubaneswar, India</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Type</p>
                                <p>Remote</p>
                            </div>
                        </div>
                        <div class="job-titl mt40">
                            <p>3 days Ago</p>
                            <a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt2">Apply Now <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt30">
                    <div class="job-detail ree-card">
                        <h4>Business Analyst</h4>
                        <div class="job-info w-100 mt30">
                            <div class="career-detail">
                                <p>Required Experience</p>
                                <p>3 to 6 years</p>
                            </div>
                            <div class="career-detail">
                                <p>Number of Position</p>
                                <p>2</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Location</p>
                                <p>Bhubaneswar, India</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Type</p>
                                <p>Full Time</p>
                            </div>
                        </div>
                        <div class="job-titl mt40">
                            <p>25 days Ago</p>
                            <a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt2">Apply Now <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 mt30">
                    <div class="job-detail ree-card">
                        <h4>Web Designer</h4>
                        <div class="job-info w-100 mt30">
                            <div class="career-detail">
                                <p>Required Experience</p>
                                <p>3 to 6 years</p>
                            </div>
                            <div class="career-detail">
                                <p>Number of Position</p>
                                <p>2</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Location</p>
                                <p>Bhubaneswar, India</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Type</p>
                                <p>Full Time</p>
                            </div>
                        </div>
                        <div class="job-titl mt40">
                            <p>50 days Ago</p>
                            <a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt2">Apply Now <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt30">
                    <div class="job-detail ree-card">
                        <h4>IOS Developer</h4>
                        <div class="job-info w-100 mt30">
                            <div class="career-detail">
                                <p>Required Experience</p>
                                <p>3 to 6 years</p>
                            </div>
                            <div class="career-detail">
                                <p>Number of Position</p>
                                <p>2</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Location</p>
                                <p>Bhubaneswar, India</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Type</p>
                                <p>Full Time</p>
                            </div>
                        </div>
                        <div class="job-titl mt40">
                            <p>51 days Ago</p>
                            <a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt2">Apply Now <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt30">
                    <div class="job-detail ree-card">
                        <h4>View More Jobs</h4>
                        <div class="job-info w-100 mt30">
                            <div class="career-detail">
                                <p>Required Experience</p>
                                <p>*****</p>
                            </div>
                            <div class="career-detail">
                                <p>Number of Position</p>
                                <p>**</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Location</p>
                                <p>**********</p>
                            </div>
                            <div class="career-detail">
                                <p>Job Type</p>
                                <p>*****</p>
                            </div>
                        </div>
                        <div class="job-titl mt40">
                            <p>* days Ago</p>
                            <a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt2">View More Jobs <i class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--job opeaning end-->
@endsection