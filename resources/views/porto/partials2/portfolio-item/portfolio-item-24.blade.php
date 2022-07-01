<div class="portfolio-item">
									<div class="card">
										<div class="card-body p-5 mt-2">
											<h3 class="font-weight-bold text-transform-none line-height-4 text-5 pr-xl-5 mr-xl-5">
												<a href="{{$post->link}}" class="text-color-dark text-decoration-none">{{$post->title}}</a>
											</h3>
											<p class="mb-4">{{$post->text}}</p>
											<div class="d-flex align-items-center mb-4">
												<img src="{{$post->image}}" width="25" class="img-fluid rounded-circle mr-2" alt="">
												<span class="font-weight-bold text-color-dark text-2">{{$post->author}}</span>
											</div>
										</div>
									</div>
								</div>