@extends('master_layout')
@section('content')
 <!--page head-->
 <section class="page-heading-sec r-bg-a pt85 pb120">
    <div class="container">
        <div class="row pt80 justify-content-center">
            <div class="col-lg-6">
                <div class="page-headings">
                    <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">India's top IT Consulting company</span>
                    <h1 data-aos="fade-up" data-aos-delay="400">
                        Governance, Risk and
                        <span class="ree-text rt40">Compliance Services</span>
                    </h1>
                    <p class="mt20 h-light" data-aos="fade-up" data-aos-delay="400">
                        Ensure uninterrupted access to data when the unavoidable happens
                    </p>
                    <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-up" data-aos-delay="800">Let’s discuss <i class="fas fa-arrow-right fa-btn"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/govt-banner.png')}}" alt="web app development" class="img-fluid"></div>
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
                        <h2 class="mb15">Business Continuity and <span class="ree-text rt40">Disaster Recovery</span> </h2>
                        <p class="mb20">

                            Our Disaster Recovery as a Service (DRaaS) uses a cloud WAN to link proxy recovery servers and replicas to a replication node at the production site. DRaaS works with firewalls, the local disk, rollback images and protected VMs to keep your data protected and accessible if disaster strikes.
                        </p>
                        <p class="mb20">Secure critical data and applications with our on-prem & cloud backup services and gain confidence in your data safety. We provide efficient, effective, and stress-free backups with best-in-class data backup services that ensure continuous business operation.</p>
                        <p class="mb20">Our DR strategy consulting and implementation aims to protect the critical data & IT infrastructure while ensuring faster recovery in the event of a disaster. We understand business needs and offer appropriate scalable disaster recovery solution. We offer data backup, 24/7 Monitoring and perform testing on DR plans to ensure reliability and readiness of the plan when a disaster occurs.</p>
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
                    <h2>
                        Strategic Business IT Planning
                    </h2>
                    <p class="mt15">Link your IT operations and initiatives to your business strategy</p>
                </div>
            </div>
        </div>

        <div class="row mt30">
            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/icons/cloud-service.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">
                            Replication Technologies
                        </h3>
                        <p class="mb-0">Our advanced asynchronous data replication technology ensures continuous availability and eliminate downtime. We help enterprises to maintain applications and data available and accessible through real-time replication of physical and virtual machines. <br><br><br>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/icons/office-building.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">
                            Enterprise Backup​</h3>
                        <p class="mb-0">SBA Info understands the importance of a robust, resilient, and tailored enterprise-wide backup solution. Our Enterprise Backup offering streamlines and simplifies the enterprise data protection in complex IT environment which consist of multiple platforms and applications.<br><br><br> </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/icons/segment.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">
                            Endpoint Backup​
                        </h3>
                        <p class="mb-0">

                            With growing remote workforces, rising threats of cyberattacks, and growing compliance demands, the risk to endpoints (laptop, desktop, mobile, etc.) has never been higher. SBA Info’s Endpoint Backup services offer comprehensive coverage from deletion and attack, protecting data and information stored across all the end points.

                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/icons/broken-link.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">
                            Cloud Backup​</h3>
                        <p>
                            We help you extend enterprise backup to the Cloud without increasing the management burden on your IT team. As a leader in backup and disaster recovery solutions, SBA Info advices cloud-based backup for public/multi/hybrid environments and help you to achieve operational efficiency and resiliency. Our solution eliminates the cost to maintain long term tape-based backups and enable consumption of low-cost public cloud storage. Our Cloud Backup offering enables enterprises to protect SaaS applications, including Microsoft Office 365, data center workloads and end-point devices.<br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="ree-card  mt60">
                    <div class="ree-card-img"><img src="{{asset('images/icons/bank.png')}}" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15">
                            Data Archival
                        </h3>
                        <p class="">

                            SBA Info’s Data Archival offering aims to preserve enterprise’s on-premises and/or cloud-based email records while fully comply with legal and regulatory requirements. Our email archiving can be consumed independently or as part your enterprise-wide disaster recovery strategy. Our enterprise-class email archiving services helps enterprises to efficiently store, secure, manage, and retrieve data from email systems such as Microsoft Exchange Online, Hosted Exchange, G Suite Gmail etc., Our email archiving offering ensures seamless integration with cloud (D2D2C) disk (D2D2D) and tape (D2D2T) technologies and offers the functionality to synchronize, back up and archive your email.
                        </p>
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
                        <h2 class="mb15">Hire world-class <span class="ree-text rt40">UI developers</span> for your <span class="ree-text rt40">project</span> </h2>
                        <p>We have a dexterity team of designers & developers that works on clients projects excellently and delivers the project on timeline.</p>
                        <div class="mult-btns">
                            <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40">Contact Us <i class="fas fa-arrow-right fa-btn"></i></a>
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


<!--Industries-->
<section class="r-bg-d sec-pad">
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