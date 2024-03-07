@extends('master_layout')
@section('content')

    <!-- Header title -->
    <section class="header-title head-opacity" data-background="{{asset('images/banner/milestone.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="mb15">Future Outlook</h1>
                    <p class="h-light">we are constantly pushing the boundaries</p>
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
                        <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Future Outlook</span>
                        <h2 data-aos="fade-up" data-aos-delay="400">Shaping the future, one step at a time.<span class="ree-text rt45">one step at a time.</span></h2>
                        <p class="mt30" data-aos="fade-up" data-aos-delay="600">As a leading technology company, we are constantly pushing the boundaries of what is possible with our innovative products and solutions. In the coming years, we believe that technology will play an increasingly important role in shaping the world around us.</p>
                        <p class="mt30" data-aos="fade-up" data-aos-delay="600">One of the key areas where we see huge potential is in the realm of artificial intelligence. AI has already begun to transform industries from healthcare to finance, and we believe that its capabilities will only continue to grow in the coming years. We are investing heavily in research and development in this area, and are confident that our cutting-edge AI technology will help us to continue to lead the way in this exciting field.</p>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sol-img m-mt30">
                        <img src="{{asset('images/fureture-outlook.png')}}" alt="quacklabs" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
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
                        <img src="{{asset('images/others/team-business1.png')}}" alt="quacklabs" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="pera-block">
                        <h2>Transforming ideas into <span class="ree-tt">reality</span></h2>
                        <p>At our technology company, we believe in taking a unique approach to problem-solving and innovation. Rather than simply following the crowd and copying what others are doing, we strive to think outside of the box and come up with truly original solutions.</p>
                        <p>Another key aspect of our unique approach is our commitment to staying at the forefront of technology. We invest heavily in research and development, and are constantly exploring new technologies and methods that can help us to create better products and services.</p>
                        <!-- <p>One of the key elements of our unique approach is our focus on collaboration. We believe that the best solutions are created when different perspectives and expertise come together. That's why we work closely with our clients to understand their needs and goals, and we involve them in every step of the development process.</p> -->
                    </div>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-lg-12 mt30">
                    <div class="pera-block">
                        <p>Overall, we are optimistic about the future of technology and the role that our company will play in driving innovation and progress. We are committed to continuing to develop products and solutions that will make a real difference in the world, and we are excited to see what the future holds.</p>
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