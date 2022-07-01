<div class="featured-box featured-box-primary text-left mt-0">
										<div class="box-content">
											<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Register An Account</h4>
											<form action="/" id="frmSignUp" method="post" class="needs-validation">
												<div class="form-row">
													<div class="form-group col">
														<label>E-mail Address</label>
														<input type="text" name="email" value="" class="form-control form-control-lg" required>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col-lg-6">
														<label>Password</label>
														<input type="password" name="password" value="" class="form-control form-control-lg" required>
													</div>
													<div class="form-group col-lg-6">
														<label>Re-enter Password</label>
														<input type="password" name="confirmPassword" value="" class="form-control form-control-lg" required>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col-lg-9">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" name="terms" class="custom-control-input" id="terms">
															<label class="custom-control-label text-2" for="terms">I have read and agree to the <a href="{{$post->linki}}">{{$post->info}}</a></label>
														</div>
													</div>
													<div class="form-group col-lg-3">
														<input type="submit" value="Register" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
									</div>