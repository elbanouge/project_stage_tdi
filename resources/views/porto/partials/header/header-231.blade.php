<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 108, 'stickySetTop': '-108px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-top-0 box-shadow-none">
					<div class="header-container container z-index-2">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-logo.header-logo-48')
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row h-100">
									@include('porto.partials.header-extra-info.header-extra-info-5')
								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
						<div class="container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row">
										<div class="header-colum order-2 order-lg-1">
											<div class="header-row">
												@include('porto.partials.header-nav.header-nav-229')
											</div>
										</div>
										<div class="header-column order-1 order-lg-2">
											<div class="header-row justify-content-end">
												<div class="header-nav-features header-nav-features-no-border w-75 w-auto-mobile d-none d-sm-flex">
													<form role="search" class="d-flex w-100" action="page-search-results.html" method="get">
														<div class="simple-search input-group w-100">
															<input class="form-control border-0" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
															<span class="input-group-append bg-light border-0">
																<button class="btn" type="submit">
																	<i class="fa fa-search header-nav-top-icon"></i>
																</button>
															</span>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>