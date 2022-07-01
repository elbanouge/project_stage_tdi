<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyHeaderContainerHeight': 80, 'stickyStartAt': 50, 'stickyChangeLogo': false}">
				<div class="header-body border-top-0 bg-primary">
					<div class="header-container container-fluid">
						<div class="header-row">
							<div class="header-column align-items-start justify-content-center">
								@include('porto.partials.header-logo.header-logo-5')
							</div>
							<div class="header-column flex-row justify-content-end justify-content-lg-center">
								@include('porto.partials.header-nav.header-nav-8')
								<div class="header-nav-features pl-0 ml-3">
									<div class="header-nav-features-search-reveal-container">
										@include('porto.partials.header-nav-feature.header-nav-feature-5')
									</div>
								</div>
								<button class="btn header-btn-collapse-nav bg-transparent border-0 text-4 position-relative top-2 p-0 ml-4" data-toggle="collapse" data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
							<div class="header-column align-items-end justify-content-center d-none d-lg-flex">
								@include('porto.partials.header-social-icons.header-social-icons-2')
							</div>
						</div>
					</div>
				</div>
				<div class="header-nav-features header-nav-features-no-border p-static">
					@include('porto.partials.header-nav-feature.header-nav-feature-6')
				</div>
			</header>