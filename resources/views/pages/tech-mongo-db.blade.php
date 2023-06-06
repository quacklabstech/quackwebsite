@extends('master_layout')
@section('content')
	<!--page head-->
	<section class="page-heading-sec r-bg-a pt85 pb120">
		<div class="container">
			<div class="row pt80 justify-content-center">
				<div class="col-lg-6">
					<div class="page-headings">
						<span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">MangoDB</span>
						<h1 data-aos="fade-up" data-aos-delay="400">The go-to database for cloud based <span class="ree-text rt40">applications</span> </h1>
						<p class="mt20 h-light" data-aos="fade-up" data-aos-delay="400">MongoDB is a cross-platform, open-source, NoSQL database used for storing and manipulating large sets of data.</p>
						<a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-up" data-aos-delay="800">Let’s discuss <i class="fas fa-arrow-right fa-btn"></i></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/mongo.png')}}" alt="web app development" class="img-fluid"></div>
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
							<h2 class="mb15">What is <span class="ree-text rt40">MangoDB?</span></h2>
							<p class="mb15">MongoDB is an open-source, cross-platform NoSQL database that is used for storing and manipulating large sets of data. It is designed to handle the demands of modern applications and can easily scale horizontally to support large amounts of data and high levels of concurrency.</p>
							<p class="mb15">One of the key features of MongoDB is its flexible data model, which allows developers to store data in a variety of formats, including JSON, BSON, and more. This makes it easy to store and query data in real-time, without the need to pre-define a schema.
							</p>
							<p class="mb15">MongoDB is also known for its high performance and fast query times, making it ideal for applications with high data volume and concurrency. It also has a simple, JSON-based query language and intuitive API, which makes it easy to learn and use.</p>
							<p class="mb15">In addition, MongoDB has a large and active community of developers, who provide valuable support and resources. This makes it a popular choice for developers who are looking for a reliable and well-supported database for their applications.</p>
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
							<h2 class="mb15">Hire a experienced <span class="ree-text rt40">Database</span> Engineer for your <span class="ree-text rt40">project</span> </h2>
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
	<section class="sec-pad  r-bg-a">
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