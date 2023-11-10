@extends('master_layout')
@section('csslink')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<style>
    .mt-60 {
      margin-top: 60px;
    }

    .lifeAtQuack img{
      border: 5px solid #f7f7f7;
      border-radius: 6px;
      box-shadow: 0 5px 40px 0 rgba(0,0,0,.11);
      overflow: hidden !important;
    }
    .lifeAtQuack img:hover{
        transform: scale(1.1);
        transition: all 0.5s ease;
    }

  </style>
@endsection
@section('content')

  <!-- Header title -->
  <section class="header-title head-opacity" data-background="{{asset('images/banner/life-at-quack.jpg')}}">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <h2 class="mb15">Life @ Quack</h2>
          <p class="h-light">We don’t just grasp change, we create it. It is not just about the work you do, it’s about making every day count.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Header title end -->


  <!--page head-->
  <div class="port-head-sec sec-pad r-bg-x">
    <div class="container">
      <div class="row vcenter">
        <div class="col-lg-6">
          <div class="page-headings">
            <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Work Enjoy Repert</span>
            <h1 class="mb15" data-aos="fade-up" data-aos-delay="400">Life At QuackLabs</h1>
            <p class="h-light" data-aos="fade-up" data-aos-delay="600">At QuackLabs, work is fun! We delight all the obstacles, overcome them and celebrate our victory together. We offer a challenging, performance-driven environment where results are recognized and rewarded, a career with freedom, full of learning and development opportunities which help you achieve your best.</p>
            <a href="./join-team/" class="port-links mt40" data-aos="fade-up" data-aos-delay="800">Join Our Team <i class="fas fa-arrow-right fa-btn"></i></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/team/life1.jpg')}}" alt="our-staff" title="life-at-quack-img-one" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </div>
  <!--page head end-->

  <!--team members-->
  <section class="r-bg-a sec-pad">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <div class="page-headings">
            <h2 class="mb15">Celebrations And <span class="ree-text rt40">Festivals</span></h2>
            <p class="mt15">Meet the team of innovative, driven and passionate individuals</p>
          </div>
        </div>
      </div>
      <!-- gallery -->
      <div class="gallery lifeAtQuack mt-60">
        <div class="row">
          <div class="col-lg-3 mb20 col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/life2.jpg')}}" >
              <img src="{{asset('images/team/life2.jpg')}}" alt="life-at-quack-two" title="life-at-quack" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 mb20  col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/life3.jpg')}}">
              <img src="{{asset('images/team/life3.jpg')}}" alt="life-at-quack-three" title="life-at-quack" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 mb20  col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/life4.jpg')}}">
              <img src="{{asset('images/team/life4.jpg')}}" alt="life-at-quack-four" title="life-at-quack" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 mb20  col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/life5.jpg')}}">
              <img src="{{asset('images/team/life5.jpg')}}" alt="life-at-quack-five" title="life-at-quack" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 mb20 col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/life6.jpeg')}}">
              <img src="{{asset('images/team/life6.jpeg')}}" alt="life-at-quack-six" title="life-at-quack" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 mb20  col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/our-staff.jpg')}}">
              <img src="{{asset('images/team/our-staff.jpg')}}" alt="life-at-quack-seven" title="life-at-quack" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 mb20  col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/our-staff.jpg')}}">
              <img src="{{asset('images/team/our-staff.jpg')}}" alt="life-at-quack-eight" title="life-at-quack" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 mb20  col-md-6 col-sm-6 col-12">
            <a href="{{asset('images/team/our-staff.jpg')}}">
              <img src="{{asset('images/team/our-staff.jpg')}}" alt="life-at-quack-nine" title="life-at-quack"s class="img-fluid">
            </a>
          </div>
      
        </div>
      </div>
    </div>
  </section>
  <!---team members end-->
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

							<a href="./join-team/" class="ree-btn  ree-btn-grdt1 mt40 mw-80">Join Our Team <i class="fas fa-arrow-right fa-btn"></i></a>
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
@section('custom_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js"></script>
<!-- magnific -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function() {
    $('.lifeAtQuack').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    })
  });
</script>
@endsection