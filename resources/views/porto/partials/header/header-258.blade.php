<header id="header" class="side-header d-flex z-index-1">
				<div class="header-body">
					<div class="header-container container d-flex h-100">
						<div class="header-column flex-row flex-lg-column justify-content-center h-100">
							<div class="header-row flex-row justify-content-start justify-content-lg-center py-lg-5">
								<button class="hamburguer-btn hamburguer-btn-side-header active d-none d-lg-block d-xl-none" data-set-active="false">
									<span class="close">
										<span></span>
										<span></span>
									</span>
								</button>
								@include('porto.partials.header-logo.header-logo-52')
							</div>
							<div class="header-row header-row-side-header flex-row h-100 overflow-hidden pb-lg-5">
								@include('porto.partials.header-nav.header-nav-236')
							</div>
							<div class="header-row justify-content-end pb-lg-3">
								@include('porto.partials.header-social-icons.header-social-icons-14')
								<p class="d-none d-lg-block text-1 pt-3">© 2021 PORTO. All rights reserved</p>
								<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</header>