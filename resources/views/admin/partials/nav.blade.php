<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><i class="fa fa-dashboard"></i> DELIVERY FOOD</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('charts')}}">Reportes</a></li>
        
        <!--<li><a href="#">Pedidos</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-user"></i> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('admin.logout') }}">Finalizar sesión</a></li>
        
      </ul>
    </div>
  </div>
</nav>