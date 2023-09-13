@extends('master_layout')
@section('content')
	<!--page head-->
	<div class="port-head-sec pt85 pb120 r-bg-a">
		<div class="container">
			<div class="row vcenter pt80">
				<div class="col-lg-7">
					<div class="page-headings">
						<span class="sub-heading mb15" data-aos="fade-in" data-aos-delay="200"><i class="fas fa-briefcase mr5"></i> Quality Work</span>
						<h1 class="mb15" data-aos="fade-in" data-aos-delay="400">Some of our <span class="ree-text rt40">Finest</span> work.</h1>
						<p class="h-light" data-aos="fade-in" data-aos-delay="600">We Have Built High Impact Solutions Across Industries.</p>
						<a href="/get-quote" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-in" data-aos-delay="800">Get Quote <i class="fas fa-arrow-right fa-btn"></i></a>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="ree-card m-mt30 trust-review owl-carousel" data-aos="fade-in" data-aos-delay="500">

						<div class="items">
							<div class="review-text">
								<p>The team is excellent. Accomplished our work before deadline with quality. And they are affordable and well experienced. The team Quacklabs is very professional and understand what their clients needs.</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="{{asset('images/users/kalyan.jpg')}}" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Kalyan Sahoo</h5>
										<p>Founder Of Transtrack Aeroservices</small></p>
									</div>
								</div>
							</div>
						</div>

						<div class="items">
							<div class="review-text">
								<p>QuackLabs team has been and continues to be my go to option for any UI UX or other design and development related requirements. Timely updates and cost effective services. Will surely recommend to everyone</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="{{asset('images/users/bisworanjan.jpg')}}" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Bisworanjan</h5>
										<p>Director at MRPL Pvt. Ltd.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt70">
				<div class="col-lg-12">
					<div class="company-special-work">
						<h4>Check our portfolio on other websites as well.</h4>
						<div class="portfolio-source">
							<div class="port-ref-link">
								<a href="https://www.facebook.com/quacklabs/" target="_blank"><img src="{{asset('./images/facebook.png')}}" alt="dribbble-logo"> <span>Facebook Profile</span> </a>
							</div>
							<div class="port-ref-link">
								<a href="https://twitter.com/quacklabs" target="_blank"><img src="{{asset('./images/twitter.png')}}" alt="dribbble-logo"> <span>Twitter Page</span> </a>
							</div>
							<div class="port-ref-link">
								<a href="https://www.instagram.com/quacklabs/" target="_blank"><img src="{{asset('./images/instagram.png')}}" alt="dribbble-logo"> <span>Instagram page</span> </a>
							</div>
							<div class="port-ref-link">
								<a href="https://in.linkedin.com/company/quacklabs" target="_blank"><img src="{{asset('./images/linkedin.png')}}" alt="dribbble-logo"> <span>Linkdin Portfolio</span> </a>
							</div>
							<div class="port-ref-link">
								<a href="https://www.youtube.com/channel/UC_s1hoRVqwj-zJC7qHVI5sg" target="_blank"><img src="{{asset('./images/youtube.png')}}" alt="dribbble-logo"> <span>Youtube channel</span> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--page head end-->

	<!--portfolio items-->
	<div class="sec-pad">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="page-headings text-center">
						<h2 class="mb15">Creative work</h2>
						<p>We have completed thousands of projects, some of them showing important projects here.</p>
					</div>
				</div>
			</div>


			<div class="portfolio-items mt60">
				<!-- portfolio row 1 -->
				<div class="row">
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="https://www.appointone.com/" target="_blank"> <img src="{{asset('images/portfolio/portfolio-1.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="portfolio-detls pdr-dtls">
							<p class="port-tags">UX, UI, Graphic Design</p>
							<a href="https://www.appointone.com/" class="port-title-main" target="_blank">Creative Job Portal UI design service by Quacklabs</a>
							<p class="mb30">Our UI design service is a service that provides professional design services for job portals. It involves creating a visually appealing and functional design for job portals, with the goal of making them more attractive and user-friendly. This service typically includes creating a custom design, graphic design, user experience design, and coding. The custom design will be tailored to the specific needs of the job portal and its users.</p>
							<a href="https://www.appointone.com/" class="port-links " target="_blank">Live view <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>
				<!-- portfolio row 2 -->
				<div class="row">
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">iOS, Android, Swift</p>
							<a href="#" class="port-title-main">Furniture ios app kit developed in swift framework</a>
							<p class="mb30">Our UI design service is a service that provides professional design services for job portals. It involves creating a visually appealing and functional design for job portals, with the goal of making them more attractive and user-friendly. This service typically includes creating a custom design, graphic design, user experience design, and coding. The custom design will be tailored to the specific needs of the job portal and its users.</p>
							<a href="#" class="port-links ">View in app store <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="#"> <img src="{{asset('images/portfolio/portfolio-2.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
				</div>
				<!-- portfolio row 3 -->
				<div class="row">
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="https://talentincloud.com/" target="_blank"> <img src="{{asset('images/portfolio/portfolio-3.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="600">
						<div class="portfolio-detls pdr-dtls">
							<p class="port-tags">ATS UI/UX Service</p>
							<a href="https://talentincloud.com/" class="port-title-main" target="_blank">Creative Applicant Tracking System</a>
							<p class="mb30"> The UI should also be customizable so that users can tailor the ATS to meet their exact needs. The UI should also be able to quickly and easily integrate with other systems such as email and document management systems. Finally, the UI should be mobile friendly so that users can access the ATS on the go.</p>
							<a href="https://talentincloud.com/" class="port-links" target="_blank">View live website <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>
				<!-- portfolio row 4 -->
				<div class="row">
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">Eye Catchy Product User Interface Design</p>
							<a href="https://mangalamtank.com/" target="_blank" class="port-title-main">Eye Catchy Product UI Design</a>
							<p class="mb30">Develop a product user interface that is responsive to different devices and screen sizes. Create a design that is consistent across all devices to keep your users engaged.</p>
							<p class="mb30">Provide clear and easy to use navigation menus and buttons. Make sure all important elements are easily accessible and clearly labeled.</p>
							<a href="https://mangalamtank.com/" target="_blank" class="port-links ">Live view <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="https://mangalamtank.com/" target="_blank"> <img src="{{asset('images/portfolio/portfolio-4.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
				</div>

				

			</div>
		</div>
	</div>
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
							<p>We have a dexterity team of designers & developers that works on clients projects excellently and delivers the project on timeline.</p>
							<a href="/get-quote" class="ree-btn  ree-btn-grdt1 mw-80 mt40">Start Your Project <i class="fas fa-arrow-right fa-btn"></i></a>
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