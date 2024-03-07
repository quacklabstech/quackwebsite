@extends('master_layout')
@section('content')
    <!--page head-->
    <section class="page-heading-sec r-bg-a pt85 pb120">
        <div class="container">
            <div class="row pt80 justify-content-center">
                <div class="col-lg-6">
                    <div class="page-headings">
                        <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">India's top Internet Marketing company</span>
                        <h1 data-aos="fade-up" data-aos-delay="400">

                            CIK and
                            <span class="ree-text rt40">Business Assets</span>

                            <p class="mt20 h-light" data-aos="fade-up" data-aos-delay="400">A business asset is an item of value owned by a company. Business assets span many categories. They can be physical, tangible goods, such as vehicles, ...</p>
                            <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-up" data-aos-delay="800">Let’s discuss <i class="fas fa-arrow-right fa-btn"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/clk-banner.png')}}" alt="web app development" class="img-fluid"></div>
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
                            <h2 class="mb15">What is a <span class="ree-text rt40">Business</span> Asset?</h2>
                            <p class="mb20">A business asset is any tangible or intangible resource that is owned or controlled by a business and has economic value. These assets can be used to generate revenue, reduce costs, or improve operations. Some examples of business assets include buildings, machinery, equipment, vehicles, inventory, patents, trademarks, copyrights, and customer relationships.
                            </p>
                            <p class="mb20">Properly managing business assets is essential for the success of any organization. By tracking and maintaining assets, businesses can ensure that they are being used efficiently and effectively, and avoid costly downtime or replacement expenses.</p>
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
                        <h2>Three Key Properties of Assets</h2>
                        <p class="mt15">For something to be considered an asset, it must have three properties:</p>
                    </div>
                </div>
            </div>

            {{-- <div class="row mt30">
                <div class="col-lg-4 col-sm-6">
                    <div class="ree-card  mt60 ">
                        <div class="ree-card-img"><img src="{{asset('images/icons/suitcase.png')}}" alt="services"> </div>
                        <div class="ree-card-content mt40">
                            <h3 class="mb15">Ownership</h3>
                            <p class="mb-0">First, a company must have ownership or control of the asset. This enables the company to convert the asset into cash or a cash equivalent and limits others’ control over the item. Note, right of use assets aren’t always convertible. Lease agreements often stipulate that the lease cannot be transferred or sold. The ownership property is important when considering an asset’s informal meaning versus its technical meaning. For example, companies often say their employees are their “greatest asset,” but in terms of accounting, companies don’t have true control over them—employees can easily leave for a new job.<br><br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ree-card  mt60">
                        <div class="ree-card-img"><img src="{{asset('images/icons/training.png')}}" alt="services"> </div>
                        <div class="ree-card-content mt40">
                            <h3 class="mb15">Economic value</h3>
                            <p class="mb-0">
                                Second, an asset must also provide economic value. All assets can be sold or otherwise converted to cash, except for some right of use assets such as lease agreements. In that way, assets can be used to support production and business growth.<br><br><br><br><br><br><br><br><br><br><br>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ree-card  mt60">
                        <div class="ree-card-img"><img src="{{asset('images/icons/optimization.png')}}" alt="services"> </div>
                        <div class="ree-card-content mt40">
                            <h3 class="mb15">
                                Resource
                            </h3>
                            <p class="mb-0">
                                Finally, an asset must be a resource, which means it has or can be used to generate future economic value. This generally means that the asset can create future positive cash inflows.<br><br><br><br><br><br><br><br><br><br><br><br><br></p>
                        </div>

                    </div>
                </div>



            </div> --}}
            <div class="row mt-30">
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="ree-card mt-60 d-flex flex-column h-100">
                        <div class="ree-card-img"><img src="{{asset('images/icons/suitcase.png')}}" alt="services"></div>
                        <div class="ree-card-content mt-40">
                            <h3 class="mb-15 pt-4 pb-3">Ownership</h3>
                            <p class="mb-0">First, a company must have ownership or control of the asset. This enables the company to convert the asset into cash or a cash equivalent and limits others’ control over the item. Note, right of use assets aren’t always convertible. Lease agreements often stipulate that the lease cannot be transferred or sold. The ownership property is important when considering an asset’s informal meaning versus its technical meaning. For example, companies often say their employees are their “greatest asset,” but in terms of accounting, companies don’t have true control over them—employees can easily leave for a new job.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="ree-card mt-60 d-flex flex-column h-100">
                        <div class="ree-card-img"><img src="{{asset('images/icons/training.png')}}" alt="services"></div>
                        <div class="ree-card-content mt-40">
                            <h3 class="mb-15 pt-4 pb-3">Economic value</h3>
                            <p class="mb-0">Second, an asset must also provide economic value. All assets can be sold or otherwise converted to cash, except for some right of use assets such as lease agreements. In that way, assets can be used to support production and business growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="ree-card mt-60 d-flex flex-column h-100">
                        <div class="ree-card-img"><img src="{{asset('images/icons/optimization.png')}}" alt="services"></div>
                        <div class="ree-card-content mt-40">
                            <h3 class="mb-15 pt-4 pb-3">Resource</h3>
                            <p class="mb-0">Finally, an asset must be a resource, which means it has or can be used to generate future economic value. This generally means that the asset can create future positive cash inflows.</p>
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
                                <a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40">Contact us <i class="fas fa-arrow-right fa-btn"></i></a>
                                <span class="or">or</span>
                                <a href="tel:+91 9861556688" class="mt40 call-us">Call Us +91 9861556688</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 vcenter text-center">
                        <div class="sol-img-png"> <img src="{{asset('images/cta.png')}}" alt="app" class="img-fluid"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start cta-->
    >

    <!--Industries-->
    <section class="r-bg-d   sec-pad">
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