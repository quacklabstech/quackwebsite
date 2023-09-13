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
								<p>According to my experience with Digital Corsel ,they done a great job, as they have best services & new techniques of marketing. Even they complete all work on time. They have Better & clear idea of working on the task. I feel I made a good choice choosing them.</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="{{asset('images/users/nibedita.jpg')}}" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Nibedita Sahoo</h5>
										<p>Hr at CRPL</p>
									</div>
								</div>
							</div>
						</div>

						<div class="items">
							<div class="review-text">
								<p>I am super amazed and impressed with the quality of the final work QuackLabs has provided. The team is very professional, they accomplished my company’s SEO goal within a few months, transparency was maintained during the whole course of the project</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="{{asset('images/users/user4.jpg')}}" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Manash Mishra</h5>
										<p>Entrepreneur</p>
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
								<a href="https://www.crplindia.com/" target="_blank"> <img src="{{asset('images/portfolio/crpl.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="portfolio-detls pdr-dtls">
							<p class="port-tags">Recruitment Company</p>
							<a href="https://www.crplindia.com/" class="port-title-main" target="_blank">CRPL INDIA</a>
							<p class="mb30">The app provides users with a digital marketplace where they can view and compare products, negotiate pricing, and place orders. It also includes features such as order tracking, payment management, and analytics. This app can help businesses improve their efficiency, reduce costs, and increase their profits. It also helps them streamline their operations and better manage their supply chain.</p>
							<a href="https://www.crplindia.com/" class="port-links " target="_blank">Live view <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>
				<!-- portfolio row 2 -->
				<div class="row">
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">IT Staff Augmentation & Consulting </p>
							<a href="https://transtrack.co.in/" class="port-title-main" target="_blank">Transtrack</a>
							<p class="mb30">This app will be used to book rides on cabs. It will allow users to search for available cabs in their area, and book a ride with a chosen cab. </p>
							<p class="mb30">Users will be able to select from a range of providers, including Uber, Lyft, and other local cab companies. The app will allow users to view estimated arrival times, and to track the progress of their ride in real-time.</p>
							<a href="https://transtrack.co.in/" class="port-links" target="_blank">Live View <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="https://transtrack.co.in/" target="_blank"> <img src="{{asset('images/portfolio/trans-old.png')}}" alt="portfolio" class="img-fluid"> </a>
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