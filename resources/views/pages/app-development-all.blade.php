@extends('master_layout')
@section('content')

	<!-- Header title -->
	<section class="header-title head-opacity" data-background="{{asset('images/banner/office.jpg')}}">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h1 class="mb15">App Development</h1>
					<p class="h-light">App development is the process of creating software applications for mobile devices and computers.</p>
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
							<h2 class="mb15">We offer <span class="ree-text rt40">Web</span> & <span class="ree-text rt40">App</span> development service</h2>
							<p>App development is the process of creating software applications that run on a computer or a mobile device. It involves designing, coding, testing, and debugging applications to ensure they work properly and meet the needs of the users.</p>
							<ul class="ul-list-icon mt30">
								<li><i class="fas fa-sync-alt"></i> Unique Mobile &amp; Web App Development with 6 months support</li>
								<li><i class="fas fa-tachometer-alt"></i> Enjoy express delivery within deadline.</li>
								<li><i class="fas fa-users"></i> Join more than 350 happy customers</li>

							</ul>
						</div>
					</div>
					<div class="col-lg-6 vcenter">
						<div class="ct-sol-img"> <img src="{{asset('images/cta/teamwork.svg')}}" alt="web design" class="img-fluid"> </div>
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
				<div class="col-lg-7 col-sm-12 text-center">
					<div class="page-headings">
						<h2>Creating apps that make a difference</h2>
						<p class="mt15">Explore our range of prowess in mobile &amp; web app design and development</p>
					</div>
				</div>
			</div>

			<div class="portfolio-items mt60">
				<!-- portfolio row 1 -->
				<div class="row">
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="/solutions/app-development/web-app-development"> <img src="{{asset('images/portfolio/web-app-dev.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="portfolio-detls pdr-dtls">
							<p class="port-tags">Web App Development</p>
							<a href="/solutions/app-development/web-app-development" class="port-title-main">Creative Web App Development</a>
							<p class="mb30">we specialize in creative web app development that helps businesses and organizations streamline their operations and improve efficiency. Our team of experienced developers is skilled in creating custom web applications that are tailored to the unique needs of our clients.</p>

							<a href="/solutions/app-development/web-app-development" class="port-links ">View More <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>
				<!-- portfolio row 2 -->
				<div class="row">
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">iOS, Android, Swift</p>
							<a href="/solutions/app-development/mobile-app-development" class="port-title-main">Mobile App Development</a>
							<p class="mb30">With the increasing demand for businesses to have a strong online presence, a well-designed mobile app can be a game changer. Not only can it improve customer engagement and loyalty, but it can also streamline internal processes and boost productivity.</p>
							<p class="mb30">Our team has a wealth of experience in developing high-quality mobile apps across a range of industries, using the latest technologies and methodologies to deliver exceptional results. </p>
							<a href="/solutions/app-development/mobile-app-development" class="port-links ">View More <i class="fas fa-arrow-right fa-btn"></i></a>


						</div>
					</div>
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="/solutions/app-development/mobile-app-development"> <img src="{{asset('images/portfolio/mobile-app-dev.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
				</div>
				<!-- portfolio row 3 -->
				<div class="row">
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="200">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="/solutions/app-development/eCommerce-development"> <img src="{{asset('images/portfolio/ecom-dev-app.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="600">
						<div class="portfolio-detls pdr-dtls">
							<p class="port-tags">B2B &amp; B2C Ecom app Development</p>
							<a href="/solutions/app-development/eCommerce-development" class="port-title-main">Ecommerce App Development</a>
							<p class="mb30"> E-commerce app development has become an increasingly popular and important aspect of modern business. With the rise of mobile technology and the increasing amount of time people spend on their smartphones, it's no surprise that e-commerce apps have become a vital tool for businesses looking to reach new customers and sell their products online.</p>
							<a href="/solutions/app-development/eCommerce-development" class="port-links">View More <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>
				<!-- portfolio row 4 -->
				<div class="row">
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">Enterprise resource planning</p>
							<a href="/solutions/app-development/erp-development" class="port-title-main">ERP Development</a>
							<p class="mb30">ERP (Enterprise Resource Planning) software is a type of business management software that integrates various systems and processes within an organization into a single unified system. ERP software is designed to automate and streamline business processes, such as financials, human resources, supply chain management, and more.</p>
							<a href="/solutions/app-development/erp-development" class="port-links ">View More <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="/solutions/app-development/erp-development"> <img src="{{asset('images/portfolio/erp-app-dev.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
				</div>

				<!-- portfolio 5  -->
				<div class="row">
					<div class="col-lg-7 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="/solutions/app-development/full-stack-development"> <img src="{{asset('images/portfolio/fullstack-app-dev.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">Full Stack App Development</p>
							<a href="/solutions/app-development/full-stack-development" class="port-title-main">Full Stack Development</a>
							<p class="mb30">Full stack development refers to the development of both the front-end and back-end components of a web application. A full stack developer is a programmer who is proficient in all layers of web development, including the user interface, server-side logic, and database management.</p>
							<a href="/solutions/app-development/full-stack-development" class="port-links ">View More <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>

				<!-- <div class="row">
				<div class="col-lg-12 col-sm-12">
					<ul class="pagination shadows">
						<li><a href="#" class="prev">Prev</a></li>
						<li class="pageNumber active"><a href="#">1</a></li>
						<li class="pageNumber"><a href="#">2</a></li>
						<li class="pageNumber"><a href="#">3</a></li>
						<li class="pageNumber"><a href="#">4</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</div>
			</div> -->

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
							<img src="images/cta/team-support.svg" alt="working with client" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end cta-->
@endsection