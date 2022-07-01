@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-205')
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
					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Select Replacement</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered" action="#">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Basic select</label>
											<div class="col-lg-6">
												<select data-plugin-selecttwo class="form-control populate">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Multi-Value Select</label>
											<div class="col-lg-6">
												<select multiple data-plugin-selecttwo class="form-control populate">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Placeholders </label>
											<div class="col-lg-6">
												<select data-plugin-selecttwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }'>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Minimum Input</label>
											<div class="col-lg-6">
												<select data-plugin-selecttwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option><option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>

									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Multi-select</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered" action="#">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Basic Multi-select</label>
											<div class="col-lg-6">
												<select class="form-control" multiple data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example0">
													<option value="cheese">Cheese</option>
													<option value="tomatoes" selected>Tomatoes</option>
													<option value="mozarella" selected>Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Basic Multi-select (Only One)</label>
											<div class="col-lg-6">
												<select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example1">
													<option value="cheese" selected>Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">With Preselected Options</label>
											<div class="col-lg-6">
												<select class="form-control" multiple data-plugin-options='{ "maxHeight": 200 }' data-plugin-multiselect id="ms_example2">
													<option value="cheese" selected>Cheese</option>
													<option value="tomatoes" selected>Tomatoes</option>
													<option value="mozarella" selected>Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Link button</label>
											<div class="col-lg-6">
												<select class="form-control" multiple data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "buttonClass": "btn btn-link pl-0 pr-0" }' id="ms_example3">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">With icon</label>
											<div class="col-lg-6">
												<div class="input-group input-group-select-append">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-th-list"></i>
														</span>
													</span>
													<select class="form-control" multiple data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example4">
														<option value="cheese">Cheese</option>
														<option value="tomatoes">Tomatoes</option>
														<option value="mozarella">Mozzarella</option>
														<option value="mushrooms">Mushrooms</option>
														<option value="pepperoni">Pepperoni</option>
														<option value="onions">Onions</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Select All Option</label>
											<div class="col-lg-6">
												<select class="form-control" multiple data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "includeSelectAllOption": true }' id="ms_example5">
													<optgroup label="Mathematics">
														<option value="analysis">Analysis</option>
														<option value="algebra">Linear Algebra</option>
														<option value="discrete">Discrete Mathematics</option>
														<option value="numerical">Numerical Analysis</option>
														<option value="probability">Probability Theory</option>
													</optgroup>
													<optgroup label="Computer Science">
														<option value="programming">Introduction to Programming</option>
														<option value="automata">Automata Theory</option>
														<option value="complexity">Complexity Theory</option>
														<option value="software">Software Engineering</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">With Search</label>
											<div class="col-lg-6">
												<select class="form-control" multiple data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "enableCaseInsensitiveFiltering": true }' id="ms_example6">
													<optgroup label="Mathematics">
														<option value="analysis">Analysis</option>
														<option value="algebra">Linear Algebra</option>
														<option value="discrete">Discrete Mathematics</option>
														<option value="numerical">Numerical Analysis</option>
														<option value="probability">Probability Theory</option>
													</optgroup>
													<optgroup label="Computer Science">
														<option value="programming">Introduction to Programming</option>
														<option value="automata">Automata Theory</option>
														<option value="complexity">Complexity Theory</option>
														<option value="software">Software Engineering</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Toggle All Button</label>
											<div class="col-lg-6">
												<div class="btn-group">
													<select class="form-control" multiple data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' data-multiselect-toggle-all="true" id="ms_example7">
														<option value="cheese">Cheese</option>
														<option value="tomatoes">Tomatoes</option>
														<option value="mozarella">Mozzarella</option>
														<option value="mushrooms">Mushrooms</option>
														<option value="pepperoni">Pepperoni</option>
														<option value="onions">Onions</option>
													</select>
													<div class="btn-group-append">
														<button id="ms_example7-toggle" class="btn btn-primary ml-2">Select All</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Tag Autocomplete</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered form-bordered">
										<div class="form-group row">
											<label for="tags-input" class="col-lg-3 control-label text-lg-right pt-2">Input Tags</label>
											<div class="col-lg-7">
												<input name="tags" id="tags-input" data-role="tagsinput" data-tag-class="badge badge-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing">
												<p>
													Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.
												</p>
											</div>
										</div>
										<div class="form-group row">
											<label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">True multi value</label>
											<div class="col-lg-7">
												<select id="tags-input-multiple" multiple data-role="tagsinput" data-tag-class="badge badge-primary">
													<option value="Amsterdam">Amsterdam</option>
													<option value="Washington">Washington</option>
													<option value="Sydney">Sydney</option>
													<option value="Beijing">Beijing</option>
												</select>
												<p>
													Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input, to gain true multivalue support. Instead of a comma separated string, the values will be set in an array. Existing <code>&lt;option /&gt;</code> elements will automatically be set as tags. This makes it also possible to create tags containing a comma.
												</p>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Toggle Switches</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered">

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2 col-lg-3">Large</label>
											<div class="col-lg-9">
												<div class="switch switch-lg switch-primary">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-lg switch-success">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-lg switch-warning">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-lg switch-danger">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-lg switch-info">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-lg switch-dark">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2 col-lg-3">Default</label>
											<div class="col-lg-9">
												<div class="switch switch-primary">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-success">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-warning">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-danger">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-info">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-dark">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2 col-lg-3">Small</label>
											<div class="col-lg-9">
												<div class="switch switch-sm switch-primary">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-sm switch-success">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-sm switch-warning">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-sm switch-danger">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-sm switch-info">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
												<div class="switch switch-sm switch-dark">
													<input type="checkbox" name="switch" data-plugin-ios-switch checked>
												</div>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>


					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Slider Range</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered">

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">One Value</label>
											<div class="col-lg-6">
												<div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "value": 50, "range": "min", "max": 100 }' data-plugin-slider-output="#listenSlider" data-plugin-slider-link-values-to="#priceRangeValues1">
													<input id="listenSlider" type="hidden" value="50">
												</div>
												<p id="priceRangeValues1" class="price-range-values">The current <code>value</code> is: <b class="min">50</b></p>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Range</label>
											<div class="col-lg-6">
												<div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "half_values": true, "values": [ 25, 75 ], "range": true, "max": 100 }' data-plugin-slider-output="#listenSlider2" data-plugin-slider-link-values-to="#priceRangeValues2">
													<input id="listenSlider2" type="hidden" value="25, 75">
												</div>
												<p id="priceRangeValues2" class="price-range-values">The <code>min</code> is: <b class="min">25</b> and the <code>max</code> is: <b class="max">75</b></p>
											</div>
										</div>

									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Spinners</h2>
								</header>
								<div class="card-body">

									<form class="form-horizontal form-bordered" action="#">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Default Spinner</label>
											<div class="col-lg-6">
												<div data-plugin-spinner>
													<div class="input-group form-control-small">
														<input type="text" class="spinner-input form-control" readonly>
														<div class="spinner-buttons input-group-btn btn-group-vertical">
															<button type="button" class="btn spinner-up btn-xs btn-default">
																<i class="fas fa-angle-up"></i>
															</button>
															<button type="button" class="btn spinner-down btn-xs btn-default">
																<i class="fas fa-angle-down"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Disabled</label>
											<div class="col-lg-6">
												<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
													<div class="input-group form-control-small">
														<input type="text" class="spinner-input form-control" maxlength="3" readonly>
														<div class="spinner-buttons input-group-btn btn-group-vertical">
															<button type="button" class="btn spinner-up btn-xs">
																<i class="fas fa-angle-up"></i>
															</button>
															<button type="button" class="btn spinner-down btn-xs">
																<i class="fas fa-angle-down"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Horizontal buttons</label>
											<div class="col-lg-6">
												<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
													<div class="input-group" style="width:150px;">
														<input type="text" class="spinner-input form-control" maxlength="3" readonly>
														<div class="input-group-append">
															<button type="button" class="btn btn-default spinner-up">
																<i class="fas fa-angle-up"></i>
															</button>
															<button type="button" class="btn btn-default spinner-down">
																<i class="fas fa-angle-down"></i>
															</button>
														</div>
													</div>
												</div>
												<p>
													with <code>max</code> value set to 10
												</p>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Alternative</label>
											<div class="col-lg-6">
												<div data-plugin-spinner data-plugin-options='{ "value":0, "step": 5, "min": 0, "max": 200 }'>
													<div class="input-group">
														<div class="input-group-prepend">
															<button type="button" class="btn btn-default spinner-up">
																<i class="fas fa-plus"></i>
															</button>
														</div>
														<input type="text" class="spinner-input form-control" maxlength="3" readonly>
														<div class="input-group-append">
															<button type="button" class="btn btn-default spinner-down">
																<i class="fas fa-minus"></i>
															</button>
														</div>
													</div>
												</div>
												<p>
													with <code>step</code> set to 5
												</p>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Masked Inputs</h2>
									<p class="card-subtitle">
										Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).
									</p>
								</header>
								<div class="card-body">
									<div class="form-body">
										<form class="form-horizontal form-bordered">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Date</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input id="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Phone</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-phone"></i>
															</span>
														</span>
														<input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Product Key</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-tag"></i>
															</span>
														</span>
														<input id="product-key" data-plugin-masked-input data-input-mask="(aa) 99-999" placeholder="(ab) 12-123" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="fc_inputmask_1">SSN</label>
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-plus"></i>
															</span>
														</span>
														<input id="fc_inputmask_1" data-plugin-masked-input data-input-mask="999-99-9999" placeholder="___-__-____" class="form-control">
													</div>
												</div>
											</div>
										</form></div>
									
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Date Picker</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered">

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Default Datepicker</label>
											<div class="col-lg-6">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-calendar-alt"></i>
														</span>
													</span>
													<input type="text" data-plugin-datepicker class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Date range</label>
											<div class="col-lg-6">
												<div class="input-daterange input-group" data-plugin-datepicker>
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-calendar-alt"></i>
														</span>
													</span>
													<input type="text" class="form-control" name="start">
													<span class="input-group-text border-left-0 border-right-0 rounded-0">
														to
													</span>
													<input type="text" class="form-control" name="end">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Multiple dates</label>
											<div class="col-lg-6">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-calendar-alt"></i>
														</span>
													</span>
													<input type="text" data-plugin-datepicker data-plugin-options='{ "multidate": true }' class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Inline</label>
											<div class="col-lg-3">
												<div data-plugin-datepicker data-plugin-skin="primary">
											</div>
										</div>

									
								</div>
							
						</form></div>
					</section></div>

					<div class="row">
						<div class="col-lg-12">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Time Pickers</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered">

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Default Time Picker</label>
											<div class="col-lg-6">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-clock"></i>
														</span>
													</span>
													<input type="text" data-plugin-timepicker class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">24 Hour Mode Time Picker</label>
											<div class="col-lg-6">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-clock"></i>
														</span>
													</span>
													<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Specify a step for the minute field</label>
											<div class="col-lg-6">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-clock"></i>
														</span>
													</span>
													<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 15 }'>
												</div>
											</div>
										</div>

									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Color Pickers</h2>
								</header>
								<div class="card-body">

									<form class="form-horizontal form-bordered" action="#">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Default</label>
											<div class="col-lg-6">
												<input type="text" data-plugin-colorpicker class="colorpicker-default form-control" value="#5498BA">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">RGBA</label>
											<div class="col-lg-6">
												<input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="rgba(119, 188, 210, 0.78)" data-plugin-options="{'format': 'rgba'}">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Horizontal</label>
											<div class="col-lg-6">
												<input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="#5498BA" data-horizontal="true">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Component</label>
											<div class="col-lg-6">
												<div class="input-group color" data-plugin-colorpicker>
													<span class="input-group-prepend"><span class="input-group-text input-group-addon colorpicker-input-addon"><i></i></span></span>
													<input type="text" class="form-control" value="#5498BA">
												</div>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">MaxLength Control</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered form-bordered" action="#">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Input</label>
											<div class="col-lg-6">
												<input class="form-control" data-plugin-maxlength maxlength="20">
												<p>
													<code>max-length</code> set to 20.
												</p>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Textarea</label>
											<div class="col-lg-6">
												<textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"></textarea>
												<p>
													<code>max-length</code> set to 140.
												</p>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">File Upload Drag'n Drop</h2>
								</header>
								<div class="card-body">
									<form action="/upload" class="dropzone dz-square" id="dropzone-example"></form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">WYSIWYG Editors</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Summernote</label>
											<div class="col-lg-9">
												<div class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><p>Start typing...</p></div>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Markdown Editor</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Bootstrap Markdown</label>
											<div class="col-lg-9">
												<textarea name="content" data-plugin-markdown-editor rows="10">Start typing...</textarea>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>
				</div>

			</div>

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
