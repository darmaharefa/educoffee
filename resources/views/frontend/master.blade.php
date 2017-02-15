<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title>EduCoffe @yield('title','| Homepage')</title>

		@yield('stylesheet')
		<link rel="stylesheet" href="/css/mightyslider.css">
	</head>
	<body >

		@include('frontend.component.header')

		@include('frontend.component.navbar')
			
		@yield('content', '')

		@include('frontend.component.footer')
		
		{{-- <script src="/js/app.js"></script> --}}
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/details-slider.js"></script>
	</body>
</html>
