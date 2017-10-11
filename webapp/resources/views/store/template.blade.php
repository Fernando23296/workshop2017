<html>
	<head>
		
		<title>@yield('title','tucus')</title>
	</head>

	<body>
		
	@include('store.partials.nav')
		
	@yield('content')

	@include('store.partials.footer')



	</body>

</html>