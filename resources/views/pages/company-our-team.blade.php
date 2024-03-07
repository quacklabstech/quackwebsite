@extends('master_layout')
@section('content')


  <!-- Header title -->
  <section class="header-title head-opacity" data-background="{{asset('images/banner/team.jpg')}}">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <h2 class="mb15">Our Team</h2>
          <p class="h-light">We are always striving to stay ahead of the curve and innovate to make sure our customers get the most out of their experience with us.</p>
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
            <span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200">Our Team</span>
            <h1 class="mb15" data-aos="fade-up" data-aos-delay="400">Teamwork is the ability to work together toward a common vision</h1>
            <p class="h-light" data-aos="fade-up" data-aos-delay="600">Meet the team of innovative, driven and passionate individuals. We cultivate the diverse talents of our team and leverage their extraordinary perspectives and innovative ideas to make Sapphire the industry leader.</p>
            <a href="/company/about/our-team" class="port-links mt40" data-aos="fade-up" data-aos-delay="800">Join Our Team <i class="fas fa-arrow-right fa-btn"></i></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="sol-img m-mt30" data-aos="fade-in" data-aos-delay="400"><img src="{{asset('images/team/life2.jpg')}}" alt="our-staff" title="our-staff" class="img-fluid"></div>
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
            <h2 class="mb15">Meet the <span class="ree-text rt40">Team </span></h2>
            <p class="mt15">Meet the team of innovative, driven and passionate individuals</p>
          </div>
        </div>
      </div>
      <div class="row our-team">
        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-5">
          <div class="ree-media-crd h-100">
            <div class="rpl-img team-img" data-background="{{asset('images/team/akash.png')}}">
              <div class="icons">
                <a href="https://www.facebook.com/d.ace.akash.annu/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/d_ace_akash_annu/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Akash Kumar</h4>
              <p>Sr. Fullstack Developer</p>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-5">
          <div class="ree-media-crd h-100">
            <div class="rpl-img team-img" data-background="{{asset('images/team/alok.png')}}">
              <div class="icons">
                <a href="https://www.linkedin.com/pulse/finally-completed-my-portfolio-alok-kumar-gochhayat?trk=public_profile_article_view" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/alok.css/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Alok Kumar Gochhayat</h4>
              <p>UI/UX Engineer</p>
            </div>
          </div>
        </div> --}}
        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-5">
          <div class="ree-media-crd h-100">
            <div class="rpl-img team-img" data-background="{{asset('images/team/alok.png')}}">
              <div class="icons">
                <a href="https://www.linkedin.com/pulse/finally-completed-my-portfolio-alok-kumar-gochhayat?trk=public_profile_article_view" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/alok.css/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Alok Kumar Gochhayat</h4>
              <p>UI/UX Engineer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-5">
          <div class="ree-media-crd h-100">
            <div class="rpl-img team-img" data-background="{{asset('images/team/sarit.png')}}">
              <div class="icons">


                <a href="https://www.facebook.com/saritkumarhota" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/in/saritkumarhota/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/sariit__/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Sarit Kumar Hota</h4>
              <p>Junior Developer</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-5">
          <div class="ree-media-crd h-100">
            <div class="rpl-img team-img" data-background="{{asset('images/team/dipti.png')}}">
              <div class="icons">
                <a href="https://twitter.com/Shrijatinranjan/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/shrijatinranjan" target="_blank"><i class="fab fa-linkedin"></i></a>

              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Diptiranjan Jena</h4>
              <p>SEO Executive</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="ree-media-crd">
            <div class="rpl-img team-img" data-background="{{asset('images/team/saroj.png')}}">
              <div class="icons">
                <a href="https://www.instagram.com/sarojkumarswain24/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Saroj Kumar Swain</h4>
              <p>UI Developer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="ree-media-crd">
            <div class="rpl-img team-img" data-background="{{asset('images/team/sawan.jpeg')}}">
              <div class="icons">
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/s-sawan-kumar-achary-a4b20316b" target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>S Sawan Kumar Achary</h4>
              <p>Laravel Developer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="ree-media-crd">
            <div class="rpl-img team-img" data-background="{{asset('images/team/saroj.png')}}">
              <div class="icons">
                <a href="https://www.instagram.com/sarojkumarswain24/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Saroj Kumar Swain</h4>
              <p>UI Developer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="ree-media-crd">
            <div class="rpl-img team-img" data-background="{{asset('images/team/saroj.png')}}">
              <div class="icons">
                <a href="https://www.instagram.com/sarojkumarswain24/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="rpl-contt pt20">
              <h4>Saroj Kumar Swain</h4>
              <p>UI Developer</p>
            </div>
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

							<a href="/quacklabs/join-team" class="ree-btn  ree-btn-grdt1 mt40 mw-80">Join Our Team <i class="fas fa-arrow-right fa-btn"></i></a>
						</div>
					</div>
					<div class="col-lg-6 vcenter">
						<div class="ct-sol-img">
							<img src="{{asset('images/cta/teamwork.svg')}}" alt="team" title="team" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end career cta-->
@endsection