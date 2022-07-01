@extends('porto.app')
@section('header')
@include('porto.partials.header.header-40')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-85')

				<div class="container">
					<div class="row pt-1 pb-4 mb-3">
						<div class="col">

							<div class="row mt-2 mb-2">
								<article class="blog-post">
									<div class="col">
										<div class="post-infos mb-4">
											<span class="info posted-by">
												Posted by:
												<span class="post-author font-weight-semibold text-color-dark">
													John Doe
												</span>
											</span>
											<span class="info comments ml-4">
												Comments:
												<span class="comments-number text-color-primary font-weight-semibold">
													15
												</span>
											</span>
											<span class="info like ml-4">
												Post Date:
												<span class="like-number font-weight-semibold custom-color-dark">
													15 Dec 2021
												</span>
											</span>
										</div>

										<hr class="solid">

										<p class="lead mb-4">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

										<img src="img/demos/business-consulting/blog/blog-1.jpg" style="max-width: 350px;" class="img-fluid float-right ml-4 mb-4" alt="">

										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

										<div class="pt-2 pb-1">
											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
												<a class="addthis_button_tweet"></a>
												<a class="addthis_button_pinterest_pinit"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-40faf75173aadc53"></script>
											<!-- AddThis Button END -->
										</div>

										<div class="post-block post-author mt-4 clearfix">
											<h4 class="font-weight-bold text-color-dark pt-2 mb-4">- Author</h4>
											<div class="img-thumbnail d-block p-0 no-borders">
												<a href="blog-post.html">
													<img src="img/team/team-22.jpg" alt="">
												</a>
											</div>
											<p><strong class="name mb-3">John Doe</strong></p>
											<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
										</div>

										<div class="post-block post-comments mt-4 clearfix">
											<h4 class="font-weight-bold text-color-dark pt-2 mb-4">- Comments</h4>

											<ul class="comments">
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
															<img class="avatar" alt="" src="img/team/team-23.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
															<span class="date float-right">January 12, 2021 at 1:38 pm</span>
														</div>
													</div>

													<ul class="comments reply">
														<li>
															<div class="comment">
																<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
																	<img class="avatar" alt="" src="img/team/team-24.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-right">
																			<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																	<span class="date float-right">January 12, 2021 at 1:38 pm</span>
																</div>
															</div>
														</li>
														<li>
															<div class="comment">
																<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
																	<img class="avatar" alt="" src="img/team/team-25.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-right">
																			<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																	<span class="date float-right">January 12, 2021 at 1:38 pm</span>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
															<img class="avatar" alt="" src="img/team/team-22.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															<span class="date float-right">January 12, 2021 at 1:38 pm</span>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
															<img class="avatar" alt="" src="img/team/team-22.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															<span class="date float-right">January 12, 2021 at 1:38 pm</span>
														</div>
													</div>
												</li>
											</ul>

										</div>

										<div class="post-block post-leave-comment pt-0">
											<h4 class="font-weight-bold text-color-dark mt-4 pt-2 mb-4">- Leave a Comment</h4>

											<form id="" class="custom-contact-form-style-1" action="" method="POST">
												<div class="form-row">
													<div class="form-group col">
														<div class="custom-input-box">
															<i class="icon-user icons text-color-primary"></i>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name*" required>
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col">
														<div class="custom-input-box">
															<i class="icon-envelope icons text-color-primary"></i>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email*" required>
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col">
														<div class="custom-input-box">
															<i class="icon-bubble icons text-color-primary"></i>
															<textarea maxlength="5000" data-msg-required="Please enter your comment." rows="10" class="form-control" name="comment" id="message" placeholder="Comment*" required></textarea>
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col">
														<input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>

									</div>
								</article>
							</div>

						</div>
					</div>
				</div>


				<section class="section section-text-light section-background m-0" style="background: url('img/demos/business-consulting/contact/contact-background.jpg'); background-size: cover;">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-lg-6 mb-5 mb-lg-0">
								<h2 class="font-weight-bold">- Contact Us</h2>
								<p class="custom-opacity-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper.</p>
								<div class="row">
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Call Us</h4>
										<a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
											<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
												Phone
												<span class="info text-5">
													123-456-7890
												</span>
											</span>
										</a>
									</div>
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Our Location</h4>
										<p class="custom-opacity-font">Porto Business Consulting 123 Porto Blvd, Suite 100 New York, NY</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Mail Us</h4>
										<a href="mail:mail@example.com" class="text-decoration-none" target="_blank" title="Mail Us">
											<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
												Email
												<span class="info text-5">
													mail@example.com
												</span>
											</span>
										</a>
									</div>
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Social Media</h4>
										<ul class="social-icons social-icons-clean custom-social-icons-style-1 mt-2 custom-opacity-font">
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" title="Facebook">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" title="Twitter">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li class="social-icons-instagram">
												<a href="http://www.instagram.com/" target="_blank" title="Instagram">
													<i class="fab fa-instagram"></i>
												</a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 custom-sm-margin-top">
								<h2 class="font-weight-bold">- Write Us</h2>
								<form class="contact-form custom-contact-form-style-1 form-errors-light" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>

									<input type="hidden" name="subject" value="Contact Message Received">
									<div class="form-row">
										<div class="form-group col">
											<div class="custom-input-box">
												<i class="icon-user icons text-color-primary"></i>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name*" required>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<div class="custom-input-box">
												<i class="icon-envelope icons text-color-primary"></i>
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email*" required>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<div class="custom-input-box">
												<i class="icon-bubble icons text-color-primary"></i>
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" required></textarea>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-91')
@endsection
