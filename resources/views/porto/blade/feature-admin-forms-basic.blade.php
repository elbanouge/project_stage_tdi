@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-206')
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

									<h2 class="card-title">Form Elements</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered" method="get">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Default</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" id="inputDefault">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Disabled</label>
											<div class="col-lg-6">
												<input class="form-control" id="inputDisabled" type="text" placeholder="Disabled input here..." disabled>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Read-Only Input</label>
											<div class="col-lg-6">
												<input type="text" value="Read-Only Input" id="inputReadOnly" class="form-control" readonly>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputHelpText">Help text</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" id="inputHelpText">
												<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Rounded Input</label>
											<div class="col-lg-6">
												<input type="text" class="form-control input-rounded" id="inputRounded">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputFocus">Input focus</label>
											<div class="col-lg-6">
												<input class="form-control" id="inputFocus" type="text" value="This is focused...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">Placeholder</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPassword">Password</label>
											<div class="col-lg-6">
												<input type="password" class="form-control" placeholder="" id="inputPassword">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-1">Static control</label>
											<div class="col-lg-6">
												<p class="form-control-static mb-0">email@example.com</p>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Left Icon</label>
											<div class="col-lg-6">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
													</span>
													<input type="text" class="form-control" placeholder="Left icon">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Right Icon</label>
											<div class="col-lg-6">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Right icon">
													<span class="input-group-append">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">File Upload</label>
											<div class="col-lg-6">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="input-append">
														<div class="uneditable-input">
															<i class="fas fa-file fileupload-exists"></i>
															<span class="fileupload-preview"></span>
														</div>
														<span class="btn btn-default btn-file">
															<span class="fileupload-exists">Change</span>
															<span class="fileupload-new">Select file</span>
															<input type="file">
														</span>
														<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Vertical Group</label>
											<div class="col-lg-6">
												<section class="form-group-vertical">
													<input class="form-control" type="text" placeholder="Username">
													<input class="form-control" type="text" placeholder="Email">
													<input class="form-control last" type="password" placeholder="Password">
												</section>
											</div>
										</div>

										<div class="form-group row has-success">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputSuccess">Input with success</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" id="inputSuccess">
											</div>
										</div>
										<div class="form-group row has-warning">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputWarning">Input with warning</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" id="inputWarning">
											</div>
										</div>
										<div class="form-group row has-danger">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputError">Input with error</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" id="inputError">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputTooltip">Input with Tooltip</label>
											<div class="col-lg-6">
												<input type="text" placeholder="Hover me" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Place your tooltip info here" id="inputTooltip">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPopover">Input with Popover</label>
											<div class="col-lg-6">
												<input type="text" placeholder="Click Here" class="form-control" data-toggle="popover" data-placement="top" data-original-title="The Title" data-content="Content goes here..." data-trigger="click" id="inputPopover">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Column sizing</label>
											<div class="col-sm-8">
												<div class="row">
													<div class="col-sm-2">
														<input type="text" class="form-control" placeholder=".col-sm-2">
													</div>
													<div class="d-md-none mb-3"></div>
													<div class="col-sm-3">
														<input type="text" class="form-control" placeholder=".col-sm-3">
													</div>
													<div class="d-md-none mb-3"></div>
													<div class="col-sm-4">
														<input type="text" class="form-control" placeholder=".col-sm-4">
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

									<h2 class="card-title">Controls sizing</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered" method="get">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Input sizing</label>
											<div class="col-lg-6">
												<input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
												<input class="form-control mb-3" type="text" placeholder="Default input">
												<input class="form-control form-control-sm mb-3" type="text" placeholder=".form-control-sm">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Select sizing</label>
											<div class="col-lg-6">
												<select class="form-control form-control-lg mb-3">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
												</select>
												<select class="form-control mb-3">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
												</select>
												<select class="form-control form-control-sm mb-3">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
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
								<div class="card-body">
									<form class="form-horizontal form-bordered" method="get">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Checkboxes and radios</label>
											<div class="col-lg-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														Option one is this and that—be sure to include why it's great
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														Option one is this and that—be sure to include why it's great option one
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
														Option one is this and that—be sure to include why it's great
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
														Option two can be something else and selecting it will deselect option one
													</label>
												</div>

											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Inline checkboxes</label>
											<div class="col-lg-6">
												<label class="checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
												</label>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Selects</label>
											<div class="col-lg-6">
												<select class="form-control mb-3">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>

												<select multiple class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
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

									<h2 class="card-title">Input Groups</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered" method="get">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Basic examples</label>
											<div class="col-lg-6">
												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">@</span>
													</span>
													<input type="text" class="form-control" placeholder="Username">
												</div>

												<div class="input-group mb-3">
													<input type="text" class="form-control">
													<span class="input-group-append">
														<span class="input-group-text">.00</span>
													</span>
												</div>

												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">$</span>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-append">
														<span class="input-group-text">.00</span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Sizing</label>
											<div class="col-lg-6">
												<div class="input-group input-group-4 mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">@</span>
													</span>
													<input type="text" class="form-control form-control-lg" placeholder="Username">
												</div>

												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">@</span>
													</span>
													<input type="text" class="form-control" placeholder="Username">
												</div>

												<div class="input-group input-group-sm mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">@</span>
													</span>
													<input type="text" class="form-control" placeholder="Username">
												</div>

											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Iconic</label>
											<div class="col-lg-6">
												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
													</span>
													<input type="text" class="form-control" placeholder="Username">
												</div>
												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-envelope"></i>
														</span>
													</span>
													<input type="text" class="form-control" placeholder="Email">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Checkbox and radio</label>
											<div class="col-lg-6">
												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<input type="checkbox">
														</span>
													</span>
													<input type="text" class="form-control">
												</div>

												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<input type="radio">
														</span>
													</span>
													<input type="text" class="form-control">
												</div>

											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Button addons</label>
											<div class="col-lg-6">
												<div class="input-group mb-3">
													<span class="input-group-prepend">
														<button class="btn btn-danger" type="button">Go!</button>
													</span>
													<input type="text" class="form-control">
												</div>

												<div class="input-group mb-3">
													<input type="text" class="form-control">
													<span class="input-group-append">
														<button class="btn btn-success" type="button">Go!</button>
													</span>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Segmented buttons</label>
											<div class="col-lg-6">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<button type="button" class="btn btn-primary">Action</button>
														<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
															<div role="separator" class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Separated link</a>
														</div>
													</div>
													<input type="text" class="form-control">
												</div>

												<div class="input-group mb-3">
													<input type="text" class="form-control">
													<div class="input-group-append">
														<button tabindex="-1" class="btn btn-primary" type="button">Action</button>
														<button tabindex="-1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
															<span class="caret"></span>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
															<div role="separator" class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Separated link</a>
														</div>
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

									<h2 class="card-title">Custom Checkbox &amp; Radio</h2>
								</header>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6 mb-3 mb-lg-0">
											<form class="form-horizontal form-bordered" method="get">
												<div class="form-group row">
													<label class="col-sm-4 control-label">Checkboxes</label>

													<div class="col-sm-8">
														<div class="checkbox-custom checkbox-default">
															<input type="checkbox" checked id="checkboxExample1">
															<label for="checkboxExample1">Checkbox Default</label>
														</div>

														<div class="checkbox-custom checkbox-primary">
															<input type="checkbox" checked id="checkboxExample2">
															<label for="checkboxExample2">Checkbox Primary</label>
														</div>

														<div class="checkbox-custom checkbox-success">
															<input type="checkbox" checked id="checkboxExample3">
															<label for="checkboxExample3">Checkbox Success</label>
														</div>

														<div class="checkbox-custom checkbox-warning">
															<input type="checkbox" checked id="checkboxExample4">
															<label for="checkboxExample4">Checkbox Warning</label>
														</div>

														<div class="checkbox-custom checkbox-danger">
															<input type="checkbox" checked id="checkboxExample5">
															<label for="checkboxExample5">Checkbox Danger</label>
														</div>

														<div class="checkbox-custom">
															<input type="checkbox" disabled>
															<label>Checkbox Disabled</label>
														</div>

														<div class="checkbox-custom">
															<input type="checkbox" disabled checked>
															<label>Checked &amp; Disabled</label>
														</div>

													</div>
												</div>
											</form>
										</div>
										<div class="col-lg-6">
											<form class="form-horizontal form-bordered" method="get">
												<div class="form-group row">
													<label class="col-sm-4 control-label">Radios</label>

													<div class="col-sm-8">
														<div class="radio-custom">
															<input type="radio" id="radioExample1" name="radioExample">
															<label for="radioExample1">Radio Default</label>
														</div>

														<div class="radio-custom radio-primary">
															<input type="radio" id="radioExample2" name="radioExample">
															<label for="radioExample2">Radio Primary</label>
														</div>

														<div class="radio-custom radio-success">
															<input type="radio" id="radioExample3" name="radioExample">
															<label for="radioExample3">Radio Success</label>
														</div>

														<div class="radio-custom radio-warning">
															<input type="radio" id="radioExample4" name="radioExample">
															<label for="radioExample4">Radio Warning</label>
														</div>

														<div class="radio-custom radio-danger">
															<input type="radio" id="radioExample5" name="radioExample">
															<label for="radioExample5">Radio Danger</label>
														</div>

														<div class="radio-custom">
															<input type="radio" disabled>
															<label>Radio Disabled</label>
														</div>

														<div class="radio-custom">
															<input type="radio" disabled checked>
															<label>Checked &amp; Disabled</label>
														</div>

													</div>
												</div>
											</form>
										</div>
									</div>
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

									<h2 class="card-title">Textarea</h2>
								</header>
								<div class="card-body">
									<form class="form-horizontal form-bordered" method="get">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Textarea</label>
											<div class="col-lg-6">
												<textarea class="form-control" rows="3" id="textareaDefault"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaAutosize">Textarea autosize</label>
											<div class="col-lg-6">
												<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">

							<div data-collapsed="0" class="card card-admin">

								<div class="card-header">
									<div class="card-title">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title">Input Grid</h2>
									</div>
								</div>

								<div class="card-body">

									<div class="row">

										<div class="col-lg-12 form-group">
											<input type="text" placeholder=".col-lg-12" class="form-control">
										</div>

										<div class="col-lg-6 form-group">
											<input type="text" placeholder=".col-lg-6" class="form-control">
										</div>

										<div class="col-lg-6 form-group">
											<input type="text" placeholder=".col-lg-6" class="form-control">
										</div>


										<div class="col-lg-4 form-group">
											<input type="text" placeholder=".col-lg-4" class="form-control">
										</div>

										<div class="col-lg-4 form-group">
											<input type="text" placeholder=".col-lg-4" class="form-control">
										</div>

										<div class="col-lg-4 form-group">
											<input type="text" placeholder=".col-lg-4" class="form-control">
										</div>


										<div class="col-lg-3 form-group">
											<input type="text" placeholder=".col-lg-3" class="form-control">
										</div>

										<div class="col-lg-3 form-group">
											<input type="text" placeholder=".col-lg-3" class="form-control">
										</div>

										<div class="col-lg-3 form-group">
											<input type="text" placeholder=".col-lg-3" class="form-control">
										</div>

										<div class="col-lg-3 form-group">
											<input type="text" placeholder=".col-lg-3" class="form-control">
										</div>


										<div class="col-lg-2 form-group">
											<input type="text" placeholder=".col-lg-2" class="form-control">
										</div>

										<div class="col-lg-2 form-group">
											<input type="text" placeholder=".col-lg-2" class="form-control">
										</div>

										<div class="col-lg-2 form-group">
											<input type="text" placeholder=".col-lg-2" class="form-control">
										</div>

										<div class="col-lg-2 form-group">
											<input type="text" placeholder=".col-lg-2" class="form-control">
										</div>

										<div class="col-lg-2 form-group">
											<input type="text" placeholder=".col-lg-2" class="form-control">
										</div>

										<div class="col-lg-2 form-group">
											<input type="text" placeholder=".col-lg-2" class="form-control">
										</div>


										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>

										<div class="col-lg-1 form-group">
											<input type="text" placeholder=".col-lg-1" class="form-control">
										</div>
									</div>

								</div>

							</div>

						</div>
					</div>

					<div class="row">
						<div class="col">
							<section class="card card-modern card-big-info card-admin">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-2-5 col-xl-1-5">
											<i class="card-big-info-icon bx bx-box"></i>
											<h2 class="card-big-info-title">General Info</h2>
											<p class="card-big-info-desc">Add here the product description with all details and necessary information.</p>
										</div>
										<div class="col-lg-3-5 col-xl-4-5">
											<div class="form-group row align-items-center">
												<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Product Name</label>
												<div class="col-lg-7 col-xl-6">
													<input type="text" class="form-control form-control-modern" name="productName" value="" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Product Description</label>
												<div class="col-lg-7 col-xl-6">
													<textarea class="form-control form-control-modern" name="productDescription" rows="6"></textarea>
												</div>
											</div>
										</div>
									</div>
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
