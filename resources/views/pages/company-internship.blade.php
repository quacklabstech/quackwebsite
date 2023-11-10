@extends('master_layout')
@section('content')
    <!-- Header title -->
    <section class="header-title head-opacity" data-background="{{asset('images/banner/office.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="mb15">Technical Internships </h1>
                    <p class="h-light">At Quacklabs, the employees are always motivated to go beyond their usual tasks and work, to embrace newer skills, and out-perform themselves in multiple arenas. Below are some of employees speaking on how working with the company has done them good.</p>
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
                        <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Internships</span>
                        <h2 data-aos="fade-up" data-aos-delay="400">The perfect career start is waiting for <span class="ree-text rt45">you</span></h2>
                        <p class="mt30" data-aos="fade-up" data-aos-delay="600">Our interns are a part of Quacklabs—involved and solving problems from the start. As a intern, you are excited about tackling the hard problems in technology. With internships across the globe, ranging from Software Engineering to User Experience, we offer many opportunities to grow with us. The internships below are not exhaustive, but provide a taste of what's available.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sol-img m-mt30">
                        <img src="{{asset('images/internship-background.php')}}" alt="quacklabs office" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page head end-->



    <!--start company info-->
    <!--service expertise-->
    <section class="r-bg-a  sec-pad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="page-headings">
                        <h2>Join our team and make an impact</h2>
                        <p class="mt15"></p>
                    </div>
                </div>
            </div>

            <div class="row mt30">
                <!-- <div class="col-lg-4 col-sm-6">
					<div class="ree-card  mt60">
						<div class="ree-card-img"><img src="images/icons/responsive-design.png" alt="services"> </div>
						<div class="ree-card-content mt40">
							<h3 class="mb15">Tech for social impact</h3>
							<p class="mb-4">This internship is a great opportunity for anyone who is passionate about design and interested in pursuing a career in UI/UX. You will have the chance to learn from experienced professionals and gain hands-on experience in the field.</p>
						</div>						
					</div>
				</div> -->
                <div class="col-lg-6 col-sm-6">
                    <div class="ree-card  mt60">
                        <div class="ree-card-img"><img src="{{asset('./images/icons/diversity.png')}}" alt="services"> </div>
                        <div class="ree-card-content mt40">
                            <h3 class="mb15">Driving innovation through diversity</h3>
                            <p class="mb-0">We empower our quackers to exemplify behavior that fosters a culture of conscious inclusion and belonging, where innovation can thrive. We're dedicated to promoting, advancing and celebrating plurality of thought from those of all backgrounds and experiences.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="ree-card  mt60">
                        <div class="ree-card-img"><img src="{{asset('./images/icons/online-learning.png')}}" alt="services"> </div>
                        <div class="ree-card-content mt40">
                            <h3 class="mb15">Learning new skills every day</h3>
                            <p class="mb-2">you will have the opportunity to learn and contribute to the development of web applications using the React JavaScript library. You will work with a team of experienced developers to create and maintain React applications.</p><br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--service expertise end-->
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