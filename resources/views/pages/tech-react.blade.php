@extends('master_layout')
@section('content')
	<!--page head-->
	<section class="page-heading-sec r-bg-a pt85 pb120">
		<div class="container">
			<div class="row pt80 justify-content-center">
				<div class="col-lg-6">
					<div class="page-headings">
						<span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">React js</span>
						<h1 data-aos="fade-up" data-aos-delay="400">Experience seamless and intuitive web development with <span class="ree-text rt40">React</span> </h1>
						<p class="mt20 h-light" data-aos="fade-up" data-aos-delay="400">React is a JavaScript library for building user interfaces. It was developed by Facebook and is often used for building single-page applications and mobile applications.</p>
						<a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-up" data-aos-delay="800">Let’s discuss <i class="fas fa-arrow-right fa-btn"></i></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/react-banner.png')}}" width="450px" alt="web app development" class="img-fluid"></div>
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
							<h2 class="mb15">What is <span class="ree-text rt40">React js?</span></h2>
							<p class="mb15">React is a JavaScript library for building user interfaces. It was developed by Facebook and is often used for building single-page applications and mobile applications.</p>
							<p class="mb15">One of the key features of React is that it allows developers to create reusable components, which can be easily shared and incorporated into other parts of the application. This makes it easier to build and maintain complex user interfaces, as it allows developers to break down the interface into smaller, more manageable pieces.
							</p>
							<p class="mb15">React uses a virtual DOM (Document Object Model) to optimize updates to the actual DOM, which helps improve the performance of applications built with React. When a component's state changes, React updates the virtual DOM and then determines the minimum number of DOM updates that are required to reflect the changes in the actual DOM. This helps to minimize the number of DOM manipulations, which can be a performance bottleneck in some applications.</p>
							<p class="mb15">In addition to its core features, React also has a large ecosystem of tools and libraries that can be used to build and deploy applications. This includes tools for testing, debugging, and optimizing React applications.</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--about service end-->
    
	<!--start cta-->
	<section class="r-bg-a sec-pad">
		<div class="container">
			<div class="ree">
				<div class="row">
					<div class="col-lg-6 vcenter">
						<div class="cta-heading">
							<h2 class="mb15">Hire a experienced <span class="ree-text rt40">React</span> developer for your <span class="ree-text rt40">project</span> </h2>
							<p>We have a dexterity team of designers & developers that works on clients projects excellently and delivers the project on timeline.</p>
							<div class="mult-btns">
								<a href="tel:+91 9861556688" class="ree-btn  ree-btn-grdt1 mt40">Talk to our experts <i class="fas fa-arrow-right fa-btn"></i></a>
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
							<a href="/contact-us" class="ree-btn  ree-btn-grdt1  mt40 mr20"><i class="fas fa-phone-alt fb-bigon"></i> Contact </a>
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