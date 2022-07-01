@extends('porto.app')
@section('header')
@include('porto.partials.header.header-128')
@endsection

@section('main')
<div role="main" class="main">

                @include('porto.partials.page-header.page-header-158')

                <section class="section bg-color-light position-relative border-0 py-3 m-0">
                    <div class="container container-lg-custom my-5">
                        <div class="row">
                            <div class="col-lg-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">

                                <article>
                                    <div class="card border-0 border-radius-0 mb-5">
                                        <div class="card-body p-0 z-index-1">
                                            <div class="post-image pb-4">
                                                <img class="card-img-top border-radius-0" src="img/demos/it-services/blog/blog-post-1.jpg" alt="Card Image">
                                            </div>

                                            <p class="text-uppercase text-3 mb-3 text-color-default custom-font-secondary"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>

                                            <div class="card-body p-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
                                                <p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                                                <p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>

                                                <!-- AddThis Button BEGIN -->
                                                <div class="addthis_toolbox addthis_default_style ">
                                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                                    <a class="addthis_button_tweet"></a>
                                                    <a class="addthis_button_pinterest_pinit"></a>
                                                    <a class="addthis_counter addthis_pill_style"></a>
                                                </div>
                                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                                <!-- AddThis Button END -->

                                                <hr class="my-5">

                                                <div class="post-block post-author">
                                                    <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">Author</h3>
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                                        <a href="blog-post.html">
                                                            <img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
                                                        </a>
                                                    </div>
                                                    <p><strong class="name"><a href="#" class="text-4 text-dark pb-2 pt-2 d-block">John Doe</a></strong></p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
                                                </div>

                                                <hr class="my-5">

                                                <div id="comments" class="post-block post-comments">
                                                    <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">3 comments for "An Interview with John Doe"</h3>

                                                    <ul class="comments">
                                                        <li>
                                                            <div class="comment">
                                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                    <img class="avatar rounded-circle" alt="" src="img/avatars/avatar-2.jpg">
                                                                </div>
                                                                <div class="comment-block">
                                                                    <div class="comment-arrow"></div>
                                                                    <span class="comment-by">
                                                                        <strong class="text-dark">John Doe</strong>
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
                                                                        <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                            <img class="avatar rounded-circle" alt="" src="img/avatars/avatar-3.jpg">
                                                                        </div>
                                                                        <div class="comment-block">
                                                                            <div class="comment-arrow"></div>
                                                                            <span class="comment-by">
                                                                                <strong class="text-dark">John Doe</strong>
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
                                                                        <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                            <img class="avatar rounded-circle" alt="" src="img/avatars/avatar-4.jpg">
                                                                        </div>
                                                                        <div class="comment-block">
                                                                            <div class="comment-arrow"></div>
                                                                            <span class="comment-by">
                                                                                <strong class="text-dark">John Doe</strong>
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
                                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                    <img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
                                                                </div>
                                                                <div class="comment-block">
                                                                    <div class="comment-arrow"></div>
                                                                    <span class="comment-by">
                                                                        <strong class="text-dark">John Doe</strong>
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
                                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                    <img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
                                                                </div>
                                                                <div class="comment-block">
                                                                    <div class="comment-arrow"></div>
                                                                    <span class="comment-by">
                                                                        <strong class="text-dark">John Doe</strong>
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

                                                    <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3 mt-5">Leave a Reply</h3>

                                                    <form class="custom-form-simple-validation rounded" action="/" method="POST">         
                                                        <div class="form-row row-gutter-sm">
                                                            <div class="form-group col-lg-6 mb-4">
                                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="name" id="name" placeholder="Full Name" required>
                                                            </div>
                                                            <div class="form-group col-lg-6 mb-4">
                                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="email" id="email" placeholder="Email Address" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col mb-4">
                                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="message" id="message" placeholder="Comment" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col mb-0">
                                                                <button type="submit" class="btn btn-secondary btn-outline text-color-dark font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3" data-loading-text="Loading...">POST COMMENT <i class="custom-arrow-icon ml-5"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </div>
                            <div class="col-lg-3 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                @include('porto.partials.sidebar.sidebar-4')
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-height-3 bg-color-dark border-0 m-0">
                    <div class="container container-lg-custom">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-8 col-xl-6 mb-5 mb-lg-0">
                                <span class="d-block custom-text-color-light-2 custom-heading-bar custom-heading-bar-with-padding font-weight-light text-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Let’s Get in Touch</span>
                                <h2 class="text-color-light font-weight-extra-bold text-10 negative-ls-1 pr-3 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">LET'S TALK ABOUT YOUR BUSINESS IT SERVICES NEEDS</h2>
                                <p class="custom-font-secondary text-4 custom-text-color-light-3 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="col-lg-4 col-xl-3">
                                <div class="overflow-hidden">
                                    <a href="demo-it-services-contact.html" class="btn btn-secondary btn-outline text-color-light font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="900">GET STARTED NOW <i class="custom-arrow-icon ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-color-primary border-0 mt-0">
				<div class="container container-lg-custom pt-4 pb-3">
					<div class="row py-5">
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="ls-0">OUR ADDRESS</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									12345  Porto Blvd.
								</li>
								<li class="mb-1">
									Suite 1500
								</li>
								<li>
									Los Angeles, California 90000
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="ls-0">OUR CONTACTS</h4>
							<ul class="list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block line-height-2">SUPPORT</span>
									<a href="tel:+1234567890" class="text-color-light text-6 text-lg-4 text-xl-6 font-weight-bold">800-123-4567</a>
								</li>
								<li>
									<span class="d-block line-height-2">SALES</span>
									<a href="tel:+1234567890" class="text-color-light text-6 text-lg-4 text-xl-6 font-weight-bold">800-123-4568</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="ls-0">USEFUL LINKS</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-it-services-services.html">Our Services</a>
								</li>
								<li class="mb-1">
									<a href="#">Payment Methods</a>
								</li>
								<li class="mb-1">
									<a href="#">Services Guide</a>
								</li>
								<li>
									<a href="#">FAQs</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="ls-0">OUR SERVICES</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-it-services-services-detail.html">Cloud Services</a>
								</li>
								<li class="mb-1">
									<a href="demo-it-services-services-detail.html">Tech Support</a>
								</li>
								<li class="mb-1">
									<a href="demo-it-services-services-detail.html">Data Security</a>
								</li>
								<li>
									<a href="demo-it-services-services-detail.html">Software Dev</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="ls-0">ABOUT</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-it-services-about-us.html">About Us</a>
								</li>
								<li>
									<a href="demo-it-services-contact.html">Send a Message</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h4 class="ls-0">SOCIAL MEDIA</h4>
							<ul class="social-icons social-icons-clean custom-social-icons-icon-light">
								<li>
									<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-21', ['key' => 'footer-copyright.footer-copyright-21'])
			</footer>
@endsection
