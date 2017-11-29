@extends('store.template1')

@section('content')
   	
    <body>

            
           

    <table>

        <tr align="center">

            <div class="row">
                <div class="panel">
                    <a href="{{url('admin/home')}}" class="btn btn-warning btn-block btn-home-admin">VOLVER PANEL ADMIN</a>
                    <i class="fa fa-user icon-home"></i>
                    <a href="{{ route('admin.login') }}" class="btn btn-warning btn-block btn-home-admin">BIENVENIDO A LA PAGINA DE REPORTES</a>
                   <center>
                   <ul><H3>Productos</H3>
                       <li><H4><a href="#primero">Reporte segun STOCK</a></H4></li>
                       <li><H4><a href="#segundo">Reporte segun TIPOS</a></H4></li>

                       <li><H4><a href="#tercero">Reporte segun PRECIOS</a></H4></li>
                   </ul>
               </center>
      
            </div>
        </tr>
        <a name="primero"><tr>
             <hr>
            <div class="app">
            <center>
                
                {!! $chart->html() !!}

            </center>
        </div>
        <hr>
        </tr></a>
        <a name="segundo"><tr>
            <div class="app">
            <center>
                
                {!! $bar->html() !!}

            </center>
        </div>
         <hr>

        </tr></a>

         <a name="tercero"><tr>
            <div class="app">
            <center>
                
                {!! $precio->html() !!}
          

            </center>
        </div>
        <hr>
        </tr></a>

    </table>

    {!! Charts::scripts() !!}
        {!! $chart->script() !!}

        {!! $bar->script() !!}
        {!! $precio->script() !!}
    </body>
@stop