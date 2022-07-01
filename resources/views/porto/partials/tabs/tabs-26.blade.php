<div class="tabs">
									<ul class="nav nav-tabs nav-justify wizard-steps wizard-steps-style-2">
										<li class="nav-item active">
											<a href="#w2-account" data-toggle="tab" class="nav-link text-center">
												<span class="badge badge-primary">1</span>
												Account
											</a>
										</li>
										<li class="nav-item">
											<a href="#w2-profile" data-toggle="tab" class="nav-link text-center">
												<span class="badge badge-primary">2</span>
												Profile
											</a>
										</li>
										<li class="nav-item">
											<a href="#w2-confirm" data-toggle="tab" class="nav-link text-center">
												<span class="badge badge-primary">3</span>
												Confirm
											</a>
										</li>
									</ul>
									<form class="form-horizontal" novalidate="novalidate">
										<div class="tab-content">
											<div id="w2-account" class="tab-pane p-3 active">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-username">Username</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="w2-username" name="username" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-password">Password</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" name="password" id="w2-password" required minlength="6">
													</div>
												</div>
											</div>
											<div id="w2-profile" class="tab-pane p-3">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-first-name">First Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="first-name" id="w2-first-name" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-last-name">Last Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="last-name" id="w2-last-name" required>
													</div>
												</div>
											</div>
											<div id="w2-confirm" class="tab-pane p-3">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w2-email">Email</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="email" id="w2-email" required>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-2"></div>
													<div class="col-sm-10">
														<div class="checkbox-custom">
															<input type="checkbox" name="terms" id="w2-terms" required>
															<label for="w2-terms">I agree to the terms of service</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>