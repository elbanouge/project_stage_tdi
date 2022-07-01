@extends('porto.app')
@section('header')
@include('porto.partials.header.header-23')
@endsection

@section('main')
<div role="main" class="main">
				
				<section id="home" class="section border-0 bg-dark overlay overlay-show overlay-op-8 overflow-hidden m-0" style="height: 100vh;">
					<div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0 animated kenBurnsToLeft" style="background-image: url(img/demos/band/slides/slide-1.jpg); background-size: cover; background-position: center; animation-duration: 20s;"></div>
					<div class="container position-relative z-index-3 h-100">
						<div class="row align-items-center justify-content-center h-100">
							<div class="col-auto pt-5 mt-3">
								<h1>
									<span class="d-none">Porto HTML5 Template - Demo Band</span>
									<svg class="custom-porto-svg-logo" viewbox="0 0 292 80" x="0px" y="0px" width="292px" height="85px">
										<path d="M 48.3077 7.3505 C 43.4299 3.1552 36.1469 1.052 26.4362 1.052 L -0.1678 1.052 L -0.1678 77.6639 L 20.5403 77.6639 L 20.5403 51.888 L 26.3914 51.888 C 35.7218 51.888 42.9265 49.5722 48.0057 44.9405 C 53.0736 40.309 55.6132 33.753 55.6132 25.2505 C 55.6132 17.52 53.1743 11.5571 48.3077 7.3505 L 48.3077 7.3505 ZM 20.5403 17.52 L 25.9439 17.52 C 31.739 17.52 34.6366 20.0483 34.6366 25.0939 C 34.6366 28.0922 33.7081 30.4527 31.8509 32.1532 C 29.9938 33.8538 27.499 34.704 24.3553 34.704 L 20.5403 34.704 L 20.5403 17.52 L 20.5403 17.52 Z" stroke="#ffffff" stroke-width="1" fill="#ffffff"></path>
										<path d="M 118.7302 5.7597 C 112.7719 1.6666 104.9938 -0.38 95.3959 -0.38 C 83.1791 -0.38 73.8712 2.9874 67.4719 9.6999 C 61.0615 16.4124 57.8618 26.1344 57.8618 38.8657 C 57.8618 51.7426 61.0726 61.5428 67.5166 68.2777 C 73.9607 75.0126 83.2128 78.38 95.2953 78.38 C 104.9252 78.38 112.7404 76.3068 118.7302 72.1598 L 118.7302 5.7597 ZM 95.3959 16.804 C 100.5421 16.804 104.4242 18.6276 107.0197 22.2523 C 109.6152 25.8771 110.913 31.4932 110.913 39.1007 C 110.913 46.6859 109.6264 52.2572 107.0757 55.8372 C 104.5137 59.4172 100.5869 61.196 95.2953 61.196 C 84.8796 61.196 79.6774 53.8346 79.6774 39.1007 C 79.6774 24.2437 84.9131 16.804 95.3959 16.804 Z" stroke="#ffffff" stroke-width="1" fill="#ffffff"></path>
										<path d="M 149.3979 49.74 L 165.8884 77.6639 L 189.3821 77.6639 L 166.9735 44.247 C 175.6438 39.3915 179.9846 32.5336 179.9846 23.6731 C 179.9846 8.5924 169.5131 1.052 148.5925 1.052 L 123.3646 1.052 L 123.3646 77.6639 L 144.0728 77.6639 L 144.0728 49.74 L 149.3979 49.74 L 149.3979 49.74 ZM 144.0728 16.804 L 148.2344 16.804 C 155.4392 16.804 159.0527 19.3995 159.0527 24.5681 C 159.0527 30.8555 155.3721 33.988 148.0219 33.988 L 144.0728 33.988 L 144.0728 16.804 L 144.0728 16.804 Z" stroke="#ffffff" stroke-width="1" fill="#ffffff"></path>
										<path d="M 212.3724 18.236 L 237.7653 16.625 L 227.6321 1.052 L 177.8002 1.052 L 186.7502 18.236 L 191.6643 18.236 L 191.6643 77.6639 L 212.3724 77.6639 L 212.3724 18.236 Z" stroke="#ffffff" stroke-width="1" fill="#ffffff"></path>
										<path d="M 253.6318 16.804 C 258.7781 16.804 262.6603 18.6276 265.2556 22.2523 C 267.8513 25.8771 269.1489 31.4932 269.1489 39.1007 C 269.1489 46.6859 267.8624 52.2572 265.3115 55.8372 C 262.7496 59.4172 258.8229 61.196 253.5313 61.196 C 243.1157 61.196 237.9136 53.8346 237.9136 39.1007 C 237.9136 36.0745 238.1273 24.4059 238.5618 21.995 L 216.5537 23.785 C 216.2476 26.2813 216.0979 36.0817 216.0979 38.8657 C 216.0979 51.7426 219.3087 61.5428 225.7527 68.2777 C 232.1965 75.0126 241.4487 78.38 253.5313 78.38 C 265.7703 78.38 275.0784 75.0349 281.4327 68.3336 C 287.7874 61.6436 290.9646 51.8545 290.9646 38.9776 C 290.9646 26.0673 287.7985 16.2894 281.4888 9.6216 C 275.1677 2.9539 265.8821 -0.38 253.6318 -0.38 C 252.1803 -0.38 234.6597 -0.3318 233.2903 -0.2368 L 245.8203 17.2693 C 247.1204 16.9562 252.1108 16.804 253.6318 16.804 Z" stroke="#ffffff" stroke-width="1" fill="#ffffff"></path>
									</svg>
								</h1>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-secondary border-0 py-0 m-0">
					<div class="container container-lg-custom">
						<div class="row custom-borders-divider-style-1">
							<div class="col-sm-6 col-lg-3 text-center px-0">
								<a href="#" class="custom-spotify-hover-effect text-decoration-none text-color-light text-4 d-block py-5 appear-animation" target="_blank" data-appear-animation="fadeInRightShorter"><i class="fab fa-spotify mr-1"></i> SPOTIFY</a>
							</div>
							<div class="col-sm-6 col-lg-3 text-center px-0">
								<a href="#" class="custom-itunes-hover-effect text-decoration-none text-color-light text-4 d-block py-5 appear-animation" target="_blank" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"><i class="fab fa-apple mr-1"></i> ITUNES</a>
							</div>
							<div class="col-sm-6 col-lg-3 text-center px-0">
								<a href="#" class="custom-amazon-hover-effect text-decoration-none text-color-light text-4 d-block py-5 appear-animation" target="_blank" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"><i class="fab fa-amazon mr-1"></i> AMAZON</a>
							</div>
							<div class="col-sm-6 col-lg-3 text-center px-0">
								<a href="#" class="custom-googlemusic-hover-effect text-decoration-none text-color-light text-4 d-block py-5 appear-animation" target="_blank" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"><i class="fab fa-google mr-1"></i> GOOGLE MUSIC</a>
							</div>
						</div>
					</div>
				</section>

				<div id="tour" class="container container-lg-custom py-5 my-5">
					<div class="row mb-4 pb-2">
						<div class="col text-center">
							<svg class="mb-4" width="20" height="72" viewbox="0 0 10 40">
								<line x1="5" x2="5" y1="0" y2="40" stroke="#909294" stroke-width="1" class="appear-animation" data-appear-animation="customSVGLineAnim"></line>
							</svg>
							<div class="overflow-hidden">
								<span class="d-block text-color-light font-weight-bold d-block appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">2021 CONCERTS</span>
							</div>
							<div class="overflow-hidden mb-3">
								<h2 class="font-weight-bold text-9 pb-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Summer Tour Dates</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
							</div>
						</div>
					</div>
					<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
						<div class="custom-tour-wrapper border custom-border-color-1 border-left-0 border-right-0 border-bottom-0">
							<div class="custom-tour-stage">
								<div class="custom-tour-item row align-items-center py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold mb-0">TUE, MAR 12 - 2021</h3>
										<span class="d-block text-color-light line-height-4 opacity-7">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-light opacity-7">Eventim Apollo</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-light opacity-7">London, UK</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-light btn-outline btn-rounded font-weight-semibold text-color-light btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
								<div class="custom-tour-item row align-items-center bg-light py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold text-color-dark mb-0">TUE, MAR 12 - 2021</h3>
										<span class="d-block text-color-dark line-height-4">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-dark">Eventim Apollo</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-dark">London, UK</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-dark btn-outline btn-rounded font-weight-semibold btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="custom-tour-wrapper border custom-border-color-1 border-left-0 border-right-0 border-bottom-0">
							<div class="custom-tour-stage">
								<div class="custom-tour-item row align-items-center py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold mb-0">TUE, MAR 15 - 2021</h3>
										<span class="d-block text-color-light line-height-4 opacity-7">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-light opacity-7">Afas Live</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-light opacity-7">Amsterdam, NH</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-light btn-outline btn-rounded font-weight-semibold text-color-light btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
								<div class="custom-tour-item row align-items-center bg-light py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold text-color-dark mb-0">TUE, MAR 15 - 2021</h3>
										<span class="d-block text-color-dark line-height-4">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-dark">Afas Live</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-dark">Amsterdam, NH</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-dark btn-outline btn-rounded font-weight-semibold btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="custom-tour-wrapper border custom-border-color-1 border-left-0 border-right-0 border-bottom-0">
							<div class="custom-tour-stage">
								<div class="custom-tour-item row align-items-center py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold mb-0">SUN, MAR 17 - 2021</h3>
										<span class="d-block text-color-light line-height-4 opacity-7">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-light opacity-7">Royal Arena</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-light opacity-7">Copenhagen, DN</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-light btn-outline btn-rounded font-weight-semibold text-color-light btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
								<div class="custom-tour-item row align-items-center bg-light py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold text-color-dark mb-0">SUN, MAR 17 - 2021</h3>
										<span class="d-block text-color-dark line-height-4">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-dark">Royal Arena</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-dark">Copenhagen, DN</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-dark btn-outline btn-rounded font-weight-semibold btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="custom-tour-wrapper border custom-border-color-1 border-left-0 border-right-0 border-bottom-0">
							<div class="custom-tour-stage">
								<div class="custom-tour-item row align-items-center py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold mb-0">TUE, MAR 19 - 2021</h3>
										<span class="d-block text-color-light line-height-4 opacity-7">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-light opacity-7">Annexet</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-light opacity-7">Stockholm, UP</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-light btn-outline btn-rounded font-weight-semibold text-color-light btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
								<div class="custom-tour-item row align-items-center bg-light py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold text-color-dark mb-0">TUE, MAR 19 - 2021</h3>
										<span class="d-block text-color-dark line-height-4">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-dark">Annexet</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-dark">Stockholm, UP</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-dark btn-outline btn-rounded font-weight-semibold btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="custom-tour-wrapper border custom-border-color-1 border-left-0 border-right-0 border-bottom-0">
							<div class="custom-tour-stage">
								<div class="custom-tour-item row align-items-center py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold mb-0">TUE, MAR 19 - 2021</h3>
										<span class="d-block text-color-light line-height-4 opacity-7">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-light opacity-7">Spektrum</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-light opacity-7">Oslo, NW</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-light btn-outline btn-rounded font-weight-semibold text-color-light btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
								<div class="custom-tour-item row align-items-center bg-light py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold text-color-dark mb-0">TUE, MAR 19 - 2021</h3>
										<span class="d-block text-color-dark line-height-4">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-dark">Spektrum</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-dark">Oslo, NW</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-dark btn-outline btn-rounded font-weight-semibold btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="custom-tour-wrapper border custom-border-color-1 border-left-0 border-right-0">
							<div class="custom-tour-stage">
								<div class="custom-tour-item row align-items-center py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold mb-0">FRY, MAR 22 - 2021</h3>
										<span class="d-block text-color-light line-height-4 opacity-7">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-light opacity-7">Mehr Theatre</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-light opacity-7">Hamburg, BV</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-light btn-outline btn-rounded font-weight-semibold text-color-light btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
								<div class="custom-tour-item row align-items-center bg-light py-4 mx-0">
									<div class="col-lg-3">
										<h3 class="font-weight-bold text-color-dark mb-0">FRY, MAR 22 - 2021</h3>
										<span class="d-block text-color-dark line-height-4">11:00 pm</span>
									</div>
									<div class="col-lg-2">
										<span class="text-color-dark">Mehr Theatre</span>
									</div>
									<div class="col-lg-4 mb-4 mb-lg-0">
										<span class="text-color-dark">Hamburg, BV</span>
									</div>
									<div class="col-lg-3 text-lg-right">
										<a href="demo-band-ticket-detail.html" class="btn btn-dark btn-outline btn-rounded font-weight-semibold btn-px-5 py-3"><span class="position-relative top-1">VIEW TICKETS</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row align-items-center pt-2 my-5">
						<div class="col-lg-3">
							<h4 class="text-5 ls-0 mb-0">SUBSCRIBE FOR UPDATED</h4>
						</div>
						<div class="col-lg-5 mb-4 mb-lg-0">
							<p class="font-weight-bold text-color-light opacity-5 mb-0">Get all the latest information on Events, Sales and Offers.  Sign up now:</p>
						</div>
						<div class="col-12 col-md-9 col-lg-4 pr-lg-0">
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary  text-color-light text-2 py-3 px-4" type="submit"><strong class="position-relative top-1">SUBSCRIBE!</strong></button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>

				<section id="about" class="section section-height-4 border-0 m-0">
					<div class="container container-lg-custom">
						<div class="row">
							<div class="col text-center">
								<svg class="mb-4" width="20" height="72" viewbox="0 0 10 40">
									<line x1="5" x2="5" y1="0" y2="40" stroke="#909294" stroke-width="1" class="appear-animation" data-appear-animation="customSVGLineAnim"></line>
								</svg>
								<div class="overflow-hidden">
									<span class="d-block text-color-light font-weight-bold d-block appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">ABOUT US</span>
								</div>
								<div class="overflow-hidden mb-3">
									<h2 class="font-weight-bold text-9 pb-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Band BIO</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<p class="font-weight-bold line-height-9 text-4 mb-4 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id ex ac metus interdum commodo. Mauris cursus finibus elit, ut venenatis augue pharetra id. Donec condimentum porta posuere. Suspendisse sed erat venenatis, lobortis magna at, vehicula mauris. </p>
								<p class="line-height-9 mb-4 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">Aenean elit ipsum, congue lacinia purus et, eleifend tempor lectus. Vivamus sed magna sed magna congue vehicula et ac mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec nec cursus orci, hendrerit tempor libero. Quisque scelerisque est eros, sit amet tempor dui scelerisque vitae. Sed placerat nibh vel tristique malesuada. </p>
								<p class="line-height-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Aenean elit ipsum, congue lacinia purus et, eleifend tempor lectus. Vivamus sed magna sed magna congue vehicula et ac mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec nec cursus orci, hendrerit tempor libero. Quisque scelerisque est eros, sit amet tempor dui scelerisque vitae. Sed placerat nibh vel tristique malesuada. Aenean elit ipsum, congue lacinia purus et, eleifend tempor lectus. Vivamus sed magna sed magna congue vehicula et ac mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec nec cursus orci, hendrerit tempor libero. Quisque scelerisque est eros, sit amet tempor dui scelerisque vitae. Sed placerat nibh vel tristique malesuada. </p>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 col-lg-3 px-0">
							@include('porto.partials.thumb-info.thumb-info-12')
						</div>
						<div class="col-sm-6 col-lg-3 px-0">
							@include('porto.partials.thumb-info.thumb-info-13')
						</div>
						<div class="col-sm-6 col-lg-3 px-0">
							@include('porto.partials.thumb-info.thumb-info-14')
						</div>
						<div class="col-sm-6 col-lg-3 px-0">
							@include('porto.partials.thumb-info.thumb-info-15')
						</div>
					</div>
				</div>

				<section class="section border-0 m-0 overlay overlay-show overlay-op-9 appear-animation" data-appear-animation="fadeIn" style="background: url(img/demos/band/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
					<div class="container container-lg-custom">
						<div class="row align-items-center my-5 py-5">
							<div class="col text-center py-5 my-5">
								@include('porto.partials.lightbox.lightbox-13')
							</div>
						</div>
					</div>
				</section>

				<div id="news" class="container container-lg-custom py-5 my-5">
					<div class="row mb-5">
						<div class="col text-center">
							<svg class="mb-4" width="20" height="72" viewbox="0 0 10 40">
								<line x1="5" x2="5" y1="0" y2="40" stroke="#909294" stroke-width="1" class="appear-animation" data-appear-animation="customSVGLineAnim"></line>
							</svg>
							<div class="overflow-hidden">
								<span class="d-block text-color-light font-weight-bold d-block appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">STAY TUNED</span>
							</div>
							<div class="overflow-hidden mb-3">
								<h2 class="font-weight-bold text-9 pb-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Latest News</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
							</div>
						</div>
					</div>
					<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="350">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<div class="custom-card-style-1 card rounded-0 hover-effect-1">
								<div class="custom-card-img-top-wrapper">
									<div class="post-date">
										<span class="day text-color-light font-weight-extra-bold bg-primary">17</span>
										<span class="month text-color-dark bg-light">JAN</span>
									</div>
									<a href="demo-band-blog-post.html"><img class="card-img-top" src="img/demos/band/blog/blog-1.jpg" alt=""></a>
								</div>
								<div class="card-body p-5">
									<h4 class="card-title font-weight-bold text-5 mb-3"><a href="demo-band-blog-post.html" class="text-decoration-none text-color-light">Inside the Eletronic Concert</a></h4>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 mb-5 mb-lg-0">
							<div class="custom-card-style-1 card rounded-0 hover-effect-1">
								<div class="custom-card-img-top-wrapper">
									<div class="post-date">
										<span class="day text-color-light font-weight-extra-bold bg-primary">02</span>
										<span class="month text-color-dark bg-light">FEV</span>
									</div>
									<a href="demo-band-blog-post.html"><img class="card-img-top" src="img/demos/band/blog/blog-2.jpg" alt=""></a>
								</div>
								<div class="card-body p-5">
									<h4 class="card-title font-weight-bold text-5 mb-3"><a href="demo-band-blog-post.html" class="text-decoration-none text-color-light">With an Amazing Special Guest</a></h4>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="custom-card-style-1 card rounded-0 hover-effect-1">
								<div class="custom-card-img-top-wrapper">
									<div class="post-date">
										<span class="day text-color-light font-weight-extra-bold bg-primary">22</span>
										<span class="month text-color-dark bg-light">MAR</span>
									</div>
									<a href="demo-band-blog-post.html"><img class="card-img-top" src="img/demos/band/blog/blog-3.jpg" alt=""></a>
								</div>
								<div class="card-body p-5">
									<h4 class="card-title font-weight-bold text-5 mb-3"><a href="demo-band-blog-post.html" class="text-decoration-none text-color-light">The Biggest Concert Ever</a></h4>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col pt-5 text-center">
							<a href="demo-band-blog.html" class="btn btn-primary btn-rounded font-weight-semibold btn-px-5 py-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300"><span class="position-relative top-1">VIEW MORE</span></a>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-secondary border-0 mt-0">
				<div class="container-fluid py-4 px-5">
					<div class="row justify-content-center justify-content-md-between align-items-center py-5">
						<div class="col-auto mb-4 mb-md-0">
							<a href="demo-band.html">
								<img src="img/demos/band/logo.png" class="img-fluid" alt="" width="112" height="30">
							</a>
						</div>
						<div class="col-auto">
							<ul class="list list-inline list-unstyled text-center text-md-left mb-0">
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#home" class="text-color-light font-weight-bold">HOME</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#tour" class="text-color-light font-weight-bold">TOUR</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#about" class="text-color-light font-weight-bold">ABOUT</a></li>
								<li class="list-inline-item px-2 mx-3 mb-0"><a data-hash data-hash-offset="70" href="#news" class="text-color-light font-weight-bold">NEWS</a></li>
								<li class="list-inline-item pl-2 ml-3 mb-0"><a href="#hiddenContactForm" data-toggle="collapse" aria-controls="hiddenContactForm" onclick="scrollAndFocus(this, '#contact', '#name', 70, true);" class="text-color-light font-weight-bold">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="contact" class="footer-contact-form">
					<div id="hiddenContactForm" class="collapse">
						<div class="container container-lg-custom">
							<div class="row my-5">
								<div class="col text-center">
									<svg class="mb-4" width="20" height="72" viewbox="0 0 10 40">
										<line x1="5" x2="5" y1="0" y2="40" stroke="#909294" stroke-width="1" class="appear-animation" data-appear-animation="customSVGLineAnim"></line>
									</svg>
									<div class="overflow-hidden">
										<span class="d-block text-color-light font-weight-bold d-block appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">GET IN TOUCH</span>
									</div>
									<div class="overflow-hidden mb-3">
										<h2 class="font-weight-bold text-9 pb-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Contact Us</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="font-weight-bold text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<form class="contact-form form-style-4 form-errors-light appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>
										
										<div class="form-row">
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
											</div>
											<div class="form-group col-md-4">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="E-mail" required>
											</div>
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" placeholder="Subject" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-6', ['key' => 'footer-copyright.footer-copyright-6'])
			</footer>
@endsection
