<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'My Laravel Store')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/main.css')}}">

</head>
<body>

		
	@include('store.partials.nav') 
	@include('store.partials.slider')
	
	<div class="container text-center">
	<div class="top-brands">
		
		<h1>Ofertas de la semana</h1>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul  class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#promo" id="promo-tab" role="tab" data-toggle="tab" aria-controls="promo" aria-expanded="true">Promociones</a></li>
						<li role="presentation"><a href="#locales" role="tab" id="locales-tab" data-toggle="tab" aria-controls="locales">Locales</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<!--AQUI VAN LAS PROMOCIONES--> 
						<div role="tabpanel" class="tab-pane fade in active" id="promo" aria-labelledby="promo-tab">
							<div class="agile-tp">
								<h2>Promociones de la semana</h2>
							</div>
							
							@yield('content-promo')
							



						</div>
						<!--AQUI VAN LOS LOCALES--> 
						<div role="tabpanel" class="tab-pane fade" id="locales" aria-labelledby="locales-tab">
							<div class="agile-tp">
								<h2>locales</h2>
							</div>
							
							@yield('content')

							
						</div>
					</div>

				</div>
			</div>
		
	</div>
	</div>


	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>