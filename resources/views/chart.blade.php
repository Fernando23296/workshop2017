@extends('store.template1')

@section('content')
   	
    <body>
        <!-- Main Application (Can be VueJS or other JS framework) -->
        <li><div class="app">
            <center>
                {!! $chart->html() !!}

            </center>
        </div></li>
        <div class="app">
            <center>
                {!! $chart->html() !!}
                {!! $chart->html() !!}

            </center>
        </div>
        <!-- End Of Main Application -->
        {!! Charts::scripts() !!}
        {!! $chart->script() !!}

    </body>
@stop