@extends('porto.app')
@section('header')
@include('porto.partials.header.header-183')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-197')

				<section class="section section-default mb-0">
					<div class="container pb-5">
						<div class="row">
							<div class="col">
								@include('porto.partials.thumb-info.thumb-info-345')

							</div>
						</div>
						<div class="row mt-3">
							<div class="col">

								@include('porto.partials.thumb-info.thumb-info-346')

							</div>
						</div>
						<div class="row mt-3">
							<div class="col">

								@include('porto.partials.thumb-info.thumb-info-347')

							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 bg-color-secondary mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-32', ['key' => 'footer-copyright.footer-copyright-32'])
			</footer>
@endsection
