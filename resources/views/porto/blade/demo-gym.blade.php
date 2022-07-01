@extends('porto.app')
@section('header')
@include('porto.partials.header.header-108')
@endsection

@section('main')
<div role="main" class="main">
				
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fade">
								<img src="img/demos/gym/slides/slide-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
							</li>
							<li data-transition="fade">
								<img src="img/demos/gym/slides/slide-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
							</li>
						</ul>

						<div class="tp-static-layers">
							<h1 class="tp-caption font-weight-semibold text-color-light tp-static-layer" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50" data-start="800" data-startslide="0" data-endslide="99" data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 76px;">Take Action Now</h1>

								<div class="tp-caption font-weight-normal text-color-light text-uppercase tp-static-layer" data-x="center" data-hoffset="0" data-y="center" data-voffset="0" data-start="800" data-startslide="0" data-endslide="99" data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 22px;">Get ready and start our free trail</div>

								<a href="demo-gym-contact-us.html" class="btn btn-primary tp-caption text-uppercase text-color-light custom-font-weight-medium tp-static-layer" data-x="center" data-hoffset="0" data-y="center" data-voffset="80" data-start="1500" data-startslide="0" data-endslide="99" data-fontsize="['15','15','15','24']" data-lineheight="['17','17','17','26']" style="padding: 15px 25px;" data-transform_in="y:[-300%];opacity:0;s:500;">Join Now</a>
							</div>
						</div>
					</div>
				</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-155')
@endsection
