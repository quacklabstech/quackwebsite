@extends('master_layout')
@section('content')
	<!-- Header title -->
	<section class="header-title head-opacity" data-background="{{asset('images/banner/company.jpg')}}">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h1 class="mb15">Company Overview</h1>
					<p class="h-light">believes in being a multidimensional service provider and looks to satisfy every requirement that a client can pose to us.</p>
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
						<span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Overview</span>
						<h2 data-aos="fade-up" data-aos-delay="400"> Company <span class="ree-text rt45">Overview</span></h2>
						<p class="mt30" data-aos="fade-up" data-aos-delay="600">QuackLabs believes in being a multidimensional service provider and looks to satisfy every requirement that a client can pose to us. With a high level of innovation and a user-centric approach to designing software applications, our team of professionals can aid you in anything from software design, delivery and year-round support. This of course, is backed by their superior degree of technical expertise, work ethics and customer-friendly attitude.</p>
						<p class="mt15" data-aos="fade-up" data-aos-delay="800">We offer a whole host of services to ISVs and ASPs across the globe without letting geographical location be a problem to our communication. We have experience in working with most domains and have gained the reputation of being one of the fastest and most reliable software developers in the market. We have been known to rise to the occasion in case of urgency and finish up large chunks of coding in a short time span.</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="sol-img m-mt30">
						<img src="{{asset('images/overview-banner.png')}}" alt="quacklabs office" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--page head end-->



	<!--start company info-->
	<section class="r-bg-a sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mt-5">
					<div class="sol-img m-mt30">
						<img src="{{asset('images/others/team-business.jpg')}}" alt="Quack office" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="pera-block">
						<h2> Our <span class="ree-tt">Expertise. </span></h2>
						<p>We are a team of top talent delivering enterprise solutions globally. we evolve with the advancement in technology because we believe in making our technology as your innovation.</p>
						<p>Our experts provide a wide range of services including app design, web development, digital marketing, ecommerce solutions and cloud development. We stay updated with the technology to build innovative digital products that meet client requirements across multiple business verticals and domains by housing some of the best professionals in the industry.</p>
					</div>
				</div>
			</div>
			<div class="row mt30">
				<div class="col-lg-4 mt30">
					<div class="pera-block">
						<h4>Customer Satisfaction.</h4>
						<p>The core of all we do at our IT services and consulting business is customer satisfaction. Delivering outstanding solutions and comprehending our clients' demands are our top priorities.</p>
					</div>
				</div>
				<div class="col-lg-4 mt30">
					<div class="pera-block">
						<h4> Marketing Strategies</h4>
						<p>Developing successful marketing plans is essential for our IT consulting and services business. They include competitive analysis, analyzing customer needs, and implementing focused marketing for the best outcomes.</p>
					</div>
				</div>
				<div class="col-lg-4 mt30">
					<div class="pera-block">
						<h4>After-Sales Service.</h4>
						<p>An essential component of our IT services and consulting business is after-sales support. Our dedication lies in offering all-encompassing assistance to guarantee customer contentment even after the buy.</p>
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