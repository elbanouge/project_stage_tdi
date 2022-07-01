<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-container container-fluid px-lg-4">
						<div class="header-row">
							<div class="header-column header-column-border-right flex-grow-0">
								<div class="header-row pr-4">
									@include('porto.partials.header-logo.header-logo-64')
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-nav.header-nav-293')
								</div>
							</div>
							<div class="header-column header-column-border-left flex-grow-0 justify-content-center">
								<div class="header-row pl-5 justify-content-end">
									<div class="header-nav-features-search-reveal-container">
										@include('porto.partials.header-nav-feature.header-nav-feature-19')
									</div>
								</div>
							</div>
							<div class="header-nav-features header-nav-features-no-border p-static z-index-2">
								<button class="btn header-btn-collapse-nav ml-0 ml-sm-3" data-toggle="collapse" data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
								@include('porto.partials.header-nav-feature.header-nav-feature-20')
							</div>
						</div>
					</div>
				</div>
			</header>