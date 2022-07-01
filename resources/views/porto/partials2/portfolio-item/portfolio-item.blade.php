<div class="portfolio-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{$post->image}}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$post->title}}</span>
										<span class="thumb-info-type">{{$post->type}}</span>
									</span>
									<span class="thumb-info-action">
										<a href="{{$post->link}}">
											<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
										</a>
										<a href="{{$post->image}}" class="lightbox-portfolio">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
										</a>
									</span>
								</span>
							</span>
						</div>