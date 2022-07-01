@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-204')
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="alert alert-info alert-admin">
								<div class="row">
									<div class="col-lg-8">
										<h4>Admin Extension</h4>
										<p><strong class="warning"><i class="fas fa-exclamation-triangle"></i> Warning!</strong> This page is part of the admin extension and is <strong>NOT</strong> included on Porto - Responsive HTML5 Template, to get all features, purchase both templates: <a target="_blank" href="http://www.themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">Porto ($16)</a> + <a target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">Porto Admin ($16)</a>: <strong>$32 Total.</strong></p>
										<p>
											<a class="btn btn-lg btn-sm btn-primary" target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">View Porto Admin!</a>
										</p>
									</div>
									<div class="col-lg-4 visible-md visible-lg">
										<img class="appear-animation float-right" src="img/admin-banner.png" data-appear-animation="fadeIn">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<h4 class="mt-0 mb-0">Flot Charts</h4>
					<p class="mb-4">Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</p>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Basic Chart</h2>
									<p class="card-subtitle">You don't have to do much to get an attractive plot. Create a placeholder, make sure it has dimensions (so Flot knows at what size to draw the plot), then call the plot function with your data.</p>
								</header>
								<div class="card-body">

									<!-- Flot: Basic -->
									<div class="chart chart-md" id="flotBasic"></div>
									<script type="text/javascript">

										var flotBasicData = [{
											data: [
												[0, 170],
												[1, 169],
												[2, 173],
												[3, 188],
												[4, 147],
												[5, 113],
												[6, 128],
												[7, 169],
												[8, 173],
												[9, 128],
												[10, 128]
											],
											label: "Series 1",
											color: "#0088cc"
										}, {
											data: [
												[0, 115],
												[1, 124],
												[2, 114],
												[3, 121],
												[4, 115],
												[5, 83],
												[6, 102],
												[7, 148],
												[8, 147],
												[9, 103],
												[10, 113]
											],
											label: "Series 2",
											color: "#2baab1"
										}, {
											data: [
												[0, 70],
												[1, 69],
												[2, 73],
												[3, 88],
												[4, 47],
												[5, 13],
												[6, 28],
												[7, 69],
												[8, 73],
												[9, 28],
												[10, 28]
											],
											label: "Series 3",
											color: "#734ba9"
										}];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Real-Time Chart</h2>
									<p class="card-subtitle">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
								</header>
								<div class="card-body">

									<!-- Flot: Curves -->
									<div class="chart chart-md" id="flotRealTime"></div>

								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bars Chart</h2>
									<p class="card-subtitle">With the categories plugin you can plot categories/textual data easily.</p>
								</header>
								<div class="card-body">

									<!-- Flot: Bars -->
									<div class="chart chart-md" id="flotBars"></div>
									<script type="text/javascript">

										var flotBarsData = [
											["Jan", 28],
											["Feb", 42],
											["Mar", 25],
											["Apr", 23],
											["May", 37],
											["Jun", 33],
											["Jul", 18],
											["Aug", 14],
											["Sep", 18],
											["Oct", 15],
											["Nov", 4],
											["Dec", 7]
										];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Pie Chart</h2>
									<p class="card-subtitle">Default Pie Chart</p>
								</header>
								<div class="card-body">

									<!-- Flot: Pie -->
									<div class="chart chart-md" id="flotPie"></div>
									<script type="text/javascript">

										var flotPieData = [{
											label: "Series 1",
											data: [
												[1, 60]
											],
											color: '#0088cc'
										}, {
											label: "Series 2",
											data: [
												[1, 10]
											],
											color: '#2baab1'
										}, {
											label: "Series 3",
											data: [
												[1, 15]
											],
											color: '#734ba9'
										}, {
											label: "Series 4",
											data: [
												[1, 15]
											],
											color: '#E36159'
										}];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
					</div>

					<h4 class="mt-5 mb-0">Morris Charts</h4>
					<p class="mb-3">Good-looking charts shouldn't be difficult.</p>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart</h2>
									<p class="card-subtitle">A style of chart that is created by connecting a series of data points together with a line.</p>
								</header>
								<div class="card-body">

									<!-- Morris: Line -->
									<div class="chart chart-md" id="morrisLine"></div>
									<script type="text/javascript">

										var morrisLineData = [{
											y: '2006',
											a: 100,
											b: 90
										}, {
											y: '2007',
											a: 75,
											b: 65
										}, {
											y: '2008',
											a: 50,
											b: 40
										}, {
											y: '2009',
											a: 75,
											b: 65
										}, {
											y: '2010',
											a: 50,
											b: 40
										}, {
											y: '2011',
											a: 75,
											b: 65
										}, {
											y: '2012',
											a: 100,
											b: 90
										}, {
											y: '2017',
											a: 75,
											b: 65
										}, {
											y: '2017',
											a: 100,
											b: 90
										}];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Donut Chart</h2>
									<p class="card-subtitle">Donut Chart are functionally identical to pie charts.</p>
								</header>
								<div class="card-body">

									<!-- Morris: Donut -->
									<div class="chart chart-md" id="morrisDonut"></div>
									<script type="text/javascript">

										var morrisDonutData = [{
											label: "Porto Template",
											value: 32
										}, {
											label: "Tucson Template",
											value: 18
										}, {
											label: "Porto Admin",
											value: 20
										}];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart</h2>
									<p class="card-subtitle">A bar chart is a way of summarizing a set of categorical data.</p>
								</header>
								<div class="card-body">

									<!-- Morris: Bar -->
									<div class="chart chart-md" id="morrisBar"></div>
									<script type="text/javascript">

										var morrisBarData = [{
											y: '2004',
											a: 10,
											b: 30
										}, {
											y: '2005',
											a: 100,
											b: 25
										}, {
											y: '2006',
											a: 60,
											b: 25
										}, {
											y: '2007',
											a: 75,
											b: 35
										}, {
											y: '2008',
											a: 90,
											b: 20
										}, {
											y: '2009',
											a: 75,
											b: 15
										}, {
											y: '2010',
											a: 50,
											b: 10
										}, {
											y: '2011',
											a: 75,
											b: 25
										}, {
											y: '2012',
											a: 30,
											b: 10
										}, {
											y: '2017',
											a: 75,
											b: 5
										}, {
											y: '2017',
											a: 60,
											b: 8
										}];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Stacked Chart</h2>
									<p class="card-subtitle">Stacked Bar Chart.</p>
								</header>
								<div class="card-body">

									<!-- Morris: Area -->
									<div class="chart chart-md" id="morrisStacked"></div>
									<script type="text/javascript">

										var morrisStackedData = [{
											y: '2004',
											a: 10,
											b: 30
										}, {
											y: '2005',
											a: 100,
											b: 25
										}, {
											y: '2006',
											a: 60,
											b: 25
										}, {
											y: '2007',
											a: 75,
											b: 35
										}, {
											y: '2008',
											a: 90,
											b: 20
										}, {
											y: '2009',
											a: 75,
											b: 15
										}, {
											y: '2010',
											a: 50,
											b: 10
										}, {
											y: '2011',
											a: 75,
											b: 25
										}, {
											y: '2012',
											a: 30,
											b: 10
										}, {
											y: '2017',
											a: 75,
											b: 5
										}, {
											y: '2017',
											a: 60,
											b: 8
										}];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Area Chart</h2>
									<p class="card-subtitle">An area chart or area graph displays graphically quantitive data.</p>
								</header>
								<div class="card-body">

									<!-- Morris: Area -->
									<div class="chart chart-md" id="morrisArea"></div>
									<script type="text/javascript">

										var morrisAreaData = [{
											y: '2004',
											a: 10,
											b: 30
										}, {
											y: '2005',
											a: 100,
											b: 25
										}, {
											y: '2006',
											a: 60,
											b: 25
										}, {
											y: '2007',
											a: 75,
											b: 35
										}, {
											y: '2008',
											a: 90,
											b: 20
										}, {
											y: '2009',
											a: 75,
											b: 15
										}, {
											y: '2010',
											a: 50,
											b: 10
										}, {
											y: '2011',
											a: 75,
											b: 25
										}, {
											y: '2012',
											a: 30,
											b: 10
										}, {
											y: '2017',
											a: 75,
											b: 5
										}, {
											y: '2017',
											a: 60,
											b: 8
										}];

										// See: js/examples/examples.charts.js for more settings.

									</script>

								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<h4 class="mb-0 mt-2">Circular Charts</h4>
							<p class="mb-3">Easy pie chart is a jQuery plugin that uses the canvas element to render simple pie charts for single values.</p>

							<div class="row">
								<div class="col-md-12">
									<section class="card card-admin">
										<header class="card-header">
											<div class="card-actions">
												<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
												<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
											</div>

											<h2 class="card-title">Easy Pie Chart</h2>
											<p class="card-subtitle">Lightweight jQuery plugin to render and animate nice pie charts with the HTML5 canvas element.</p>
										</header>
										<div class="card-body">
											<div class="row text-center">
												<div class="col-lg-6">
													@include('porto.partials.circular-bar.circular-bar-10')
												</div>
												<div class="col-lg-6">
													@include('porto.partials.circular-bar.circular-bar-11')
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h4 class="mb-0 mt-2">Gauge Charts</h4>
							<p class="mb-3">Animated Gauge Charts</p>

							<div class="row">
								<div class="col-md-12">
									<section class="card card-admin">
										<header class="card-header">
											<div class="card-actions">
												<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
												<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
											</div>

											<h2 class="card-title">Gauge</h2>
											<p class="card-subtitle">100% native and cool looking animated JavaScript/CoffeScript gauge.</p>
										</header>
										<div class="card-body">
											<div class="row text-center">
												<div class="col-lg-6">
													<div class="gauge-chart">
														<canvas id="gaugeBasic" width="180" height="110" data-plugin-options='{ "value": 2150, "maxValue": 3000 }'></canvas>
														<strong>Design</strong>
														<label id="gaugeBasicTextfield"></label>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="gauge-chart">
														<canvas id="gaugeAlternative" width="180" height="110" data-plugin-options='{ "value": 1350, "maxValue": 3000 }'></canvas>
														<strong>HTML</strong>
														<label id="gaugeAlternativeTextfield"></label>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<h4 class="mb-0 mt-4">Liquid Charts</h4>
							<p class="mb-3">Adds animated liquid charts.</p>

							<div class="row">
								<div class="col-md-12">
									<section class="card card-admin">
										<header class="card-header">
											<div class="card-actions">
												<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
												<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
											</div>

											<h2 class="card-title">Liquid Meter</h2>
											<p class="card-subtitle">Exclusive Plug-in by Okler Themes</p>
										</header>
										<div class="card-body">
											<div class="row">
												<div class="col-lg-6">
													<meter min="0" max="100" value="35" id="meter"></meter>
												</div>
												<div class="col-lg-6">
													<meter min="0" max="100" value="85" id="meterDark"></meter>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h4 class="mb-0 mt-4">Small Inline Charts</h4>
							<p class="mb-3">Adds tiny charts called sparklines.</p>

							<div class="row">
								<div class="col-md-12">
									<section class="card card-admin">
										<header class="card-header">
											<div class="card-actions">
												<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
												<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
											</div>

											<h2 class="card-title">Sparklines</h2>
											<p class="card-subtitle">This jQuery plugin generates sparklines (small inline charts).</p>
										</header>
										<div class="card-body">
											<div class="row">
												<div class="col-xs-6 col-lg-4">
													<div class="small-chart-wrapper">
														<div class="small-chart" id="sparklineLine"></div>
														<div class="small-chart-info">
															<label>Average</label>
															<strong>1567.89</strong>
														</div>
														<script type="text/javascript">
															var sparklineLineData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
														</script>
													</div>
												</div>

												<div class="col-xs-6 col-lg-4">
													<div class="small-chart-wrapper">
														<div class="small-chart" id="sparklineBar"></div>
														<div class="small-chart-info">
															<label>Average</label>
															<strong>5000</strong>
														</div>
														<script type="text/javascript">
															var sparklineBarData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
														</script>
													</div>
												</div>

												<div class="col-xs-6 col-lg-4">
													<div class="small-chart-wrapper">
														<div class="small-chart" id="sparklineTristate"></div>
														<div class="small-chart-info">
															<label>Average</label>
															<strong>1567.89</strong>
														</div>
														<script type="text/javascript">
															var sparklineTristateData = [1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1];
														</script>
													</div>
												</div>

												<div class="col-xs-6 col-lg-4">
													<div class="small-chart-wrapper">
														<div class="small-chart" id="sparklineDiscrete"></div>
														<div class="small-chart-info">
															<label>Average</label>
															<strong>1567.89</strong>
														</div>
														<script type="text/javascript">
															var sparklineDiscreteData = [5, 6, 7, 9, 10, 5, 3, 2, 2, 4, 6, 7];
														</script>
													</div>
												</div>

												<div class="col-xs-6 col-lg-4">
													<div class="small-chart-wrapper">
														<div class="small-chart" id="sparklineBullet"></div>
														<div class="small-chart-info">
															<label>Average</label>
															<strong>1567.89</strong>
														</div>
														<script type="text/javascript">
															var sparklineBulletData = [10, 12, 12, 9, 7];
														</script>
													</div>
												</div>

												<div class="col-xs-6 col-lg-4">
													<div class="small-chart-wrapper">
														<div class="small-chart text-center" id="sparklinePie"></div>
														<div class="small-chart-info">
															<label>Average</label>
															<strong>1567.89</strong>
														</div>
														<script type="text/javascript">
															var sparklinePieData = [1, 1, 2];
														</script>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>

					<h4 class="mb-0 mt-5 pt-4">Chartist - Simple Responsive Charts</h4>
					<p class="mb-3">You may think that this is just yet an other charting library. But Chartist.js is the product of a community that was disappointed about the abilities provided by other charting libraries. Of course there are hundreds of other great charting libraries but after using them there were always tweaks you would have wished for that were not included.</p>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart: Simple Chart</h2>
								</header>
								<div class="card-body">
									<div id="ChartistSimpleLineChart" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart: Scatter Diagram With Responsive Settings</h2>
								</header>
								<div class="card-body">
									<div id="ChartistLineScatterDiagramWithResponsiveSettings" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart: With Tooltips</h2>
								</header>
								<div class="card-body">
									<div id="ChartistLineChartWithTooltips" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart: With Area</h2>
								</header>
								<div class="card-body">
									<div id="ChartistLineChartWithArea" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart: Bi-Polar Chart With Area Only</h2>
								</header>
								<div class="card-body">
									<div id="ChartistBiPolarLineChartWithAreaOnly" class="ct-chart ct-perfect-fourth ct-golden-section"></div>
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart: Using Events to Replace Graphics</h2>
								</header>
								<div class="card-body">
									<div id="ChartistEventsToReplaceGraphics" class="ct-chart ct-perfect-fourth ct-golden-section"></div>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Line Chart: Interpolation / Smoothing</h2>
								</header>
								<div class="card-body">
									<div id="ChartistLineInterpolationSmoothing" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart: Bi-Polar Chart</h2>
								</header>
								<div class="card-body">
									<div id="ChartistBiPolarBarChart" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart: Overlapping On Mobile</h2>
								</header>
								<div class="card-body">
									<div id="ChartistOverlappingBarsOnMobile" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart: Add Peak Circles Using Draw Events</h2>
								</header>
								<div class="card-body">
									<div id="ChartistAddPeakCirclesUsingDrawEvents" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart: Multi-Line Labels</h2>
								</header>
								<div class="card-body">
									<div id="ChartistMultiLineLabels" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart: Stacked Chart</h2>
								</header>
								<div class="card-body">
									<div id="ChartistStackedChart" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart: Horizontal Chart</h2>
								</header>
								<div class="card-body">
									<div id="ChartistHorizontalChart" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Bar Chart: Extreme Responsive Configuration</h2>
								</header>
								<div class="card-body">
									<div id="ChartistExtremeResponsiveConfiguration" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Pie Chart: Simple Chart</h2>
								</header>
								<div class="card-body">
									<div id="ChartistSimplePieChart" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Pie Chart: With Custom Labels</h2>
								</header>
								<div class="card-body">
									<div id="ChartistPieChartWithCustomLabels" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Gauge Chart</h2>
								</header>
								<div class="card-body">
									<div id="ChartistGaugeChart" class="ct-chart ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">CSS Animation</h2>
								</header>
								<div class="card-body">
									<div id="ChartistCSSAnimation" class="ct-chart ct-perfect-fourth ct-golden-section"></div>

									<!-- See: js/examples/examples.charts.js for the example code. -->
								</div>
							</section>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="footer-texts-more-lighten">
				<div class="container">
					<div class="row py-4 my-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span> 
									1234 Street Name, City, State, USA
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
									<a href="tel:+1234567890">Toll Free (123) 456-7890</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
									<a href="mailto:mail@example.com">mail@example.com</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
									Mon - Sun / 9:00AM - 8:00PM
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
								<li class="mb-0"><a href="about-us.html">About Us</a></li>
								<li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
								<li class="mb-0"><a href="page-careers.html">Careers</a></li>
								<li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
								<li class="mb-0"><a href="#">Our Location</a></li>
								<li class="mb-0"><a href="#">Privacy Policy</a></li>
								<li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article>
								<a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
						</div>
						<div class="col-md-6 col-lg-3">
							<h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
							<p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
								<div class="form-row">
									<div class="form-group col">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
									</div>
								</div>
							</form>
						</div>
					</div>porto.partials
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright', ['key' => 'footer-copyright.footer-copyright'])
				</div>
			</footer>
@endsection
