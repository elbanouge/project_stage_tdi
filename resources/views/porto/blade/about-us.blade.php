@extends('porto.app')
@section('header')
@include('porto.partials.header.header')
@endsection

@section('main')
<div role="main" class="main">
	@include('porto.partials.page-header.page-header-1')

	<div class="container pb-1">

		<div class="row pt-4">
			<div class="col">
				<div class="overflow-hidden mb-3">
					<h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
						<span>The New Way to </span>
						<span class="word-rotator-words bg-primary">
							<b class="is-visible">Success</b>
							<b>Advance</b>
							<b>Progress</b>
						</span>
					</h2>
				</div>
			</div>
		</div>

		<div class="row mb-2">
			<div class="col-lg-10">
				<div class="overflow-hidden">
					<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
					</p>
				</div>
			</div>
			<div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
				<a href="#" class="btn btn-modern btn-primary mt-1">Join Our Team!</a>
			</div>
		</div>
	</div>
	<section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
		<div class="container py-4">

			<div class="row align-items-center">
				<div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
					@include('porto.partials.owl-carousel.owl-carousel-2')
				</div>
				<div class="col-md-6">
					<div class="overflow-hidden mb-2">
						<h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
					</div>
					<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
					<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
				</div>
			</div>

		</div>
	</section>

	<div class="container">

		<div class="row mt-5 py-3">
			<div class="col-md-6">
				@include('porto.partials.toggle.toggle')
			</div>
			<div class="col-md-6">
				<div class="progress-bars">
					<div class="progress-label">
						<span class="text-1">HTML/CSS</span>
					</div>
					@include('porto.partials.progress.progress')
					<div class="progress-label">
						<span class="text-1">Design</span>
					</div>
					@include('porto.partials.progress.progress-1')
					<div class="progress-label">
						<span class="text-1">WordPress</span>
					</div>
					@include('porto.partials.progress.progress-2')
					<div class="progress-label">
						<span class="text-1">Photoshop</span>
					</div>
					@include('porto.partials.progress.progress-3')
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col py-4">
				<hr class="solid">
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mx-md-auto text-center">

				<h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-2">Our <strong class="font-weight-extra-bold">History</strong></h2>
				<p>How we started, lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>

				<section class="timeline" id="timeline">
					<div class="timeline-body">
						<div class="timeline-date">
							<h3 class="text-primary font-weight-bold">2021</h3>
						</div>

						<article class="timeline-box left text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
							<div class="timeline-box-arrow"></div>
							<div class="p-2">
								<img alt="" class="img-fluid" src="img/history/history-3.jpg">
								<h3 class="font-weight-bold text-3 mt-3 mb-1">New Office</h3>
								<p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante.</p>
							</div>
						</article>

						<div class="timeline-date">
							<h3 class="text-primary font-weight-bold">2012</h3>
						</div>

						<article class="timeline-box right text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
							<div class="timeline-box-arrow"></div>
							<div class="p-2">
								<img alt="" class="img-fluid" src="img/history/history-2.jpg">
								<h3 class="font-weight-bold text-3 mt-3 mb-1">New Partners</h3>
								<p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat.</p>
							</div>
						</article>

						<div class="timeline-date">
							<h3 class="text-primary font-weight-bold">2006</h3>
						</div>

						<article class="timeline-box left text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
							<div class="timeline-box-arrow"></div>
							<div class="p-2">
								<img alt="" class="img-fluid" src="img/history/history-1.jpg">
								<h3 class="font-weight-bold text-3 mt-3 mb-1">Foundation</h3>
								<p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante.</p>
							</div>
						</article>
					</div>
				</section>

			</div>
		</div>

	</div>

	<section class="section section-default border-0 my-5">
		<div class="container py-4">

			<div class="row">
				<div class="col pb-4 text-center">
					<h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
					<p>Rockstars lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>
				</div>
			</div>
			<div class="row pb-4 mb-2">
				<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
					@include('porto.partials.thumb-info.thumb-info')
				</div>
				<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
					@include('porto.partials.thumb-info.thumb-info-1')
				</div>
				<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
					@include('porto.partials.thumb-info.thumb-info-2')
				</div>
				<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
					@include('porto.partials.thumb-info.thumb-info-3')
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row py-5 my-5">
			<div class="col">

				@include('porto.partials.owl-carousel.owl-carousel-3')

			</div>
		</div>
	</div>

</div>
@endsection

@section('footer')
<footer id="footer" class="footer-texts-more-lighten">
	<div class="container">
		<div class="row py-4 my-5">
			<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
				<h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
				<ul class="list list-unstyled">
					<li class="pb-1 mb-2">
						<span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span>
						1234 Street Name, City, State, USA
					</li>
					<li class="pb-1 mb-2">
						<span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
						<a href="tel:+1234567890">Toll Free (123) 456-7890</a>
					</li>
					<li class="pb-1 mb-2">
						<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
						<a href="mailto:mail@example.com">mail@example.com</a>
					</li>
					<li class="pb-1 mb-2">
						<span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
						Mon - Sun / 9:00AM - 8:00PM
					</li>
				</ul>
				<ul class="social-icons social-icons-clean-with-border social-icons-medium">
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
			<div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
				<h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
				<ul class="list list-unstyled mb-0">
					<li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
					<li class="mb-0"><a href="about-us.html">About Us</a></li>
					<li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
					<li class="mb-0"><a href="page-careers.html">Careers</a></li>
					<li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
					<li class="mb-0"><a href="#">Our Location</a></li>
					<li class="mb-0"><a href="#">Privacy Policy</a></li>
					<li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
				</ul>
			</div>
			<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
				<h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
				<article class="mb-3">
					<a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
					<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
				</article>
				<article class="mb-3">
					<a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
					<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
				</article>
				<article>
					<a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
					<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
				</article>
			</div>
			<div class="col-md-6 col-lg-3">
				<h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
				<p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
				<div class="alert alert-success d-none" id="newsletterSuccess">
					<strong>Success!</strong> You've been added to our email list.
				</div>
				<div class="alert alert-danger d-none" id="newsletterError"></div>
				<form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
					<div class="form-row">
						<div class="form-group col">
							<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		@include('porto.partials.footer-copyright.footer-copyright', ['key' => 'footer-copyright.footer-copyright'])
	</div>
</footer>
@endsection