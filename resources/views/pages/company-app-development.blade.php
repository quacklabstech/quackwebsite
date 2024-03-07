@extends('master_layout')
@section('content')
	<!--page head-->
	<div class="port-head-sec pt85 pb120 r-bg-a">
		<div class="container">
			<div class="row vcenter pt80">
				<div class="col-lg-7">
					<div class="page-headings">
						<span class="sub-heading mb15" data-aos="fade-in" data-aos-delay="200"><i class="fas fa-briefcase mr5"></i> Quality Work</span>
						<h1 class="mb15" data-aos="fade-in" data-aos-delay="400">Leading the way in <span class="ree-text rt40">app</span> development excellence.</h1>
						<p class="h-light" data-aos="fade-in" data-aos-delay="600">We Have Built High Impact Solutions Across Industries.</p>
						<a href="/contact-us" class="ree-btn  ree-btn-grdt1 mt40" data-aos="fade-in" data-aos-delay="800">Contact Us <i class="fas fa-arrow-right fa-btn"></i></a>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="ree-card m-mt30 trust-review owl-carousel" data-aos="fade-in" data-aos-delay="500">

						<div class="items">
							<div class="review-text">
								<p> QuackLabs is a very good mobile apps development company In India. They understood our requirements very well and develop android and iOS app for us in a committed timeline."</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="{{asset('images/users/user4.jpg')}}" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Sunil Kumar swain</h5>
										<p>Entrepreneur</p>
									</div>
								</div>
							</div>
						</div>

						<div class="items">
							<div class="review-text">
								<p>Thanks a lot Quacklabs for delivering our project successfully on time. I really thanks each and every member of Brill mindz family for delivering my project.</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="{{asset('images/users/user2.jpg')}}" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Abhilash</h5>
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
							<div class="portfolio-flimg hovr-scale-base mt-5">
								<a href="#"> <img src="{{asset('images/portfolio/app-portfolio1.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order1" data-aos="fade-up" data-aos-delay="600">
						<div class="portfolio-detls pdr-dtls">
							<p class="port-tags">Online Food Ordering App</p>
							<a href="#" class="port-title-main" target="_blank">Pizza Ordering App</a>
							<p class="mb30">The app allows customers to browse menus and place orders for food to be picked up at the restaurant or delivered to their door. Through the app, customers can pay for their orders and track their delivery status in real-time. Online food ordering apps also allow restaurants to manage their orders and optimize their delivery process.</p>
							<a href="#" class="port-links " target="_blank">Live view <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>
				<!-- portfolio row 2 -->
				<div class="row">
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">Online Cab Booking App</p>
							<a href="#" class="port-title-main">Vehicle Management & Booking System </a>
							<p class="mb30">This app will be used to book rides on cabs. It will allow users to search for available cabs in their area, and book a ride with a chosen cab. </p>
							<p class="mb30">Users will be able to select from a range of providers, including Uber, Lyft, and other local cab companies. The app will allow users to view estimated arrival times, and to track the progress of their ride in real-time.</p>
							<a href="#" class="port-links ">View in app store <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
					<div class="col-lg-7 m-order1 mt-5" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base ">
								<a href="#"> <img src="{{asset('images/portfolio/app-portfolio2.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
				</div>
				<!-- portfolio row 3 -->
				<div class="row">
					<div class="col-lg-7 m-order1 mt-5" data-aos="fade-up" data-aos-delay="200">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="#"> <img src="{{asset('images/portfolio/app-portfolio3.jpg')}}" alt="portfolio" class="img-fluid"> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="600">
						<div class="portfolio-detls pdr-dtls">
							<p class="port-tags">Online Doctors Appointments App</p>
							<a href="#" class="port-title-main" target="_blank">Doctors Appointments, Diagnostics, Medical Managements </a>
							<p class="mb30">This app would allow users to book virtual doctor appointments with the click of a button. It would allow users to search for doctors in their area, read reviews, and schedule appointments. The app would also allow users to store their medical records and view past appointment history. Additionally, it would provide users with helpful health tips and reminders for upcoming appointments.</p>
							<a href="#" class="port-links" target="_blank">View live website <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
				</div>
				<!-- portfolio row 4 -->
				<div class="row">
					<div class="col-lg-5 m-order2" data-aos="fade-up" data-aos-delay="200">
						<div class="portfolio-detls pdl-dtls">
							<p class="port-tags">Eye Catchy Product User Interface Design</p>
							<a href="#" class="port-title-main">Marketplace Mobile App</a>
							<p class="mb30">A marketplace mobile app is a type of mobile application that provides a platform for users to buy and sell goods, services, and other items. The app typically includes features such as product listings, payment processing, and customer support. The app can also be used as a platform to connect buyers and sellers, enabling them to negotiate prices and complete transactions. Marketplace mobile apps are becoming increasingly popular due to their convenience, affordability, and ease of use. With the rise of e-commerce, these apps are becoming a crucial part of the online shopping experience.</p> <a href="#" class="port-links ">Live view <i class="fas fa-arrow-right fa-btn"></i></a>

						</div>
					</div>
					<div class="col-lg-7 m-order1 mt-5" data-aos="fade-up" data-aos-delay="600">
						<div class="hovr-scale-main">
							<div class="portfolio-flimg hovr-scale-base">
								<a href="#"> <img src="{{asset('images/portfolio/app-portfolio4.jpg')}}" alt="portfolio" class="img-fluid"> </a>
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
							<a href="/contact-us" class="ree-btn  ree-btn-grdt1 mw-80 mt40">Start Your Project <i class="fas fa-arrow-right fa-btn"></i></a>
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