<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>About Me | Porto - Responsive HTML5 Template</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('porto/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('porto/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('porto/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('porto/css/theme-shop.css')}}">



		<!-- Skin CSS -->	<!-- Demo CSS -->
		
	   <link rel="stylesheet" href="{{asset('porto/css/demos/demo-medical-2.css')}}">
	   <!--demo-medical.html-->
		<link rel="stylesheet" href="{{asset('porto/css/demos/demo-medical.css')}}">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('porto/css/skins/skin-medical-2.css')}}">
		<!--demo-medical.html-->
		<link id="skinCSS" rel="stylesheet" href="{{asset('porto/css/skins/skin-medical.css')}}">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('porto/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('porto/vendor/modernizr/modernizr.min.js')}}"></script>
		@yield('head')

	</head>
	<body data-plugin-page-transition>

		<div class="body">
			@yield('header')
			@yield('main')
			@yield('footer')
		</div>



		<!-- Vendor -->
		<script src="{{asset('porto/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('porto/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('porto/vendor/lazysizes/lazysizes.min.js')}}"></script>
		<script src="{{asset('porto/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('porto/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('porto/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('porto/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('porto/vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('porto/js/theme.js')}}"></script>

		
		<!-- Theme Custom -->
		<script src="{{asset('porto/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('porto/js/theme.init.js')}}"></script>

		@yield('foot')

	</body>
</html>