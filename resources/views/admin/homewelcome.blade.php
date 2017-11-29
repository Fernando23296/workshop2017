<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>DELIVERY FOOD</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>
<body>
<div class="container text-center">
        <div class="page-header">
            
        </div>
        <hr>
        <hr>
        <h2>Bienvenid@ a Delivery Food</h2><hr>
        
        <div class="row">
            
            <div class="col-md-12">
                <div class="panel">
                    <i class="fa fa-user icon-home"></i>
                    <a href="{{ route('admin.login') }}" class="btn btn-warning btn-block btn-home-admin">Administrador</a>
                    <h4>¿Deseas que tú empresa acceda a nuestros servicios? Este es el lugar para ti.</h4>
                     <h4>Accede a tu cuenta para controlar tu negocio.</h4>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="{{ route('login') }}" class="btn btn-warning btn-block btn-home-admin">Cliente</a>
                    <h4>¿Deseas realizar una compra? Este es el lugar para ti.</h4>
                     <h4>Accede a tu cuenta para empezar a llenar el carrito.</h4>
                </div>
            </div>
                    
        </div>

        
    </div>
    <hr>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>