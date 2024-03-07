@extends('master_layout')
@section('csslink')
<style>
    .con-col {
        color: rgb(82, 82, 93) !important;
        font-size: 18px !important;
    }
</style>
@endsection
@section('content')
	<!--contact info-->
	<div class="contact-head-sec r-bg-a pt85 pb120" id="contact">
		<div class="container">
			<div class="row pt80">
				<div class="col-lg-5 vcenter">
					<div class="page-headings">
						<span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> Let's Talk</span>
						<h1 class="mb15">Good talks make good projects</h1>
						<p>We would be happy to hear from you, Please fill in the form below or mail us your requirements.</p>

					</div>
				</div>
				<div class="col-lg-7 vcenter">
					<div class="row">
						<div class="col-lg-6 m-mt30">
							<div class="contact-details-block">
								<div class="ree-row-set">
									<div class="ree-icon-set dtb-icon"> <i class="fas fa-phone-alt"></i> </div>
									<div class="ree-details-set dtb-details">
										<span>Sales Department</span>
										<a href="tel:+911234567890"> +91 1234567890 </a>
										<a href="tel:+911234567890"> +91 1234567890 </a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-mt30">
							<div class="contact-details-block">
								<div class="ree-row-set">
									<div class="ree-icon-set dtb-icon"> <i class="fas fa-phone-alt"></i> </div>
									<div class="ree-details-set dtb-details">
										<span>HR Department</span>
										<a href="tel:+911234567890"> +91 1234567890 </a>
										<a href="tel:+911234567890"> +91 1234567890 </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt30">
						<div class="col-lg-6">
							<div class="contact-details-block">
								<div class="ree-row-set">
									<div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i> </div>
									<div class="ree-details-set dtb-details">
										<span>Sales Department</span>
										<a href="mailto: sales@quacklabs.co.in"> <span class="">sales@quacklabs.co.in</span> </a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-mt30">
							<div class="contact-details-block">
								<div class="ree-row-set">
									<div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i> </div>
									<div class="ree-details-set dtb-details">
										<span>HR Department</span>
										<a href="mailto: hr@quacklabs.co.in"> <span class="">hr@quacklabs.co.in</span> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--contact info-->
	<div class="contact-form-sec sec-pad r-bg-d">
		<div class="container">

			<div class="row flx-end">
				<div class="col-lg-6">
					<div class="sec-heading m-center">
						<span class="sub-heading mb15">INQUIRY</span>
						<h2 class="mb15"><span class="ree-text rt40">Trusted</span> by The Thousands</h2>
						<p>We would be happy to hear from you, Please fill in the form below or mail us your requirements</p>
					</div>
					<div class="trust-logo-block mt60">
						<ul class="ree-card">
							<li><img src="images/brand-logo/p-logo.png" alt="logo"></li>
							<li><img src="images/brand-logo/p-logo1.png" alt="logo"></li>
							<li><img src="images/brand-logo/p-logo3.png" alt="logo"></li>
							<li><img src="images/brand-logo/p-logo4.png" alt="logo"></li>
							<li><img src="images/brand-logo/p-logo5.png" alt="logo"></li>
							<li><img src="images/brand-logo/p-logo6.png" alt="logo"></li>

						</ul>
					</div>

					<div class="ree-card mt30 trust-review owl-carousel">
						<div class="items">
							<div class="review-text">
								<p>The team is excellent. Accomplished our work before deadline with quality. And they are affordable and well experienced. The team Quacklabs is very professional and understand what their clients needs.</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="images/users/kalyan.jpg" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Kalyan Sahoo</h5>
										<p>Founder Of Transtrack Aeroservices</p>
									</div>
								</div>
							</div>
						</div>

						<div class="items">
							<div class="review-text">
								<p>According to my experience with Digital Corsel ,they done a great job, as they have best services & new techniques of marketing. Even they complete all work on time. They have Better & clear idea of working on the task. I feel I made a good choice choosing them.</p>
							</div>
							<div class="ree-row-set mt30">
								<div class="media vcenter">
									<div class="ree-icon-set img-round80"><img src="images/users/nibedita.jpg" alt="img" class="img-fluid"></div>
									<div class="ree-details-set user-info">
										<h5>Nibedita Sahoo</h5>
										<p>Hr at CRPL</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-contact-hom m-mt60">
						<div class="form-block bg-w">
							<div class="form-head">
								<h4>Please fill in the form below or mail us your requirements :)</h4>
							</div>
							<div class="form-body">
								<form action="#" method="post" name="feedback-form">
									<div class="fieldsets row">
										<div class="col-md-6"><input type="text" placeholder="Full Name" name="name"></div>
										<div class="col-md-6"><input type="email" placeholder="Email Address" name="email"></div>
									</div>
									<div class="fieldsets row">
										<div class="col-md-6"><input type="number" placeholder="Contact Number" name="phone"></div>
										<div class="col-md-6"><input type="text" placeholder="Skype" name="skype"></div>
									</div>
									<div class="fieldsets row">

										<div class="col-md-6"><input type="text" placeholder="Subject" name="subject"></div>
										<div class="col-md-6"><select>
												<option>interested in</option>
												<option>Web Design</option>
												<option>Graphic Design</option>
												<option>App Development</option>
												<option>Digital Marketing</option>
												<option>Business Development</option>
												<option>Other...</option>
											</select></div>
									</div>
									<div class="fieldsets"><textarea placeholder="Message" name="message"></textarea></div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
										<label class="custom-control-label label-f-form" for="customCheck">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of Reevan.</label>
									</div>
									<div class="fieldsets mt20"> <button type="submit" name="submit" class="ree-btn  ree-btn-grdt1 w-100">Send your inquiry <i class="fas fa-arrow-right fa-btn"></i></button> </div>
									<p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>

									<div class="form-btm-set text-center mt15">
										<h5>We Deliver</h5>

										<div class="icon-setss mt20">

											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/money.svg" alt="#"></div>
												<div class="icon-txt">
													<p>Best Price</p>
												</div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/quality.svg" alt="#"></div>
												<div class="icon-txt">
													<p>Quality Service</p>
												</div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/call-agent.svg" alt="#"></div>
												<div class="icon-txt">
													<p>Good Support</p>
												</div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/satisfaction.svg" alt="#"></div>
												<div class="icon-txt">
													<p>Satisfaction</p>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--contact info end-->


	<!-- start locations -->
	<section class="location-sec sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="sec-heading text-center">
						<span class="sub-heading mb15">Find Us</span>
						<h2>Our <span class="ree-text rt40">Office</span> Details</h2>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="location-block- mt60">
						<div class="loc-icon-nam">
							<img src="images/icons/office-building.png" alt="new-delhi">
							<p>Our Address</p>
						</div>
						<p class="pt20 pb20"> N 6/9, Block N6, IRC Village, Nayapalli, Bhubaneswar, Odisha 751015</p>
						<!-- <div class="loc-contct">
							<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Map Location"><i class="fas fa-map-marker-alt"></i></a>
							<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt"></i></a>
							<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope"></i></a>
							<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Skype Id"><i class="fab fa-skype"></i></a>
						</div> -->
					</div>
				</div>
				<div class="col-lg-4">
					<div class="location-block- mt60">
						<div class="loc-icon-nam">
							<img src="images/icons/smartphone.png" alt="burj-al-arab">
							<p>Contact Details</p>
						</div>
						<p class="pt20 pb-0"><a href="tel: +919861556688" class="btn-outline rount-btn con-col" data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt mr-3"></i>+91 9861556688</a></p>
						<p class="pt10 pb20"><a href="mailto: info@quacklabs.in" class="btn-outline rount-btn con-col" data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope mr-3"></i>info@quacklabs.in</a></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="location-block- mt60">
						<div class="loc-icon-nam">
							<img src="images/icons/clock.png" alt="big-ben">
							<p>Working Hours</p>
						</div>
						<p class="pt20 pb-0">We are available on our working hours.</p>
						<p class="pt10 pb20"><a href="#" class="btn-outline rount-btn con-col" data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope mr-3"></i>Monday - Friday: 09:00 - 07:00</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end locations -->
	<section>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.1348641910854!2d85.81528591460201!3d20.294684117808078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909e5b8d8c2c9%3A0xc8e133d9ceafc773!2sQuacklabs%20Technologies!5e0!3m2!1sen!2sin!4v1670838746516!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
@endsection