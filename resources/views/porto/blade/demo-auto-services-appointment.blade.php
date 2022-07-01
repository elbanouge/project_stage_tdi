@extends('porto.app')
@section('header')
@include('porto.partials.header.header-15')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-58')

				<div class="container my-5 pt-4 pb-5">
					<div class="row mb-3">
						<div class="col">
							<p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
							<p>Quisque efficitur ligula at erat lobortis luctus vitae eget lectus. Nullam vel massa bibendum nulla sollicitudin finibus. Etiam tincidunt ut turpis vulputate auctor. Cras at enim ac urna fringilla feugiat. Cras accumsan metus eget maximus fringilla. </p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your appointment has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your appointment.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
                                
                                <div class="form-row">
                                	<div class="col">
                                		<h2 class="text-color-dark font-weight-bold text-4-5 mb-3">Personal Information:</h2>
                                	</div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3">
                                        <input type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control" name="firstName" id="firstName" required placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control" name="lastName" id="lastName" required placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6 mb-3">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required placeholder="E-mail Address">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input type="email" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="phone" id="phone" required placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-row">
                                	<div class="col">
                                		<h2 class="text-color-dark font-weight-bold text-4-5 mb-3">Vehicle Information:</h2>
                                	</div>
                                </div>
                                <div class="form-row pb-2 mb-4">
	                                <div class="form-group col-md-4 mb-md-0">
		                                <div class="custom-select-1 custom-select-1-arrow-position">
											<select class="form-control" name="make" data-msg-required="Please select make of vehicle." required>
												<option value="">Make</option>
												<option value="lorem">LOREM</option>
												<option value="ipsum">IPSUM</option>
												<option value="dolor">DOLOR</option>
												<option value="sit">SIT</option>
												<option value="met">MET</option>
											</select>
										</div>
									</div>
	                                <div class="form-group col-md-4 mb-md-0">
	                                    <input type="text" value="" data-msg-required="Please enter model of vehicle." maxlength="100" class="form-control" name="model" id="model" required placeholder="Model">
	                                </div>
	                                <div class="form-group col-md-4 mb-md-0">
	                                    <input type="text" value="" data-msg-required="Please enter year of vehicle." maxlength="100" class="form-control" name="year" id="year" required placeholder="Year">
	                                </div>
	                            </div>
	                            <div class="form-row">
                                	<div class="col">
                                		<h2 class="text-color-dark font-weight-bold text-4-5 mb-3">Tell Us Your Reason For Shceduling An Appointment:</h2>
                                	</div>
                                </div>
                                <div class="form-row mb-3">
	                                <div class="form-group col">
		                                <textarea maxlength="5000" data-msg-required="Please enter your reason." rows="10" class="form-control" name="reason" id="reason" required></textarea>
									</div>
	                            </div>
	                            <div class="form-row">
                                	<div class="col">
                                		<h2 class="text-color-dark font-weight-bold text-4-5 mb-1">Choose Date and Time:</h2>
                                	</div>
                                </div>
                                <div class="form-row mb-2">
                                	<div class="col-lg-6">
                                		<div class="form-row">
                                			<div class="col">
                                				<p class="font-weight-semibold mb-2">FIRST CHOICE</p>
                                			</div>
                                		</div>
                                		<div class="form-row">
		                                	<div class="form-group col-md-6">
			                                    <input type="text" value="" data-msg-required="Please select a date." maxlength="100" class="form-control custom-datepicker" name="firstDate" id="firstDate" required placeholder="Date">
			                                </div>
			                                <div class="form-group col-md-6">
			                                    <input type="text" value="" data-msg-required="Please select a time." maxlength="100" class="form-control custom-timepicker" name="firstTime" id="firstTime" required placeholder="Time">
			                                </div>
			                            </div>
		                            </div>
		                            <div class="col-lg-6">
                                		<div class="form-row">
                                			<div class="col">
                                				<p class="font-weight-semibold mb-2">SECOND CHOICE</p>
                                			</div>
                                		</div>
                                		<div class="form-row">
			                                <div class="form-group col-md-6">
			                                    <input type="text" value="" data-msg-required="Please select a date." maxlength="100" class="form-control custom-datepicker" name="secondDate" id="secondDate" required placeholder="Date">
			                                </div>
			                                <div class="form-group col-md-6">
			                                    <input type="text" value="" data-msg-required="Please select a time." maxlength="100" class="form-control custom-timepicker" name="secondTime" id="secondTime" required placeholder="Time">
			                                </div>
			                            </div>
		                            </div>
                                </div>
                                <div class="form-row pb-2 mb-4">
                                	<div class="col">
                                		<div class="alert alert-warning custom-alert-bg-color-1">
                                			<p class="text-2 mb-0"><i class="fas fa-info-circle mr-1"></i> Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</p>
                                		</div>
                                	</div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col mb-0">
                                        <button type="submit" class="btn btn-primary btn-modern font-weight-bold custom-btn-border-radius custom-btn-arrow-effect-1 text-3 px-5 py-3" data-loading-text="Loading...">
                                        	SUBMIT
                                        	<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
											</svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>

				<section class="section bg-transparent position-relative border border-right-0 border-bottom-0 border-left-0 z-index-1 m-0 p-0">
					<div class="container py-4">
						<div class="row align-items-center text-center py-5">
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;">
							</div>
							<div class="col-sm-4 col-lg-2">
								<img src="img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;">
							</div>
						</div>
					</div>
					<svg class="custom-svg-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 193 495">
						<path fill="#1C5FA8" d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"></path>
						<path fill="none" stroke="#FFF" stroke-width="1.5" stroke-miterlimit="10" d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"></path>
					</svg>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 mt-0">
				<div class="container py-5">
					<div class="row py-3">
						<div class="col-md-4 mb-5 mb-md-0">
							@include('porto.partials.feature-box.feature-box-9')
						</div>
						<div class="col-md-4 mb-5 mb-md-0">
							@include('porto.partials.feature-box.feature-box-10')
						</div>
						<div class="col-md-4">
							@include('porto.partials.feature-box.feature-box-11')
						</div>
					</div>
				</div>
				<hr class="bg-light opacity-2 my-0">
				<div class="container pb-5">
					<div class="row text-center text-md-left py-4 my-5">
						<div class="col-md-6 col-lg-3 align-self-center text-center text-md-left text-lg-center mb-5 mb-lg-0">
							<a href="demo-auto-services.html" class="text-decoration-none">
								<img src="img/demos/auto-services/logo-light.png" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">About Us</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">ADDRESS</span> 
									<a href="demo-auto-services-contact.html#get-direction" class="text-color-light custom-text-underline-1 font-weight-medium text-3-5">GET DIRECTIONS</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
									<ul class="list list-unstyled font-weight-light text-3-5 mb-0">
										<li class="text-color-light line-height-3 mb-0">
											Sales: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
										<li class="text-color-light line-height-3 mb-0">
											Services: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
									</ul>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
									<a href="mailto:mail@example.com" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">mail@example.com</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-md-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Auto Services</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Brake Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Check Engine</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Suspension Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Transmission Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">A/C Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Oil Change</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Electrical Diagnostics</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Tune Up</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Fuel System Repair</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Opening Hours</h5>
							<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
								<li>Mon - Fri: 8:30 am to 5:00 pm</li>
								<li>Saturday: 9:30 am to 1:00 pm</li>
								<li>Sunday: Closed</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-5', ['key' => 'footer-copyright.footer-copyright-5'])
			</footer>
@endsection
