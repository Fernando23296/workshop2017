<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@if (Auth::guard('web')->check())
	<p class="text-sucess">
		Has ingresado como <strong> USUARIO </strong>
	</p>
@else
	<p class="text-danger">
		No has ingresado <strong> USUARIO</strong>
	</p>

@endif

@if (Auth::guard('admin')->check())
	<p class="text-sucess">
		Has ingresado como <strong> ADMINISTRADOR </strong>
	</p>

  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Menu Administrador</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/store/products') }}"><p>Añadir Productos  <span class="glyphicon glyphicon-plus"></span></p></a></li>
      <li><a href="#"><p>Añadir Usuarios  <span class="glyphicon glyphicon-user"></span></p></a></li>
      <li><a href="#"><p>Añadir Productos  <span class="glyphicon glyphicon-plus"></span></p></a></li>
    </ul>
  </div>
</nav>
                  
@else
	<p class="text-danger">
		No has ingresado <strong> ADMINISTRADOR</strong>
	</p>


@endif
