<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<div class="header-top header-top-small-minheight header-top-simple-border-bottom">
						<div class="container py-2">
							<div class="header-row justify-content-between">
								<div class="header-column col-auto px-0">
									<div class="header-row">
										@include('porto.partials.header-nav-top.header-nav-top-1')
									</div>
								</div>
								<div class="header-column justify-content-end col-auto px-0 d-none d-md-flex">
									<div class="header-row">
										@include('porto.partials.header-nav-top.header-nav-top-2')
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
									@include('porto.partials.header-logo.header-logo-6')
									@include('porto.partials.header-nav.header-nav-19')
									@include('porto.partials.header-extra-info.header-extra-info')
									<div class="d-flex col-auto pr-0 pl-0 pl-xl-3">
										<div class="header-nav-features pl-0 ml-1">
											@include('porto.partials.header-nav-feature.header-nav-feature-7')
											@include('porto.partials.header-nav-feature.header-nav-feature-8')
										</div>
									</div>
									<button class="btn header-btn-collapse-nav ml-4" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>