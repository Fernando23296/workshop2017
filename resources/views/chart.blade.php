@extends('store.template1')

@section('content')
   	
    <body>
        <!-- Main Application (Can be VueJS or other JS framework) -->
        <div class="app">
            <center>
                {!! $chart->html() !!}
            </center>
        </div>
        <!-- End Of Main Application -->
        {!! Charts::scripts() !!}
        {!! $chart->script() !!}
    </body>
@stop