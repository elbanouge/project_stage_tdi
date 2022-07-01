<div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
								<ul class="nav nav-tabs justify-content-start">
									<li class="nav-item active"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-toggle="tab">Description</a></li>
									<li class="nav-item"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-toggle="tab">Additional Information</a></li>
									<li class="nav-item"><a class="nav-link nav-link-reviews font-weight-bold text-3 text-uppercase py-2 px-3" href="#productReviews" data-toggle="tab">Reviews (2)</a></li>
								</ul>
								<div class="tab-content p-0">
									<div class="tab-pane px-0 py-3 active" id="productDescription">
										<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. </p>
										<p class="m-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
									</div>
									<div class="tab-pane px-0 py-3" id="productInfo">
										@include('porto.partials.table.table-17')
									</div>
									<div class="tab-pane px-0 py-3" id="productReviews">
										<ul class="comments">
											<li>
												<div class="comment">
													<div class="img-thumbnail border-0 p-0 d-none d-md-block">
														<img class="avatar rounded-circle" alt="" src="img/avatars/avatar-2.jpg">
													</div>
													<div class="comment-block">
														<div class="comment-arrow"></div>
														<span class="comment-by">
															<strong>Jack Doe</strong>
															<span class="float-right">
																<div class="pb-0 clearfix">
																	<div title="Rated 3 out of 5" class="float-left">
																		<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
																	</div>

																	<div class="review-num">
																		<span class="count" itemprop="ratingCount">2</span> reviews
																	</div>
																</div>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail border-0 p-0 d-none d-md-block">
														<img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
													</div>
													<div class="comment-block">
														<div class="comment-arrow"></div>
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="float-right">
																<div class="pb-0 clearfix">
																	<div title="Rated 3 out of 5" class="float-left">
																		<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
																	</div>

																	<div class="review-num">
																		<span class="count" itemprop="ratingCount">2</span> reviews
																	</div>
																</div>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra odio, gravida urna varius vitae, gravida pellentesque urna varius vitae.</p>
													</div>
												</div>
											</li>
										</ul>
										<hr class="solid my-5">
										<h4>Add a review</h4>
										<div class="row">
											<div class="col">

												<form action="" id="submitReview" method="post">
													<div class="form-row">
														<div class="form-group col pb-2">
															<label class="required font-weight-bold text-dark">Rating</label>
															<input type="text" class="rating-loading" value="0" title="" data-plugin-star-rating data-plugin-options="{'color': 'primary', 'size':'sm'}">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="required font-weight-bold text-dark">Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="required font-weight-bold text-dark">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="required font-weight-bold text-dark">Review</label>
															<textarea maxlength="5000" data-msg-required="Please enter your review." rows="8" class="form-control" name="review" id="review" required></textarea>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col mb-0">
															<input type="submit" value="Post Review" class="btn btn-primary btn-modern" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>