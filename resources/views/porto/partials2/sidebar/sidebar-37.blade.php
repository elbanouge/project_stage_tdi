<aside class="sidebar">
								<div class="agents text-color-light text-center">
									<h4 class="text-light pt-5 m-0">Property Agents</h4>
									<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1 pt-3 m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
										<div class="pr-2 pl-2">
											<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
												<span class="agent-thumb">
													<img class="img-fluid rounded-circle" src="img/team/team-11.jpg" alt>
												</span>
												<span class="agent-infos text-light pt-3">
													<strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
													<span class="font-weight-light">123-456-789</span>
													<span class="font-weight-light">bruno@domain.com</span>
												</span>
											</a>
										</div>
										<div class="pr-2 pl-2">
											<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
												<span class="agent-thumb">
													<img class="img-fluid rounded-circle" src="img/team/team-12.jpg" alt>
												</span>
												<span class="agent-infos text-light pt-3">
													<strong class="text-uppercase font-weight-bold">Jeff doe</strong>
													<span class="font-weight-light">123-456-789</span>
													<span class="font-weight-light">jeffdoe@domain.com</span>
												</span>
											</a>
										</div>
										<div class="pr-2 pl-2">
											<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
												<span class="agent-thumb">
													<img class="img-fluid rounded-circle" src="img/team/team-13.jpg" alt>
												</span>
												<span class="agent-infos text-light pt-3">
													<strong class="text-uppercase font-weight-bold">Jessica Doe</strong>
													<span class="font-weight-light">123-456-789</span>
													<span class="font-weight-light">jessicadoe@domain.com</span>
												</span>
											</a>
										</div>
									</div>
								</div>

								<h4 class="pt-4 mb-3 text-color-dark">Request Information</h4>
								<p>Contact us or give us a call to request more information</p>

								<form class="contact-form mb-4" action="php/contact-form.php" method="POST">
									<div class="form-row">
										<div class="form-group col">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Subject</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Message *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Send Message" class="btn btn-secondary mb-lg-5" data-loading-text="Loading...">

											<div class="contact-form-success alert alert-success d-none">
												Message has been sent to us.
											</div>

											<div class="contact-form-error alert alert-danger d-none">
												Error sending your message.
												<span class="mail-error-message text-1 d-block"></span>
											</div>
										</div>
									</div>
								</form>

							</aside>