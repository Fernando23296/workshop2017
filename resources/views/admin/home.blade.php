@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-rocket"></i> Panel de Control - ADMINISTRADOR</h1>
        </div>
        
        <h2>Bienvenido</h2><hr>
        
        <div class="row">
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{url('charts')}}" class="btn btn-warning btn-block btn-home-admin">REPORTES</a>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-shopping-cart  icon-home"></i>
                    <a href="#" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
                </div>
            </div>
                    
        </div>
        
        <div class="row">
            
          <!--  <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-cc-paypal  icon-home"></i>
                    <a href="#" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
                </div>
            </div> -->
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="{{ route('register') }}" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{url('store/show')}}" class="btn btn-warning btn-block btn-home-admin">CATEGORÍAS</a>
                </div>
            </div>
                    
        </div>
        
    </div>
    <hr>

@stop