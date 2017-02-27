<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title>EduCoffe @yield('title','| Homepage')</title>

		@yield('stylesheet')
		<link rel="stylesheet" href="/css/mightyslider.css">
	</head>
	<body >
	
		@yield('content', '')


		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/details-slider.js"></script>


		<script
		  	src="https://code.jquery.com/jquery-3.1.1.min.js"
		  	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  	crossorigin="anonymous">	
		</script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		@yield('script')

	</body>
</html>
