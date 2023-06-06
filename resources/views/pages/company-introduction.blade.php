@extends('master_layout')
@section('content')
	<!-- Header title -->
	<section class="header-title head-opacity" data-background="{{asset('images/banner/intro.jpg')}}">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h1 class="mb15"> Who We Are</h1>
					<p class="h-light">We are committed to delivering exceptional products and services to our clients.</p>
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
						<span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Who We Are</span>
						<h2 data-aos="fade-up" data-aos-delay="400"> We are a <span class="ree-text rt45">creative</span> digital agency based in India.</h2>
						<p class="mt30" data-aos="fade-up" data-aos-delay="600">Quacklabs is a technology company dedicated to providing innovative solutions to the challenges facing our modern world. Our team of experts is constantly pushing the boundaries of what is possible, using cutting-edge technology to develop products that are reliable, user-friendly, and effective.</p>
						<p class="mt15" data-aos="fade-up" data-aos-delay="800">At Quacklabs, we believe that technology has the power to improve people's lives, and we are committed to using our expertise to create products that make a positive impact. From software development to hardware design, we are constantly working to create new and exciting technologies that will help people be more productive, connected, and informed.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="sol-img m-mt30">
						<img src="{{asset('images/intro-banner.png')}}" alt="Quacklabs office" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
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
				<div class="col-lg-4">
					<div class="sol-img m-mt30">
						<img src="{{asset('images/others/team-business3.png')}}" alt="quacklabs" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="pera-block ml50">
						<h2> <span class="ree-tt">Quacklabs: </span>Where innovation meets excellence. </h2>
						<p>Our team is made up of skilled professionals from a wide range of backgrounds, including computer science, electrical engineering, and industrial design. We are passionate about what we do, and we are always looking for ways to improve and expand our capabilities.</p>
						<p>At Quacklabs, we are committed to excellence and innovation. We are always looking for new ways to solve problems and create value for our customers. If you are interested in learning more about what we do, we invite you to contact us to discuss your needs and how we can help.</p>
					</div>
				</div>
			</div>
			<div class="row mt30">
				<div class="col-lg-4 mt30">
					<div class="pera-block">
						<h4>Mission</h4>
						<p>Our mission at Quacklabs is to use technology to improve people's lives by developing innovative and effective solutions to the challenges facing our modern world.</p>
					</div>
				</div>
				<div class="col-lg-4 mt30">
					<div class="pera-block">
						<h4>Vision</h4>
						<p>Our vision is to be a leading technology company known for our commitment to excellence and innovation, providing high-quality products and services that help people be more productive, connected, and informed.</p>
					</div>
				</div>
				<div class="col-lg-4 mt30">
					<div class="pera-block">
						<h4>Value</h4>
						<p> We are committed to delivering the highest level of quality in everything we do, from product development to customer service.
						</p>
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