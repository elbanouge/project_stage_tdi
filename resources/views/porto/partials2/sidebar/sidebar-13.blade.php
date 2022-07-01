<aside class="sidebar">

								<ul class="nav nav-list flex-column mb-4 show-bg-active">
									<li class="nav-item"><a class="nav-link active" href="demo-construction-services.html">Overview</a></li>
									<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.html">General Construction</a></li>
									<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.html">Plumbing</a></li>
									<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.html">Painting</a></li>
									<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.html">Pre-Construction</a></li>
								</ul>

								<h4 class="pt-4 mb-3 text-color-dark">Contact Us</h4>
								<p>Contact us or give us a call to discover how we can help.</p>

								<form class="contact-form" action="php/contact-form.php" method="POST">
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
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Send Message" class="btn btn-primary mb-4" data-loading-text="Loading...">

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