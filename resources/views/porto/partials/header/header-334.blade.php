<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container-fluid px-lg-4">
						<div class="header-row">
							<div class="header-column flex-grow-0">
								<div class="header-row pr-4">
									@include('porto.partials.header-logo.header-logo-18')
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-nav.header-nav-297')
								</div>
							</div>
							<div class="header-column flex-grow-0 justify-content-center">
								<div class="header-row pl-4 justify-content-end">
									@include('porto.partials.header-social-icons.header-social-icons-20')
									<button class="btn header-btn-collapse-nav ml-0 ml-sm-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>