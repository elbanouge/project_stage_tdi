@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-207')
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="alert alert-info alert-admin">
								<div class="row">
									<div class="col-lg-8">
										<h4>Admin Extension</h4>
										<p><strong class="warning"><i class="fas fa-exclamation-triangle"></i> Warning!</strong> This page is part of the admin extension and is <strong>NOT</strong> included on Porto - Responsive HTML5 Template, to get all features, purchase both templates: <a target="_blank" href="http://www.themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">Porto ($16)</a> + <a target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">Porto Admin ($16)</a>: <strong>$32 Total.</strong></p>
										<p>
											<a class="btn btn-lg btn-sm btn-primary" target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">View Porto Admin!</a>
										</p>
									</div>
									<div class="col-lg-4 visible-md visible-lg">
										<img class="appear-animation float-right" src="img/admin-banner.png" data-appear-animation="fadeIn">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Code Editor</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal" action="#">
										<div class="form-group row">
											<label class="col-md-2 control-label text-md-right pt-2" for="textareaDefault">Javascript Editor</label>
											<div class="col-md-10">
												<textarea class="form-control" rows="10" id="codemirror_js_code" name="code_js" data-plugin-codemirror data-plugin-options='{ "mode": "text/javascript" }'>
					function findSequence(goal) {
					    function find(start, history) {
					        if (start === goal) {
					            return history;
					        } else if (start &gt; goal) {
					            return null;
					        } else {
					            return find(start + 5, "(" + history + " + 5)") || find(start * 3, "(" + history + " * 3)");
					        }

					        return find(1, "1");
					    }
					}
												</textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-2 control-label text-md-right pt-2" for="textareaDefault">HTML Editor</label>
											<div class="col-md-10">
												<textarea rows="10" class="form-control" id="codemirror_html_code" name="code_html" data-plugin-codemirror data-plugin-options='{ "mode": "text/html" }'>
					
						<!-- this is a comment -->
						
							<title>Mixed HTML Example</title>
							<style type="text/css">
								h1 {
									font-family: comic sans; color: #f0f;
								}

								div {
									background: yellow !important;
								}
								body {
									max-width: 50em;
									margin: 1em 2em 1em 5em;
								}
							</style>
						
						
							<h1>Mixed HTML Example</h1>
							<script>
								function jsFunc(arg1, arg2) {
									if (arg1 && arg2) document.body.innerHTML = "achoo";
								}
							</script>
						
					
												</textarea>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-2 control-label text-md-right pt-2" for="textareaDefault">CSS Editor</label>
											<div class="col-md-10">
												<textarea rows="10" class="form-control" id="codemirror_css_code" name="code_css" data-plugin-codemirror data-plugin-options='{ "mode": "text/css" }'>
					/* Some example CSS */
					@import url("something.css");

					body {
						margin: 0;
						padding: 3em 6em;
						font-family: tahoma, arial, sans-serif;
						color: #000;
					}

					#navigation a {
						font-weight: bold;
						text-decoration: none !important;
					}

					h1 {
						font-size: 2.5em;
					}

					h2 {
						font-size: 1.7em;
					}

					h1:before, h2:before {
						content: "::";
					}

					code {
						font-family: courier, monospace;
						font-size: 80%;
						color: #418A8A;
					}
												</textarea>
											</div>
										</div>
									</form>
								</div>
							</section>
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
					</div>porto.partials
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright', ['key' => 'footer-copyright.footer-copyright'])
				</div>
			</footer>
@endsection
