<aside class="sidebar">
								<div id="combinationFilters" class="filters">

									<h4 class="mb-3">Practice Area:</h4>
									<ul class="nav nav-list flex-column mb-5 sort-source team-filter-group" data-filter-group="group1">
										<li data-option-value="" class="nav-item"><a class="nav-link active" href="#">Show All</a></li>
										<li data-option-value=".criminal-law" class="nav-item"><a class="nav-link" href="#">Criminal Law</a></li>
										<li data-option-value=".business-law" class="nav-item"><a class="nav-link" href="#">Business Law</a></li>
										<li data-option-value=".divorce-law" class="nav-item"><a class="nav-link" href="#">Divorce Law</a></li>
										<li data-option-value=".health-law" class="nav-item"><a class="nav-link" href="#">Health Law</a></li>
										<li data-option-value=".capital-law" class="nav-item"><a class="nav-link" href="#">Capital Law</a></li>
									</ul>

									<h4 class="mt-5 mb-3">Location:</h4>
									<ul class="nav nav-list flex-column mb-5 sort-source team-filter-group" data-filter-group="group2">
										<li data-option-value="" class="nav-item active"><a class="nav-link active" href="#">Show All</a></li>
										<li data-option-value=".new-york" class="nav-item"><a class="nav-link" href="#">New York</a></li>
										<li data-option-value=".london" class="nav-item"><a class="nav-link" href="#">London</a></li>
									</ul>

								</div>

								<h4 class="mt-5 mb-3">Contact Us</h4>
								<p>Contact us or give us a call to discover how we can help.</p>

								<div class="divider divider-primary divider-small mb-4">
									<hr class="mr-auto">
								</div>

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
											<input type="submit" value="Send Message" class="btn btn-lg btn-primary" data-loading-text="Loading...">

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