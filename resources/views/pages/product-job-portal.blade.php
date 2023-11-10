@extends('master_layout')
@section( 'content')
	<!-- Header End -->
	<section class="header-title head-opacity" data-background="{{asset('images/banner/office.jpg')}}" style="background-image: url(&quot;images/banner/office.jpg&quot;);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h1 class="mb15">Job Portal</h1>
					<p class="h-light fs-16"> Job portals often allow job seekers to search for jobs based on various criteria such as location, job title, and industry, and may also provide resources such as resume builders and career advice. </p>
				</div>
			</div>
		</div>
	</section>
	<!-- section stat  -->
	<section class="r-bg-x sec-pad custom-mt-60 custom-px-20">
		<div class="container">
			<!-- img section start  -->
			<div class="preview-scetion">
				<div class="row">
					<div class="col-lg-7 mb20">
						<div class="preview-section-img">
							<div class="position-relative">
								<div class="qucak-pre-view">
									<div class="product-img-container">
										<img src="{{asset('./images/portfolio/jobprotal2.jpg')}}" alt="img" class="img-fluid main-preview-img" id="main-preview-img">
										<a href="#" class="preview-btn">
											<div>
												<img src="{{asset('./images/live-preview.svg')}}" alt="">
												<span class="d-block live-p-text">Live Preview <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i></span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="bottom-images mb60">
							<div class="d-flex justify-content-center">
								<img src="{{asset('./images/portfolio/jobprotal2.jpg')}}" alt="" class="preview-img first-img">
								<img src="{{asset('./images/portfolio/portfolio-1.jpg')}}" alt="" class="preview-img">
								<img src="{{asset('./images/portfolio/jobprotal3.jpg')}}" alt="" class="preview-img">

							</div>
						</div>
						<div class="product-name-title">
							<h4 class="mb15 text-muted underline">Appointone</h4>
						</div>
						<div class="product-theme-detalis">
							<p class="mb20">A job portal is a website that allows job seekers to search for and apply to job openings, and also allows employers to post job openings and search for potential candidates. Job portals can be a useful resource for both job seekers and employers, as they provide a centralized location where job openings can be easily accessed and searched. Job portals may also offer additional features such as resume building tools, career resources, and job search advice to help job seekers in their job search. Some job portals are specialized and cater to specific industries or job types, while others are more general and cover a wide range of industries and job types.</p>
							<p class="mb20">Appointone can help job seekers find employment opportunities that match their skills and experience, and allow them to apply for jobs directly through the platform. can make it easier for employers to find qualified candidates and streamline the hiring process by allowing them to post job openings, review resumes, and communicate with candidates directly through the platform.</p>
						</div>
						<div class="">
							<img src="{{('./images/portfolio/appointone.png')}}" alt="" class="img-fluid rounded">
						</div>
					</div>
					<div class="col-lg-5">
						<div class="demo-right-card demo-right">

							<div class="product-detalis">
								<div class="row">
									<div class="col-lg-12">
										<h6 class="product-title mb20">Product Details</h6>
										<p class="mb20">Appointone is a website that connects job seekers with job openings. Job seekers can search for jobs and apply to them directly through the portal, while employers can post job openings and search for potential candidates. </p>
									</div>
								</div>
								<div class="row mb20">
									<div class="col-lg-4 col-md-4 col-sm-4 col-4">
										<p class="temp-heading">Project</p>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right">
										<p class="">Appointone</p>
									</div>
								</div>
								<div class="row mb20">
									<div class="col-lg-4 col-md-4 col-sm-4 col-4">
										<p class="temp-heading">Front End</p>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right">
										<div class="d-flex justify-content-end product-technology">
											<img src="{{asset('./images/html.svg')}}" alt="html" data-toggle="tooltips" title="HTML">
											<img src="{{asset('./images/css.svg')}}" alt="css" data-toggle="tooltips" title="CSS">
											<img src="{{asset('./images/js.svg')}}" alt="js" data-toggle="tooltips" title="JAVASCRIPT">
										</div>
									</div>
								</div>
								<div class="row mb20">
									<div class="col-lg-4 col-md-4 col-sm-4 col-4">
										<p class="temp-heading">Backend</p>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right">
										<div class="d-flex justify-content-end product-technology">
											<img src="{{asset('./images/laravel-icon.svg')}}" alt="html" data-toggle="tooltips" title="LARAVEL">
										</div>
									</div>
								</div>
								<div class="row mb20">
									<div class="col-lg-4 col-md-4 col-sm-4 col-4">
										<p class="temp-heading">Last Updated</p>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right">
										<p class="">Dec 08, 2022</p>
									</div>
								</div>
							</div>
							<div class="live-demo-right-btn">
								<a href="http://localhost/appointone/home/" target="_blank" class="d-block ree-btn ree-btn0 ree-btn-grdt2 mt30 p-bg bs-none">Live Demo</a>
								<a href="#" class="d-block ree-btn ree-btn0 ree-btn-grdt2 mt30 bs-none">Hire a Developer</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- img section end  -->
		</div>
	</section>
	<!-- section end  -->

	<section class="sec-pad r-bg-a ">
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
@endsection
@section('custom_script')
@include('include.preview-script');
@endsection