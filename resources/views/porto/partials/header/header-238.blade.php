<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 62, 'stickySetTop': '-62px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-logo.header-logo-50')
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3 mb-3">
									@include('porto.partials.header-nav-top.header-nav-top-36')
									<div class="header-nav-features header-nav-features-no-border header-nav-features-md-show-border d-none d-md-inline-flex">
										<form role="search" action="page-search-results.html" method="get">
											<div class="simple-search input-group w-auto">
												<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
												<span class="input-group-append">
													<buttoporto.partialssubmit>
														<i class="fa fa-search header-nav-top-icon"></i>
													
												</buttoporto.partialssubmit></span>
											</div>
										</form>
									</div>
								</div>
								<div class="header-row">
									@include('porto.partials.header-nav.header-nav-212')
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>