@extends('master_layout')
@section('csslink')
<style>
    .timeline {
        position: relative;
        width: 100%;
        max-width: 1140px;
        margin: 0 auto;
        padding: 15px 0;
    }

    .timeline::after {
        content: '';
        position: absolute;
        width: 2px;
        background: #692e97;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -1px;
    }

    .quack-mile {
        padding: 15px 30px;
        position: relative;
        background: inherit;
        width: 50%;
    }

    .quack-mile.left {
        left: 0;
    }

    .quack-mile.right {
        left: 50%;
    }

    .quack-mile::after {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        top: calc(50% - 8px);
        right: -8px;
        background: #ffffff;
        border: 2px solid #692e97;
        border-radius: 16px;
        z-index: 1;
    }

    .quack-mile.right::after {
        left: -8px;
    }

    .quack-mile::before {
        content: '';
        position: absolute;
        width: 50px;
        height: 2px;
        top: calc(50% - 1px);
        right: 8px;
        background: #692e97;
        z-index: 1;
    }

    .quack-mile.right::before {
        left: 8px;
    }

    .quack-mile .date {
        position: absolute;
        display: inline-block;
        top: calc(50% - 8px);
        text-align: center;
        font-size: 14px;
        font-weight: bold;
        color: #692e97;
        text-transform: uppercase;
        letter-spacing: 1px;
        z-index: 1;
    }

    .quack-mile.left .date {
        right: -75px;
    }

    .quack-mile.right .date {
        left: -75px;
    }

    .quack-mile .icon {
        position: absolute;
        display: inline-block;
        width: 40px;
        height: 40px;
        padding: 9px 0;
        top: calc(50% - 20px);
        background: #fff;
        border: 2px solid #692e97;
        border-radius: 40px;
        text-align: center;
        font-size: 18px;
        color: #692e97;
        z-index: 1;
    }

    .quack-mile.left .icon {
        right: 56px;
    }

    .quack-mile.right .icon {
        left: 56px;
    }

    .quack-mile .content {
        padding: 30px 90px 30px 30px;
        background: #F6D155;
        position: relative;
        border-radius: 0 500px 500px 0;
        box-shadow: 0 10px 15px -2px rgb(82 0 57/8%);
        background-color: #ffffff;
    }

    .quack-mile.right .content {
        padding: 30px 30px 30px 90px;
        border-radius: 500px 0 0 500px;
    }

    .quack-mile .content h2 {
        margin: 0 0 10px 0;
        font-size: 18px;
        font-weight: normal;
        color: #692e97;
        font-weight: 600;
    }

    .quack-mile .content p {
        margin: 0;
        font-size: 16px;
        line-height: 22px;
        color: #000000;
    }

    @media (max-width: 767.98px) {
        .timeline::after {
            left: 90px;
        }

        .timeline::after,
        .date,
        .quack-mile .icon,
        .quack-mile::after,
        .quack-mile::before {
            display: none !important;
        }

        .quack-mile {

            padding-left: 0px !important;
            padding-right: 30px;
        }

        .quack-mile {
            width: 100%;
            padding-left: 120px;
            padding-right: 30px;
        }

        .quack-mile.right {
            left: 0%;
        }

        .quack-mile.left::after,
        .quack-mile.right::after {
            left: 82px;
        }

        .quack-mile.left::before,
        .quack-mile.right::before {
            left: 100px;
            border-color: transparent #006E51 transparent transparent;
        }

        .quack-mile.left .date,
        .quack-mile.right .date {
            right: auto;
            left: 15px;
        }

        .quack-mile.left .icon,
        .quack-mile.right .icon {
            right: auto;
            left: 146px;
        }

        .quack-mile.left .content,
        .quack-mile.right .content {
            padding: 30px 30px 30px 70px;
        }

        .pl-sm-20 {
            padding-left: 20px !important;
        }
    }
</style>
@endsection
@section('content')
    <!-- Header title -->
    <section class="header-title head-opacity" data-background="{{asset('images/banner/milestone-road.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="mb15">Milestones</h1>
                    <p class="h-light">We are constantly pushing the boundaries of what is possible and strive to be at the forefront of technological innovation.</p>
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
                        <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Milestones</span>
                        <h2 data-aos="fade-up" data-aos-delay="400">key <span class="ree-text rt45">milestones</span> we have achieved so far</h2>
                        <p class="mt30" data-aos="fade-up" data-aos-delay="600">Quacklabs is a technology company that is dedicated to using cutting-edge technology to solve real-world problems. We are constantly pushing the boundaries of what is possible and strive to be at the forefront of technological innovation.</p>
                        <p class="mt15" data-aos="fade-up" data-aos-delay="800">Overall, Quacklabs has been at the forefront of technological innovation and has consistently delivered groundbreaking products and services that have changed the way we live and work. We are excited to continue pushing the boundaries of what is possible and are looking forward to what the future holds.</p>
                        <p class="mt15" data-aos="fade-up" data-aos-delay="800">Here are some of the key milestones we have achieved so far:</p>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sol-img m-mt30">
                        <img src="{{asset('images/milestone-banner.png')}}" alt="mile stone" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--page head end-->



    <!--start company info-->
    <section class="r-bg-a">
        <div class="container">
            <div class="timeline">
                <div class="quack-mile left">
                    <div class="date">2023</div>
                    <i class="icon fa fa-home"></i>
                    <div class="content pl-sm-20">
                        <h2>In 2023</h2>
                        <p class="">
                            Quacklabs successfully developed and released the first-ever AI-powered personal assistant that can understand and respond to natural language queries. This revolutionary technology has changed the way people interact with their devices and has been widely hailed as a major breakthrough.
                        </p>
                    </div>
                </div>
                <div class="quack-mile right">
                    <div class="date">2024</div>
                    <i class="icon fa fa-gift"></i>
                    <div class="content">
                        <h2>In 2024</h2>
                        <p>
                            we released the Quacklabs Smart Home platform, which allows users to easily control and automate their home using voice commands and a single app. This technology has made it easier than ever for people to manage their homes and has been a huge hit with consumers.
                        </p>
                    </div>
                </div>
                <div class="quack-mile left">
                    <div class="date">2025</div>
                    <i class="icon fa fa-user"></i>
                    <div class="content pl-sm-20">
                        <h2>In 2025</h2>
                        <p>
                            we unveiled the Quacklabs Virtual Reality headset, which provides users with an immersive and realistic virtual world experience. This technology has been widely used in gaming, education, and entertainment, and has been praised for its ability to transport users to new and exciting places.
                        </p>
                    </div>
                </div>
                <div class="quack-mile right">
                    <div class="date">2026</div>
                    <i class="icon fa fa-running"></i>
                    <div class="content">
                        <h2>In 2026</h2>
                        <p>
                            we released the Quacklabs Self-Driving Car, which uses advanced AI and sensor technology to navigate roads and traffic. This technology has been a game-changer for the transportation industry and has made it possible for people to get where they need to go safely and efficiently.
                        </p>
                    </div>
                </div>
                <div class="quack-mile left">
                    <div class="date">2027</div>
                    <i class="icon fa fa-cog"></i>
                    <div class="content pl-sm-20">
                        <h2>In 2027</h2>
                        <p>
                            we partnered with major healthcare providers to release the Quacklabs Health Monitor, a wearable device that tracks a user's vital signs and provides real-time health insights. This technology has been instrumental in helping people maintain their health and has been widely adopted by healthcare professionals.
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