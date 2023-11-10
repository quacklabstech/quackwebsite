<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>Quacklabs</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('join-team/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('join-team/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('join-team/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('join-team/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('join-team/css/custom.css')}}" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="{{asset('join-team/js/modernizr.js')}}"></script>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
    <!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div>
    <!-- /loader_form -->
	

	<!-- /menu -->
	
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                <a href="/" id="logo"><img src="{{asset('../images/logo-white.png')}}" alt="join-team-logo-whites"  height="45"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="https://www.facebook.com/quacklabs/" target="_blank"><i class="icon-facebook"></i></a></li>
	                        <li><a href="https://twitter.com/quacklabs" target="_blank"><i class="icon-twitter"></i></a></li>
	                        <li><a href="https://in.linkedin.com/company/quacklabs" target="_blank"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <figure><img src="{{asset('join-team/img/hands.png')}}" alt="hand-img" class="img-fluid" width="200" height="200"></figure>
	                    <h2>Join The Team</h2>
	                    <p>we value innovation and creative problem-solving. We are looking for team members who can think outside the box and bring new ideas to the table.</p>
	                </div>
	                <div class="copy">© <script>document.write(new Date().getFullYear())</script> Quacklabs Technologies</div>
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>
	        <!-- /content-left -->
	        <div class="col-xl-8 col-lg-8 content-right" id="start">
	            <div id="wizard_container">
	                <div id="top-wizard">
	                    <span id="location"></span>
	                    <div id="progressbar"></div>
	                </div>
	                <!-- /top-wizard -->
	                <form id="wrapped" method="post">
	                    <input id="website" name="website" type="text" value="">
	                    <!-- Leave for security protection, read docs for details -->
	                    <div id="middle-wizard">
	                        <div class="step">
	                            <h2 class="section_title">Presentation</h2>
	                            <h3 class="main_question">Personal info</h3>
	                            <div class="form-group add_top_30">
	                                <label for="name">First and Last Name</label>
	                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="email">Email Address</label>
	                                <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="phone">Phone</label>
	                                <input type="text" name="phone" id="phone" class="form-control required">
	                            </div>
								<label>Gender</label>
								<div class="form-group radio_input">
								    <label class="container_radio me-3">Male
								        <input type="radio" name="gender" value="Male" class="required">
								        <span class="checkmark"></span>
								    </label>
								    <label class="container_radio">Female
								        <input type="radio" name="gender" value="Female" class="required">
								        <span class="checkmark"></span>
								    </label>
								</div>
	                            <div class="form-group add_bottom_30 add_top_20">
	                                <label>Upload Resume<br><small>(File accepted: .pdf, .doc/docx - Max file size: 150KB)</small></label>
	                                <div class="fileupload">
	                                    <input type="file" name="fileupload" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="required">
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Start Branch ============================== -->
	                        <div class="step" data-state="branchtype">
	                            <h2 class="section_title">Work Availability</h2>
	                            <h3 class="main_question">Are you available for work?</h3>
	                            <div class="form-group">
	                                <label class="container_radio version_2">Full time availability
	                                    <input type="radio" name="availability" value="Full-time" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Part time availability
	                                    <input type="radio" name="availability" value="Part-time" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Freelance / Contract availability
	                                    <input type="radio" name="availability" value="Freelance-Contract" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </div>
	                            <small>* Start branch radio based </small>
	                        </div>

	                        <!-- /Work Availability > Full-time ============================== -->
	                        <div class="branch" id="Full-time">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Full Time" availability</h3>
	                                <div class="form-group add_bottom_30">
	                                    <label>Minimum salary?</label>
	                                    <label for="minimum_salary_full_time">Choose a range</label>
	                                    <div class="styled-select">
	                                        <select class="form-control required" id="minimum_salary_full_time" name="minimum_salary_full_time">
	                                            <option value="">Choose a range</option>
	                                            <option value="&lt;10k">&lt;10k</option>
	                                            <option value="10-15k">10-15k</option>
	                                            <option value="15-20k">15-20k</option>
	                                            <option value="20-25k">20-25k</option>
	                                            <option value="25-30k">25-30k</option>
	                                            <option value="30-35k">30-35k</option>
	                                            <option value="35-40k">35-40k</option>
	                                            <option value="45-50k">45-50k</option>
	                                            <option value="&gt;50k">&gt;50k</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group add_bottom_30">
	                                    <label>How soon would you be looking to start?</label>
	                                    <label for="start_availability_full_time">Choose your availability</label>
	                                    <div class="styled-select">
	                                        <select class="form-control required" id="start_availability_full_time" name="start_availability_full_time">
	                                            <option value="">Choose your availability</option>
	                                            <option value="I can start immediately">I can start immediately</option>
	                                            <option value="I need to give 2 or 4 weeks notice">I need to give 2–4 weeks notice</option>
	                                            <option value="I am passively browsing">I am passively browsing</option>
	                                            <option value="I will be available in a couple months">I will be available in a couple months</option>
	                                            <option value="I am not sure">I am not sure</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <label class="custom">Are you willing to work remotely?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio me-3">Yes
	                                        <input type="radio" name="remotely_full_time" value="Yes" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No
	                                        <input type="radio" name="remotely_full_time" value="No" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Work Availability > Part-time ============================== -->
	                        <div class="branch" id="Part-time">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Part Time" availability</h3>
	                                <div class="form-group add_bottom_30">
	                                    <label>Minimum salary?</label>
	                                    <label for="minimum_salary_part_time">Choose a range</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="minimum_salary_part_time" name="minimum_salary_part_time">
	                                            <option value="">Choose a range</option>
	                                            <option value="&lt;2k">&lt;2k</option>
	                                            <option value="3-5k">3-5k</option>
	                                            <option value="5-7k">5-7k</option>
	                                            <option value="7-10k">7-10k</option>
	                                            <option value="&gt;10k">&gt;10k</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group add_bottom_30">
	                                    <label>How soon would you be looking to start?</label>
	                                     <label for="start_availability_part_time">Choose your availability</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="start_availability_part_time" name="start_availability_part_time">
	                                            <option value="">Choose your availability</option>
	                                            <option value="I can start immediately">I can start immediately</option>
	                                            <option value="I need to give 2 or 4 weeks notice">I need to give 2–4 weeks notice</option>
	                                            <option value="I am passively browsing">I am passively browsing</option>
	                                            <option value="I will be available in a couple months">I will be available in a couple months</option>
	                                            <option value="I am not sure">I am not sure</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <label class="custom">When you prefer to work?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio me-3">Morning
	                                        <input type="radio" name="day_preference_part_time" value="Morning" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio me-3">Afternoon
	                                        <input type="radio" name="day_preference_part_time" value="Afternoon" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No Preferences
	                                        <input type="radio" name="day_preference_part_time" value="No Preferences" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Work Availability > Freelance-Contract ============================== -->
	                        <div class="branch" id="Freelance-Contract">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Freelance/Contract" availability</h3>
	                                <div class="form-group">
	                                    <label for="fixed_rate_contract">Minimum fixed rate? (in USD)</label>
	                                    <input type="text" name="fixed_rate_contract" id="fixed_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="hourly_rate_contract">Minimum hourly rate? (in USD)</label>
	                                    <input type="text" name="hourly_rate_contract" id="hourly_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="minimum_hours_conctract">Minimum hours for a contract?</label>
	                                    <input type="text" name="minimum_hours_conctract" id="minimum_hours_conctract" class="form-control required">
	                                </div>
	                                <label class="custom">Are you willing to work remotely?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio me-3">Yes
	                                        <input type="radio" name="remotely_contract" value="Yes" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No
	                                        <input type="radio" name="remotely_contract" value="No" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <div class="submit step" id="end">
	                            <div class="summary">
	                                <div class="wrapper">
	                                    <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
	                                    <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
	                                </div>
	                                <!-- <div class="text-center">
	                                    <div class="form-group terms">
	                                        <label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a> before Submit
	                                            <input type="checkbox" name="terms" value="Yes" class="required">
	                                            <span class="checkmark"></span>
	                                        </label>
	                                    </div>
	                                </div> -->
	                            </div>
	                        </div>
	                        <!-- /step last-->

	                    </div>
	                    <!-- /middle-wizard -->
	                    <div id="bottom-wizard">
	                        <button type="button" name="backward" class="backward">Prev</button>
	                        <button type="button" name="forward" class="forward">Next</button>
	                        <button type="submit" name="process" class="submit d-none">Submit</button>
	                    </div>
	                    <!-- /bottom-wizard -->
	                </form>
	            </div>
	            <!-- /Wizard container -->
	        </div>
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="{{asset('join-team/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('join-team/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('join-team/js/velocity.min.js')}}"></script>
	<script src="{{asset('join-team/js/common_functions.js')}}"></script>
	<script src="{{asset('join-team/js/file-validator.js')}}"></script>

	<!-- Wizard script-->
	<script src="{{asset('join-team/js/func_1.js')}}"></script>

</body>
</html>