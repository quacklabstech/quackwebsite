@extends('master_layout')
@section('content')

    <!-- Header title -->
    <section class="header-title head-opacity" data-background="{{asset('images/banner/e-testimonial.jp')}}g">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="mb15">Employee Speak</h1>
                    <p class="h-light">The Voice Of our Employee</p>
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
                        <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">What Our Employees Say?</span>
                        <h2 data-aos="fade-up" data-aos-delay="400">Employee <span class="ree-text rt45">Speak</span></h2>
                        <p class="mt30" data-aos="fade-up" data-aos-delay="600">At Quacklabs, the employees are always motivated to go beyond their usual tasks and work, to embrace newer skills, and out-perform themselves in multiple arenas. Below are some of employees speaking on how working with the company has done them good.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sol-img m-mt30">
                        <img src="{{asset('images/espoke-banner.png')}}" alt="quacklabs office" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
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
                <div class="col-lg-7 text-center">
                    <div class="page-headings">
                        <h2>What Our Employees Say?</h2>
                        <p class="mt15">Below are some of employees speaking on how working with the company has done them good.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="">
                            <div class="review-text">
                                <p>I just want to say that thanks for everything. I just feel lucky to work with quacklabs. It is one of the best IT companies ever. I love the environment and my whole quacklabs team. "Accelerating, information age ". ❤️✌️✌️❤️</p>
                            </div>
                            <div class="ree-row-set mt30">
                                <div class="media vcenter">
                                    <div class="ree-icon-set img-round80"><img src="{{asset('./images/team/sarit.png')}}" alt="img" class="img-fluid img-80"></div>
                                    <div class="ree-details-set user-info">
                                        <h5>Sarit Kumar Hota </h5>
                                        <p><small>Jr. Full Stack Developer</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="">
                            <div class="review-text">
                                <p>A company like no other! Good business ethics, supportive management, trust and respect among employees – that’s what QuackLabs is all about. It’s really a blissful workplace!</p>
                            </div>
                            <div class="ree-row-set mt30">
                                <div class="media vcenter">
                                    <div class="ree-icon-set img-round80"><img src="{{asset('./images/team/akash.png')}}" alt="img" class="img-fluid img-80"></div>
                                    <div class="ree-details-set user-info">
                                        <h5>Aakash Kumar </h5>
                                        <p><small>Full Stack Developer</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="">
                            <div class="review-text">
                                <p class="mb-8">I have enjoyed working with QuackLabs. Great work environment & Best Product Based Software Development Company in Bhubaneswar. It provides best platform to enhance knowledge and skills.</p><br>
                            </div>
                            <div class="ree-row-set mt30">
                                <div class="media vcenter">
                                    <div class="ree-icon-set img-round80"><img src="{{asset('./images/team/alok.png')}}" alt="img" class="img-fluid img-80"></div>
                                    <div class="ree-details-set user-info">
                                        <h5>Alok Kumar Gochhayat </h5>
                                        <p><small>UI Developer</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ree-card mt30" data-aos="fade-in" data-aos-delay="500">
                        <div class="">
                            <div class="review-text">
                                <p>Very nice organization . Every day getting new opportunities to learn. Management & seniors are very helpful and supportive. I recommend to join this organization for every job seeker because organization is growing & getting new responsibilities & chance to learn latest technologies.</p>
                            </div>
                            <div class="ree-row-set mt30">
                                <div class="media vcenter">
                                    <div class="ree-icon-set img-round80"><img src="{{asset('./images/team/saroj.png')}}" alt="img" class="img-fluid img-80"></div>
                                    <div class="ree-details-set user-info">
                                        <h5>Saroj Kumar Swain</h5>
                                        <p><small>UI Developer</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--end company info-->
    
	<!--company awards-->
	<section class="r-bg-c sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="page-headings side-pghd">
						<span class="sub-heading mb15">About QuackLabs</span>
						<h2>Quacklabs</h2>
					</div>
				</div>
				<div class="col-lg-8">
					<h4 class="mb15">Quacklabs is a full-service web, app and digital marketing company based in India.</h4>
					<p>Our experts provide a wide range of services including app design, web development, digital
						marketing, ecommerce solutions and cloud development. We stay updated with the technology to
						build innovative digital products that meet client requirements across multiple business
						verticals and domains by housing some of the best professionals in the industry. To transform
						the concepts to design, concluding with full executions, we also stay updated with the latest
						trending technologies. And we evolve with the advancement in technology because we believe in
						making our technology as your innovation.</p>
					<p class="mt15">To learn more about our approach to business and work, feel free to hop on over to our Open Contact Page.</p>
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="company-stats2 roww mt30">
								<div class="statsnum counter-number mt30">
									<p>Complete Projects</p> <span class="counter">300</span> <span>+</span>
								</div>
								<div class="statsnum counter-number mt30">
									<p>Happy Clients</p> <span class="counter">200</span> <span>+</span>
								</div>
								<div class="statsnum counter-number mt30">
									<p>Expert Team</p> <span class="counter">50</span><span>+</span>
								</div>
								<div class="statsnum counter-number mt30">
									<p>Success Years</p> <span class="counter">20</span><span>+</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--company awards end-->


	<!--start career cta-->
	<section class="r-bg-a  sec-pad">
		<div class="container">
			<div class="ree">
				<div class="row">
					<div class="col-lg-6 vcenter">
						<div class="cta-heading">
							<span class="sub-heading mb15">CAREER</span>
							<h2><span class="ree-text rt40">Teamwork</span> is the ability to work together toward a common vision.</h2>

							<a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt1 mt40 mw-80">Join Our Team <i class="fas fa-arrow-right fa-btn"></i></a>
						</div>
					</div>
					<div class="col-lg-6 vcenter">
						<div class="ct-sol-img">
							<img src="{{asset('images/cta/teamwork.svg')}}" alt="team" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end career cta-->
@endsection